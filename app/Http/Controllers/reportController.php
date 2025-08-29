<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::orderBy('created_at', 'desc')->paginate(10);
        return view('Auth.reportuploading', compact('reports'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'pdf' => 'required|mimes:pdf|max:10240',
        ]);

        $data = $request->only('title', 'description', 'type');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('reports/images', 'public');
        }

        if ($request->hasFile('pdf')) {
            $data['pdf'] = $request->file('pdf')->store('reports/pdfs', 'public');
        }

        Report::create($data);

        return redirect()->back()->with('success', 'Report uploaded successfully!');
    }

    public function destroy(Report $report)
    {
        if ($report->image) {
            Storage::disk('public')->delete($report->image);
        }

        if ($report->pdf) {
            Storage::disk('public')->delete($report->pdf);
        }

        $report->delete();

        return redirect()->back()->with('success', 'Report deleted successfully!');
    }
}
