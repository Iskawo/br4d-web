<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create() { return view('contact.create'); }
    public function sent() { return view('contact.sent'); }
    public function discord() { return view('contact.discord'); }
    public function store(Request $request) {
        $data = request()->validate([
            'username' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        Mail::to('contact@iskawo.com')->send(new ContactFormMail($data));
        return view('/contact/sent');
    }
}