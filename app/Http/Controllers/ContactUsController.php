<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    function index()
    {
        return view('home');
    }

    function store()
    {

        request()->validate(
            [
                'name' => ['required', 'regex:/^[A-Za-z][A-Za-z0-9_]*$/'],
                'email' => ['required', 'email'],
                'phone' => ['required', 'regex:/^[0-9]+$/'],
                'message' => ['required']
            ],
            [
                'name.required' => 'Please Enter Your Name.',
                'name.regex' => 'Invalid name format. Name should start with a letter and can contain letters, numbers, and underscores only.',
                'email.required' => 'Your :attribute Incorrect.',
                'email.email' => 'Invalid email address format.',
                'phone.regex' => 'Invalid phone number format. Phone number should contain only digits.',
                'phone.required' => 'Your :attribute Incorrect.'
            ]
        );


        $infoForm = new Contact();

        $infoForm->name = request('name');
        $infoForm->email = request('email');
        $infoForm->phone = request('phone');
        $infoForm->message = request('message');

        $infoForm->save();

        // dd(request()->all());



        return back()->with('success', 'Thank You For Contacting Us'); //best

    }
}