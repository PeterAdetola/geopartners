<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroSection;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class HeroController extends Controller
{
    /**
     * Homepage.
     */
    
    // public function Intropage()
    // {

    //     return view('frontend.index');

    // } //End Method

    /**
     * View slides.
     */

    public function ViewSlides()
    {

        $slides = HeroSection::all()->sortBy('order');

        return view('admin.hero.view_slides', compact('slides'));
        // return view('admin.hero.view_slides');

    } //End Method

    /**
     * Create slide.
     */

    // public function CreateSlide(Request $request)
    // {

    //     return view('admin.hero.create_slide');

    // } //End Method

    /**
     * Save slide.
     */
    public function SaveSlide(Request $request)
    {

        $request->validate([
            'heading' => 'required',
            'sub_heading' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ],[
            'heading.required' => 'Slide heading is required',
            'sub_heading.required' => 'Slide sub_heading is required',
            'image.required' => 'Hero image in JPG/PNG is required',
        ]);

        $order = 0;
        $image = $request->file('image');

        if($image) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $sizedImg = $img->resize(1920, 1128);
            // $sizedImg->toJpeg(80)->save('upload/hero_images/'.$name_gen);
            $sizedImg->save('uploads/hero_images/'.$name_gen);
            $save_url = 'uploads/hero_images/'.$name_gen;

            $thumbnail = $manager->read($image)->cover(200, 200)
            ->save('uploads/hero_images/thumbnails/thumbnail_' . $name_gen);
            $thumbnail = 'uploads/hero_images/thumbnails/thumbnail_'.$name_gen;
        }

            HeroSection::insert([
                'order' => $order,
                'heading' => $request->heading,
                'sub_heading' => $request->sub_heading,
                'image' => $save_url,
                'thumbnail' => $thumbnail,
            ]);

        $notification = array(
            'message' => 'Hero image saved',
        );

        return redirect()->back()->with($notification);

    }  //End Method

    /**
     * Edit slide.
     */
     public function EditSlide($id)
    {

        $editslide = HeroSection::findOrFail($id);

        return view('admin.home_slide.edit_slide', compact('editslide'));

    } // End Method

    /**
     * Update resource in storage.
     */
    public function UpdateSlide(Request $request)
    {

        $id = $request->id;
        $image = $request->file('image');

        if($image){
        $slide = HeroSection::findOrFail($id);        
        $delImg = $slide->image;
        $delThumb = $slide->thumbnail;

        try {
            if(file_exists($delImg)){
            unlink($delImg);
        }
            if(file_exists($delThumb)) {
            unlink($delThumb);                
            }
        } catch (Exception $e) {
        Log::error("Error deleting old image/thumbnail: " . $e->getMessage());            
        }

            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $sizedImg = $img->resize(1920, 1128);
            // $sizedImg->toJpeg(80)->save('upload/hero_images/'.$name_gen);
            $sizedImg->save('uploads/hero_images/'.$name_gen);
            $save_url = 'uploads/hero_images/'.$name_gen;

            $thumbnail = $manager->read($image)->cover(200, 200)
            ->save('uploads/hero_images/thumbnails/thumbnail_' . $name_gen);
            $thumbnail = 'uploads/hero_images/thumbnails/thumbnail_'.$name_gen;


            HeroSection::findOrFail($id)->update([
                'heading' => $request->heading,
                'sub_heading' => $request->sub_heading,
                'image' => $save_url,
                'thumbnail' => $thumbnail,
            ]);

        $notification = array(
            'message' => 'Hero image updated',
        );

        return redirect()->back()->with($notification);

        } else {

            HeroSection::findOrFail($id)->update([
                'heading' => $request->heading,
                'sub_heading' => $request->sub_heading,
                ]);

        $notification = array(
            'message' => 'Hero details updated',
            );

        return redirect()->back()->with($notification);
        }
    }  //End Method

    /**
     * Sort slide.
     */
     public function SortSlide(Request $request)
    {

        $slideOrder = $request->input('order');

        foreach ($slideOrder as $index => $slideId) {
        HeroSection::where('id', $slideId)->update(['order' => $index + 1]);
        }

        $notification = array(
            'message' => 'Slide sorted',
            );

        return redirect()->back()->with($notification);

    } // End Method


}
