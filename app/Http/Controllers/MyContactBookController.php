<?php

namespace App\Http\Controllers;

use App\Http\Requests\MyContactBookRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class MyContactBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $allContacts = Contact::select('id','name','email','address','message')->get();
       return view('contact.index', compact('allContacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("contact.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MyContactBookRequest $request)
    {
        Contact::create($request->validated());
        return redirect()->route('contact.index')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MyContactBookRequest $request, Contact $contact)
    {
        $findContact = Contact::find($contact->id);
        if ($findContact) {
            $findContact->name = $request->name;
            $findContact->address = $request->address;
            $findContact->email = $request->email;
            $findContact->message = $request->message;
            $findContact->save();
        }
//        Contact::find($contact)->update($request->validated());
        return redirect()->route('contact.index')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')->with('success');
    }
}
