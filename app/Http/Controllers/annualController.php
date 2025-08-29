<?php

namespace App\Http\Controllers;
use App\Models\Report;
use App\Models\Annual;
use Illuminate\Http\Request;

class annualController extends Controller
{
  public function update(Request $request)
{
    $annual = Annual::first() ?? new Annual();
    $annual->fill($request->only($annual->getFillable()));
    $annual->save();

 return back()->with( 'success', 'Section updated successfully.');

}

public function fetchhome(){
    $annual= Annual::first() ?? new Annual();
     // Fetch first (or latest) record of home section
     
    return view('Auth.annualUploading',compact('annual'));
   
}
public function index()
{
    // Fetch first (or latest) record of home section
    $annual = Annual::first();

    // Fetch only the latest Annual Report
    $annualReport = Report::where('type', 'Annual Report')
                          ->latest()
                          ->first();

    return view('annual', compact('annual', 'annualReport'));
}
  
}
