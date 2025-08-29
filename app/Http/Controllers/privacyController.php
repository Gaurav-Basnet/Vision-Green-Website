<?php

namespace App\Http\Controllers;
use App\Models\Privacy;
use Illuminate\Http\Request;

class privacyController extends Controller
{
             // Update record
 public function update(Request $request)
{
    $section = Privacy::first() ?? new Privacy();
    $section->fill($request->only($section->getFillable()));
    $section->save();

 return back()->with( 'success', 'Section updated successfully.');

}

public function fetchhome(){
    $privacydata= Privacy::first() ?? new Privacy();
    return view('Auth.privacyuploading',compact('privacydata'));
}
   public function index()
    {
        // Fetch first (or latest) record of home section
        $privacydata = Privacy::first();

     return view('privacy', compact('privacydata'));

    }
    
}
