<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\NewsPdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class newsController extends Controller
{
         // Update record
 public function update(Request $request)
{
    $section = News::first() ?? new News();
    $section->fill($request->only($section->getFillable()));
    $section->save();

 return back()->with( 'success', 'Section updated successfully.');

}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        'pdf' => 'nullable|mimes:pdf|max:5120',
    ]);

    $newsletter = new NewsPdf();
    $newsletter->title = $request->title;
    $newsletter->subtitle = $request->subtitle;

    if ($request->hasFile('image')) {
        $newsletter->image = $request->file('image')->store('newsletters/images', 'public');
    }

    if ($request->hasFile('pdf')) {
        $newsletter->pdf = $request->file('pdf')->store('newsletters/pdfs', 'public');
    }

    $newsletter->save();

    return redirect()->back()->with('success', 'Newsletter uploaded successfully!');
}

public function createview()
{
    // fetch all newsletters from DB
    $newsletters = NewsPdf::latest()->paginate(30);

    // pass to view
    return view('Auth.newsletteruploading', compact('newsletters'));
}

    public function index()
    {
        // Get latest newsletter
        $latest = NewsPdf::orderBy('created_at', 'desc')->first();

        // Get archive excluding latest
        $archive = NewsPdf::where('id', '!=', optional($latest)->id)
            ->orderBy('created_at', 'desc')
            ->get()
            ->groupBy(function ($item) {
                return \Carbon\Carbon::parse($item->published_at)->format('Y');
            });

        return view('newsletter', compact('latest', 'archive'));
    }

    /**
     * Show single newsletter detail
     */
    public function show($id)
    {
        $newsletter = NewsPdf::findOrFail($id);
        return view('show', compact('newsletter'));
    }



public function fetchhome(){
    $newsdata= News::first() ?? new News();
    return view('Auth.newsuploading',compact('newsdata'));
}

public function destroy($id)
{
    $newsletter = NewsPdf::findOrFail($id);

    // delete image if exists
    if ($newsletter->image && Storage::exists('public/'.$newsletter->image)) {
        Storage::delete('public/'.$newsletter->image);
    }

    // delete pdf if exists
    if ($newsletter->pdf && Storage::exists('public/'.$newsletter->pdf)) {
        Storage::delete('public/'.$newsletter->pdf);
    }

    // delete DB record
    $newsletter->delete();

    return redirect()->back()->with('success', 'Newsletter deleted successfully.');
}
    
}
