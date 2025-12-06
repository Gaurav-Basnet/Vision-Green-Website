<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Exception;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Show all projects
    public function index()
    {
        $projects = Project::latest();
        return view('Auth.projectuploading', compact('projects'));
    }

    // Store a new project
    public function store(Request $request)
    {
        try{ 
       $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string',
            'location' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Determine status based on today's date
        $today = now()->toDateString();

        if ($validated['start_date'] > $today) {
            $validated['status'] = 'Upcoming';
        } elseif ($validated['end_date'] < $today) {
            $validated['status'] = 'Completed';
        } else {
            $validated['status'] = 'Ongoing';
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }

        Project::create($validated);

        return back()->with('success', 'Project added successfully.');
    }
    
        catch(Exception $e){
                    return back()->with('error', 'Something Wend Wrong'.$e->getMessage());
        }

        
    }

    // Show single project (optional for details page)
    public function show(Project $project)
    {
        $projects = Project::latest()->paginate(60);
        return view('Auth.projectuploading', compact('projects'));
    }



    // Delete project
    public function destroy(Project $project)
    {
        $project->delete();
        return back()->with('success', 'Project deleted successfully.');
    }

    public function opennew($id)
    {
        $project = Project::findOrFail($id);
        return view('project-new', compact('project'));

    }

    public function sendprojects(Request $request)
    {
        $query = Project::query();

        // Filter by category
        if ($request->has('category') && $request->category != 'all') {
            $query->where('category', $request->category);
        }

        // Search by name, location, or status
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('location', 'like', "%{$search}%")
                    ->orWhere('status', 'like', "%{$search}%");
            });
        }

        $projects = $query->latest()->paginate(6);

        return view('project', compact('projects'));
    }


}

