<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Exception;
use Illuminate\Http\Request;

class noticeController extends Controller
{
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'type' => 'nullable|string',
                'location' => 'nullable|string',
                'tags' => 'nullable|string',
            ]);

            Notice::create($data);  // Saves the notice

            return redirect()->back()->with('success', 'Notice uploaded successfully!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong' . $e->getMessage());
        }
    }
    public function adminshow(){
        $notices= Notice::latest()->paginate(30);
        return view('Auth.noticeuploading',compact('notices'));
    }


}
