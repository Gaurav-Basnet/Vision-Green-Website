<?php

namespace App\Http\Controllers;

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
    return view('Auth.annualUploading',compact('annual'));
   
}
}
