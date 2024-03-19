<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ServicesController extends Controller
{
    

    public function ViewServices()
    {

        $services = Service::all()->sortBy('order');

        return view('admin.service.view_services', compact('services'));
        // return view('admin.service.view_services');

    } //End Method

    /**
     * Save Service.
     */
    public function SaveService(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'summary' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ],[
            'name.required' => 'Service name is required',
            'summary.required' => 'Service summary is required',
            'image.required' => 'icon in PNG is required',
        ]);

        $service_no = count(Service::all());
        $order = $service_no + 1;
        
        $image = $request->file('image');

        if($image) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $sizedImg = $img->resize(200, 140);
            // $sizedImg->toJpeg(80)->save('upload/hero_images/'.$name_gen);
            $sizedImg->save('uploads/services/icons/'.$name_gen);
            $save_url = 'uploads/services/icons/'.$name_gen;
        }

            Service::insert([
                'order' => $order,
                'name' => $request->name,
                'summary' => $request->summary,
                'image' => $save_url,
            ]);

        $notification = array(
            'message' => 'Service saved',
        );

        return redirect()->back()->with($notification);

    }  //End Method

    /**
     * Sort slide.
     */
     public function SortService(Request $request)
    {

        $serviceOrder = $request->input('order');

        foreach ($serviceOrder as $index => $serviceId) {
        Service::where('id', $serviceId)->update(['order' => $index + 1]);
        }

        $notification = array(
            'message' => 'Service sorted',
            );

        return redirect()->back()->with($notification);

    } // End Method

    /**
     * Edit Service.
     */
    public function EditService($id)
    {

        $service = Service::findOrFail($id);

        return view('admin.service.edit_service', compact('service'));

    } // End Method

    /**
     * Update Service.
     */
    public function UpdateService(Request $request)
    {

        $id = $request->id;
        $image = $request->file('image');

        if($image){
        $service = Service::findOrFail($id);        
        $delImg = $service->image;

        try {
            if(file_exists($delImg)){
            unlink($delImg);
        }
        } catch (Exception $e) {
        Log::error("Error deleting old image: " . $e->getMessage());            
        }

            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $sizedImg = $img->resize(200, 140);
            // $sizedImg->toJpeg(80)->save('upload/hero_images/'.$name_gen);
            $sizedImg->save('uploads/services/icons/'.$name_gen);
            $save_url = 'uploads/services/icons/'.$name_gen;


            Service::findOrFail($id)->update([
                'name' => $request->name,
                'summary' => $request->summary,
                'image' => $save_url,
            ]);

        $notification = array(
            'message' => 'Service updated',
        );

        return redirect()->back()->with($notification);

        } else {

            Service::findOrFail($id)->update([
                'name' => $request->name,
                'summary' => $request->summary,
                ]);

        $notification = array(
            'message' => 'Service details updated',
            );

        return redirect()->back()->with($notification);
        }
    }  //End Method

    /**
     * Delete Service.
     */
    public function DeleteService($id)
    {
        
        $service = Service::findOrFail($id);        
        $delImg = $service->image;

        try {
            if(file_exists($delImg)){
            unlink($delImg);
        }
        } catch (Exception $e) {
        Log::error("Error deleting old image: " . $e->getMessage());            
        }

        Service::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Service deleted',
        );

        // return redirect()->back()->with($notification);

        return redirect()->route('view.services')->with($notification);

    } //End Method
}
