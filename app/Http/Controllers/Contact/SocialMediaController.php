<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialMedia;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SocialMediaController extends Controller
{

    /**
     * Save SocialMedia.
     */
    public function SaveSocialMedia(Request $request)
    {

        $entry_no = SocialMedia::max('order');;
        $order = $entry_no + 1;

        $existing = SocialMedia::where('name', $request->name)->exists();

        if($existing) {

        $notification = array(
            'message' => 'Social Media already exists',
        );

        return redirect()->back()->with($notification);  

        } else {
            SocialMedia::insert([
                'order' => $order,
                'name' => $request->name,
                'link' => $request->link,
            ]);

        $notification = array(
            'message' => 'Social Media links saved',
        );

        return redirect()->back()->with($notification);
        }

    }  //End Method

    /**
     * Update SocialMedia.
     */
    public function UpdateSocialMedia(Request $request)
    {

        $id = $request->id;

        // $nameExisting = SocialMedia::where('name', $request->name)->exists();

            SocialMedia::findOrFail($id)->update([
                'name' => $request->name,
                'link' => $request->link,
                ]);
        

        $notification = array(
            'message' => 'Social Media updated',
            );

        return redirect()->back()->with($notification);

    } //End Method

    /**
     * Delete Contact.
     */
    public function DeleteSocialMedia($id)
    {


        SocialMedia::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Social Media deleted',
        );

        return redirect()->back()->with($notification);

    } //End Method
}
