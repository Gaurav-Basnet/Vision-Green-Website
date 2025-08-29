<?php

namespace App\Http\Controllers;
use App\Models\Publication;
use Illuminate\Http\Request;

class publicationController extends Controller
{

     // Update record
 public function update(Request $request)
{
    $section = Publication::first() ?? new Publication();
    $section->fill($request->only($section->getFillable()));
    $section->save();

 return back()->with( 'success', 'Section updated successfully.');

}

public function fetchhome(){
    $homedata= Publication::first() ?? new Publication();
    return view('Auth.publicationuploading',compact('homedata'));
}
     public function index()
    {
        // Fetch first (or latest) record of home section
        $homedata = Publication::first();

     return view('publication', compact('homedata'));

    }

}
