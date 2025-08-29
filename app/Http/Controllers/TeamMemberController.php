<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    // List all team members
    public function index()
    {
        $members = TeamMember::all();
        return view('Auth.team', compact('members'));
    }

    // Store new member
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('team_photos', 'public');
        }

        TeamMember::create($validated);

        return back()->with('success', 'Team member added successfully.');
    }

    // Update existing member
    public function update(Request $request, TeamMember $member)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('team_photos', 'public');
        }

        $member->update($validated);

        return back()->with('success', 'Team member updated successfully.');
    }

    // Delete member
    public function destroy(TeamMember $member)
    {
        $member->delete();
        return back()->with('success', 'Team member removed successfully.');
    }

    public function sendteam()
    {
    
        return view('about', compact('teams'));
    }
}
