<?php

namespace App\Http\Controllers;

use App\Models\Terms;
use Illuminate\Http\Request;

class termsController extends Controller
{
 public function update(Request $request)
{
    $terms = Terms::first() ?? new Terms();
    $terms->fill($request->only($terms->getFillable()));
    $terms->save();

 return back()->with( 'success', 'Section updated successfully.');

}

public function fetchhome(){
    $terms= Terms::first() ?? new Terms();
    return view('Auth.terms',compact('terms'));
}
        public function index()
    {
        // Fetch first (or latest) record of home section
        $terms =Terms::first();

     return view('terms', compact('terms'));

    }


}
