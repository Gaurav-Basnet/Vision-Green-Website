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
                'event_date'=>'nullable|date',
            ]);

            Notice::create($data);  // Saves the notice

            return redirect()->back()->with('success', 'Notice uploaded successfully!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong' . $e->getMessage());
        }
    }
    public function adminshow()
    {
        $notices = Notice::latest()->paginate(30);
        return view('Auth.noticeuploading', compact('notices'));
    }


    public function destroy($id)
    {
        try{
        $notice = Notice::findOrFail($id); // find the notice
        $notice->delete();                 // delete it
        return redirect()->back()->with('success', 'Notice deleted successfully.');
        }
        catch(Exception $e){
            return redirect()->back()->with('error','Something went wrong'.$e->getMessage());
        }

    }

    
 public function index(Request $request)
{
    // Get filter parameters
    $type = $request->get('type');
    $search = $request->get('search');

    // Base query
    $query = Notice::query();

    // Filter by type if provided
    if ($type) {
        $query->where('type', $type);
    }

    // Apply search filter if provided
    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('title', 'like', '%' . $search . '%')
              ->orWhere('description', 'like', '%' . $search . '%')
              ->orWhere('location', 'like', '%' . $search . '%')
              ->orWhere('tags', 'like', '%' . $search . '%');
        });
    }

    // Order by created_at
    $query->orderBy('created_at', 'desc');

    // Pagination
    $notices = $query->paginate(3);

    // Get counts for each category
    $eventCount = Notice::where('type', 'UpcomingEvents')->count();
    $alertCount = Notice::where('type', 'Alerts')->count();
    $achievementCount = Notice::where('type', 'Achievements')->count();

    // Recent notices for sidebar
    $recentNotices = Notice::orderBy('created_at', 'desc')->take(2)->get();

    // For upcoming events: check event_date
    $upcomingEvents = Notice::where('type', 'UpcomingEvents')
        ->where('event_date', '>=', now())
        ->orderBy('event_date', 'asc')
        ->get();

    // For past events: check event_date
    $pastEvents = Notice::where('type', 'PastEvents')
        ->where('event_date', '<', now())
        ->orderBy('event_date', 'desc')
        ->get();

    return view('notice', compact(
        'notices',
        'eventCount',
        'alertCount',
        'achievementCount',
        'recentNotices',
        'upcomingEvents',
        'pastEvents',
        'search' // Pass to view
    ));
}


public function enlarge($id)  {

    $notice = Notice::findOrFail($id);

    return view('notice-details',compact('notice'));
    
}
    
public function search(Request $request)
{
    $query = Notice::query();

    if ($request->has('search') && !empty($request->search)) {
        $query->where(function($q) use ($request) {
            $q->where('title', 'like', '%' . $request->search . '%')
              ->orWhere('description', 'like', '%' . $request->search . '%');
        });
    }

    if ($request->has('type') && !empty($request->type)) {
        $query->where('type', $request->type);
    }

    if ($request->has('year') && !empty($request->year)) {
        $query->whereYear('created_at', $request->year);
    }

    $results = $query->orderBy('created_at', 'desc')->get();

    return response()->json($results);
}   

}
