<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutSummary;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AboutController extends Controller
{
    /**
     * Get About Summary.
     */

    public function UpdateAboutSummary(Request $request)
    {

        $id = $request->id;
        $existingRecord = AboutSummary::find($id);
        $formType = $request->input('form');

        $image = $request->file('image');
        // $caption = $request->input('caption');
        $caption = $existingRecord->isDirty('caption');

        if($formType === 'img-caption') {
            if($image && $caption) {
                $aboutSum = AboutSummary::findOrFail($id);        
                $delImg = $aboutSum->image;

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
                    $sizedImg = $img->resize(900, 614);
                    // $sizedImg->toJpeg(80)->save('upload/hero_images/'.$name_gen);
                    $sizedImg->save('uploads/about/about_summary/'.$name_gen);
                    $save_url = 'uploads/about/about_summary/'.$name_gen;


                    AboutSummary::findOrFail($id)->update([
                        'image' => $save_url,
                        'caption' => $request->caption,
                    ]);

                $notification = array(
                    'message' => 'Image & Caption updated',
                );

        return redirect()->back()->with($notification);

            } elseif ( $image ) {
        $aboutSum = AboutSummary::findOrFail($id);        
        $delImg = $aboutSum->image;

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
            $sizedImg = $img->resize(900, 614);
            // $sizedImg->toJpeg(80)->save('upload/hero_images/'.$name_gen);
            $sizedImg->save('uploads/about/about_summary/'.$name_gen);
            $save_url = 'uploads/about/about_summary/'.$name_gen;


            AboutSummary::findOrFail($id)->update([
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Image updated',
            );

        return redirect()->back()->with($notification);

        } else {

            AboutSummary::findOrFail($id)->update([
                'caption' => $request->caption,
            ]);

            $notification = array(
                'message' => 'Caption updated',
            );

        return redirect()->back()->with($notification);

        }

    } else {

            AboutSummary::findOrFail($id)->update([
                'summary' => $request->summary,
                ]);

        $notification = array(
            'message' => 'About summary updated',
            );

        return redirect()->back()->with($notification);

    }

    } //End Method
}
