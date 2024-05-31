<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::all();
        return view('admin.contact.index',['contacts'=>$contact]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Nothing
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {

        $contactData = $request->all();

        Contact::create($contactData);

        return back()->with('created','Information send successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('admin.contact.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        $categorys = Category::all();
        return view('admin.contact.edit',compact('categorys','contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request, Contact $contact)
    {
        $contactData = $request->all();

        $contact->update($contactData);

        return redirect()->route('admin.contact.index')->with('updated','Information updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return back()->with('deleted','Information deleted successfully!');
    }
}
