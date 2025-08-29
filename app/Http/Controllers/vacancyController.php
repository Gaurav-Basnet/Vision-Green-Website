<?php

namespace App\Http\Controllers;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
             // Update record
 public function update(Request $request)
{
    $section = Vacancy::first() ?? new Vacancy();
    $section->fill($request->only($section->getFillable()));
    $section->save();

 return back()->with( 'success', 'Section updated successfully.');

}

public function fetchhome(){
    $vacancy= Vacancy::first() ?? new Vacancy();
    return view('Auth.vacancyuploading',compact('vacancy'));
}

     public function index()
    {
        // Fetch first (or latest) record of home section
        $vacancy= Vacancy::first();

     return view('vacancy', compact('vacancy'));

    }

    
}
