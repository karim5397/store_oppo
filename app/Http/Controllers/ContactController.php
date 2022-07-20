<?php

namespace App\Http\Controllers;

use App\Http\Requests\contact\StoreContactRequest;
use App\Http\Requests\contact\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts=Contact::latest()->paginate(3);
        return view('admin.contact.index' , compact('contacts'));
    }


    public function create()
    {
        return view('admin.contact.create');
    }


    public function store(StoreContactRequest $request)
    {
        Contact::create($request->validated());
        return redirect()->route('contacts.index')->with('message' , 'Contact Created Successfully');
    }


    public function edit(Contact $contact)
    {
        $contact=Contact::find($contact->id);
        return view('admin.contact.edit' , compact('contact'));
    }

    public function update(UpdateContactRequest $request ,Contact $contact )
    {
            $contact=Contact::find($contact->id)->update($request->validated());
            return redirect()->route('contacts.index')->with('message' , 'The Contact Is Updated Successfully');
    }

    public function destroy(Contact $contact)
    {

        Contact::find( $contact->id)->delete();
        return redirect()->route('contacts.index')->with('message' , 'The Contact Is Deleted Successfully');
    }
}
