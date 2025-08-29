<?php
namespace App\Http\Controllers;

use App\Models\EducationalResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EducationalResourceController extends Controller
{
    public function index()
    {
        $resources = EducationalResource::latest()->paginate(10);
        return view('Auth.resourceuploading', compact('resources'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'audience' => 'required|string',
            'file' => 'required|mimes:pdf|max:20480',
            'image' => 'nullable|image|max:10240',
            'description' => 'nullable|string',
            'grade_level' => 'nullable|string',
        ]);

        $data = $request->only('title', 'description', 'audience', 'grade_level');

        // File upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('resources', 'public');
            $data['file_path'] = $path;
            $data['file_size'] = round($file->getSize() / 1048576, 2); // MB
        }

        // Image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('resources/images', 'public');
        }

        EducationalResource::create($data);

        return back()->with('success', 'Resource uploaded successfully!');
    }

    public function destroy(EducationalResource $resource)
    {
        if ($resource->file_path && Storage::disk('public')->exists($resource->file_path)) {
            Storage::disk('public')->delete($resource->file_path);
        }

        if ($resource->image && Storage::disk('public')->exists($resource->image)) {
            Storage::disk('public')->delete($resource->image);
        }

        $resource->delete();

        return back()->with('success', 'Resource deleted successfully!');
    }
}
