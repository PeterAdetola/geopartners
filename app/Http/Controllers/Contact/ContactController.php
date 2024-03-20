<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ContactController extends Controller
{

    /**
     * Save Contact.
     */
    public function SaveContact(Request $request)
    {

        $request->validate([
            'phone' => 'required',
            'email' => 'required',
        ],[
            'phone.required' => 'Phone number is required',
            'email.required' => 'Email is required',
        ]);

            Contact::insert([
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
            ]);

        $notification = array(
            'message' => 'Contact saved',
        );

        return redirect()->back()->with($notification);

    }  //End Method

    /**
     * Update Contact.
     */
    public function UpdateContact(Request $request)
    {

        $id = $request->id;


            Contact::findOrFail($id)->update([
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                ]);

        $notification = array(
            'message' => 'Contact updated',
            );

        return redirect()->back()->with($notification);
    } //End Method

    /**
     * Delete Contact.
     */
    public function DeleteContact($id)
    {


        Contact::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Contact deleted',
        );

        return redirect()->back()->with($notification);

    } //End Method
    
}
