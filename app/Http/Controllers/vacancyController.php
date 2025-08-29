<?php

namespace App\Http\Controllers;
use App\Models\Jobs;
use App\Models\Vacancy;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    // Update record
    public function update(Request $request)
    {
        $section = Vacancy::first() ?? new Vacancy();
        $section->fill($request->only($section->getFillable()));
        $section->save();

        return back()->with('success', 'Section updated successfully.');

    }

    public function fetchhome()
    {
        $vacancy = Vacancy::first() ?? new Vacancy();
        return view('Auth.vacancyuploading', compact('vacancy'));
    }

    public function index()
    {
        // Fetch first (or latest) record of home section
        $vacancy = Vacancy::first();
         $jobs = Jobs::where('deadline', '>', Carbon::now())
                ->latest()
                ->paginate(10);

        return view('vacancy', compact('vacancy', 'jobs'));

    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'employment_type' => 'required|string|max:50',
                'location' => 'nullable|string|max:100',
                'category' => 'nullable|string|max:100',
                'experience' => 'nullable|string|max:50',
                'description' => 'nullable|string',
                'deadline' => 'nullable|date',
                'education'=>'nullable|string',
                'skills'=>'nullable|string',

            ]);

            Jobs::create([
                'title' => $request->title,
                'employment_type' => $request->employment_type,
                'location' => $request->location,
                'category' => $request->category,
                'experience' => $request->experience,
                'description' => $request->description,
                'deadline' => $request->deadline,
                'education' => $request->education,
                'skills' => $request->skills,
                

            ]);

            return redirect()->back()->with('success', 'Job uploaded successfully!');

        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!' . $e->getMessage());

        }

    }

    public function fetchjobs()
    {
        $jobs = Jobs::latest()->paginate(10);

        return view('auth.jobuploading', compact('jobs'));
    }


    public function destroy($id)
    {
        try {
            $jobs = Jobs::findOrFail($id); // find the notice
            $jobs->delete();                 // delete it
            return redirect()->back()->with('success', 'Jobs deleted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong' . $e->getMessage());
        }



    }
    public function apply($id)
{
    $job = Jobs::findOrFail($id);
    return view('jobs-apply', compact('job'));
}



}
