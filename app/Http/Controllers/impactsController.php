<?php

namespace App\Http\Controllers;

use App\Models\Impacts;
use App\Models\Report;
use Illuminate\Http\Request;

class impactsController extends Controller
{
 public function update(Request $request)
{
    $impacts = Impacts::first() ?? new Impacts();
    $impacts->fill($request->only($impacts->getFillable()));
    $impacts->save();

 return back()->with( 'success', 'Section updated successfully.');

}

public function fetchhome(){
    $impacts= Impacts::first() ?? new Impacts();
    return view('Auth.impactsuploading',compact('impacts'));
}
        public function index()
    {
        // Fetch first (or latest) record of home section
        $impacts =Impacts::first();
            // Fetch Annual Reports first
    $annualReports = Report::where('type', 'Annual Report')
                            ->orderBy('created_at', 'desc')
                            ->get();

    // Fetch other reports
    $otherReports = Report::where('type', '!=', 'Annual Report')
                          ->orderBy('created_at', 'desc')
                          ->get();

     return view('impact', compact('impacts' , 'annualReports', 'otherReports'));

    }

}