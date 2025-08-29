<?php

namespace App\Http\Controllers;
use App\Models\TeamMember;
use App\Models\Project;
use App\Models\Home;
use Illuminate\Http\Request;

class homeController extends Controller
{


    public function fetchhome()
    {
        $home = Home::find(1);
        return view("Auth.homeuploading", compact("home"));
    }


    // Update record
    public function update(Request $request)
    {
        $section = Home::first(); // Or ->find($id)

        if (!$section) {
            $section = new Home();
        }

        $section->update($request->only($section->getFillable()));

        return back()->with('success', 'Section updated successfully.');
    }

   public function index()
{
    $home = Home::first();
    $members = TeamMember::latest()->paginate(4);
     $projects = Project::latest()->paginate(3);
    return view('welcome', compact('home', 'members','projects'));
}


}
