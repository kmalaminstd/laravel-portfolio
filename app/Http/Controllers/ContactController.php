<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    
    public function create(Request $request){

        $attributes = $request->validate([
            "name" => "nullable",
            "email" => "required",
            "subject" => "required",
            "message" => "required"
        ]);

        Contact::create($attributes);

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($request->only('name', 'email', 'subject', 'message')));

        return back();

    }

    public function detroy(Contact $contact){
        $contact->delete();
        return back();
    }

}
