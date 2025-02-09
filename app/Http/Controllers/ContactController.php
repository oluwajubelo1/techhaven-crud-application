<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view("contact");
    }

    public function store(ContactRequest $request) {
        Contact::create($request->validated());
//
//
//        // instantiate my model
//        $newContact = new Contact();
//        $newContact->name = $request->name;
//        $newContact->email = $request->email;
//        $newContact->address = $request->address;
//        $newContact->message = $request->message;
//        $newContact->save();

        // redirect to success page
        return view('success');
    }
}
