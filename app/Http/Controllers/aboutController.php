<?php

namespace App\Http\Controllers;
use App\Models\Partner;
use App\Models\About;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function fetchhome()
    {
        $about = About::first();
        if (!$about) {
            $about = About::create([]); // create an empty record
        }
        return view("Auth.aboutuploading", compact('about' ));
    }

    // Update record
    public function update(Request $request)
    {
        $section = About::first() ?? new About();
        $section->fill($request->only($section->getFillable()));
        $section->save();

        return back()->with('success', 'Section updated successfully.');
    }
        public function index()
    {
        // Fetch first (or latest) record of home section
        $about = About::first();
         $partners = Partner::latest()->paginate(10);
             $teams = TeamMember::latest()->paginate(12);
     return view('about', compact('about' , 'partners','teams'));

    }
}
