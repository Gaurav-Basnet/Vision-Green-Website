<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    // Show all partners
    public function index()
    {
        $partners = Partner::all();
        return view('Auth.partneruploading', compact('partners'));
    }
 

    // Store a new partner
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('partners', 'public');
        }

        Partner::create($validated);

        return back()->with('success', 'Partner added successfully.');
    }

    // Delete partner
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return back()->with('success', 'Partner deleted successfully.');
    }
}

