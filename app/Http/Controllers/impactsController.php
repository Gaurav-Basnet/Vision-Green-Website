<?php

namespace App\Http\Controllers;

use App\Models\Impacts;

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

     return view('impact', compact('impacts'));

    }

}