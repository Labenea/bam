<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view("main.pages.contact-us");
    }

    public function sendMessage(Request $request)
    {
        $email_array = array(
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            "email" => $request->email,
            "body" => $request->body,
        );

        Mail::to("info@baweraarthamakmur.com")->send(new ContactUs($email_array));

        return back()->with("status", "We have received your message and would like to thank you for writing to us");
    }
}
