<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ContactExport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ContactRequest;
use App\Models\Contact;
use App\Models\Category;
use Maatwebsite\Excel\Facades\Excel;

class ContactController extends Controller
{

    public function index()
    {
        $contact = Contact::all();
        return view('admin.contact.index',['contacts'=>$contact]);
    }


    public function create()
    {
        // Nothing
    }


    public function store(ContactRequest $request)
    {

        $contactData = $request->all();

        Contact::create($contactData);

        return back()->with('created','Information send successfully!');
    }


    public function show(Contact $contact)
    {
        return view('admin.contact.show',compact('contact'));
    }


    public function edit(Contact $contact)
    {
        $contact = Contact::all();
        return view('admin.contact.edit',compact('contact','contact'));
    }


    public function update(ContactRequest $request, Contact $contact)
    {
        $contactData = $request->all();

        $contact->update($contactData);

        return redirect()->route('admin.contact.index')->with('updated','Information updated successfully!');
    }


    public function destroy(Contact $contact)
    {
        $contact->delete();

        return back()->with('deleted','Information deleted successfully!');
    }

    public function export()
    {
        return Excel::download(new ContactExport, 'contact.xlsx');
    }


//    public function create()
//    {
//        return view('profile');
//    }
//
//    public function store(Request $request)
//    {
//        // Validate the request
//        $request->validate([
//            'f_name' => 'required|string|max:255',
//            'l_name' => 'required|string|max:255',
//            'phone' => 'required|string|max:20',
//            'message' => 'required|string|max:1000',
//        ]);
//
//        // Create and save the message
//        Message::create([
//            'f_name' => $request->f_name,
//            'l_name' => $request->l_name,
//            'phone' => $request->phone,
//            'message' => $request->message,
//        ]);
//
//        // Optionally, you can redirect or return a response
//        return redirect('/profile');
////        return response()->json(['success' => true, 'message' => 'Message saved successfully.']);
//    }
//
//    public function export()
//    {
//        return Excel::download(new MessagesExport, 'messages.xlsx');
//    }


}
