<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
      public function update(Request $request)
{
    $contact = Contact::first() ?? new Contact();
    $contact->fill($request->only($contact->getFillable()));
    $contact->save();

 return back()->with( 'success', 'Section updated successfully.');

}

public function fetchhome(){
    $contact= Contact::first() ?? new Contact();
    return view('Auth.contactuploading',compact('contact'));
   
}
       public function index()
    {
        // Fetch first (or latest) record of home section
        $contact =Contact::first();

     return view('contact', compact('contact'));

    }
}
