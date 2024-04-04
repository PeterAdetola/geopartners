<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Enquiry;
// use Mail;

class EnquiryController extends Controller
{

    /**
     * Save Enquiry.
     */
    public function SendEnquiry()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'phone' => 'required|min:11',
            'email' => 'required|email',
            'subject' => 'required|min:5',
            'message' => 'required|min:5',
        ]);

        Mail::to('user@gmail.com')->send(new Enquiry($data));

        return redirect()->back()->with('message', 'Your message was sent successfully.');

        // return redirect()->route('email.feedback')->with('message', 'Your message was sent successfully.');
    }  //End Method
}
