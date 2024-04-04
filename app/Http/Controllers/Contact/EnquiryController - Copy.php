<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller
{

    /**
     * Save Enquiry.
     */
    public function SaveEnquiry(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'body' => 'required',
        ],[
            'name.required' => 'Name is required',
            'phone.required' => 'Phone number is required',
            'email.required' => 'Email is required',
            'subject.required' => 'Subject of the message is required',
            'body.required' => 'Message body is required',
        ]);

            Enquiry::insert([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'subject' => $request->subject,
                'body' => $request->body,
            ]);

        $notification = array(
            'message' => 'Enquiry saved',
        );

        return redirect()->back();

    }  //End Method
}
