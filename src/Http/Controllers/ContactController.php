<?php

namespace AnakinAli\Contact\Http\Controllers;

use AnakinAli\Contact\Mail\ContactMailable;
use AnakinAli\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact::contact');
    }

    public function handleRequest(Request $request)
    {
        $c=Contact::create($request->all());
        Mail::to(config('contact.email'))
            ->send(new ContactMailable($c));
        dd($request->all());
    }
}
