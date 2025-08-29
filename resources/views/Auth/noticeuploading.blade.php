@extends('Auth.dashboard')
@section('title', 'Notice Management')
@section('content')
<div class="container mx-auto px-4 py-6">

    <!-- Header Section -->
    <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Notice Management</h2>
            <p class="text-gray-600">Upload and manage notices</p>
        </div>
        <button id="addNoticeBtn"
            class="mt-4 md:mt-0 bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-lg flex items-center">
            <i class="fas fa-plus mr-2"></i> Upload Notice
        </button>
    </div>

    <!-- Notices Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Event Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Location</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tags</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($notices as $notice)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $notice->title }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ Str::limit($notice->description, 50) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($notice->type)
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full 
                                        {{ $notice->type == 'UpcomingEvents' ? 'bg-blue-100 text-blue-800' : '' }}
                                        {{ $notice->type == 'Alerts' ? 'bg-red-100 text-red-800' : '' }}
                                        {{ $notice->type == 'Achievements' ? 'bg-green-100 text-green-800' : '' }}">
                                        {{ $notice->type }}
                                    </span>
                                @else
                                    -
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($notice->event_date)
                                    {{ \Carbon\Carbon::parse($notice->event_date)->format('M d, Y') }}
                                @else
                                    -
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $notice->location ?? '-' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($notice->tags)
                                    @foreach(explode(',', $notice->tags) as $tag)
                                        <span class="inline-block bg-gray-100 rounded-full px-3 py-1 text-xs font-semibold text-gray-700 mr-1 mb-1">
                                            #{{ trim($tag) }}
                                        </span>
                                    @endforeach
                                @else
                                    -
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button type="button" class="text-red-600 hover:text-red-900"
                                    onclick="openDeleteModal({{ $notice->id }})">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div
        class="max-w-full mt-4 px-6 md:px-0 lg:px-0 py-2 flex flex-col sm:flex-row items-center justify-between text-sm text-gray-700 border-t">
        <div class="mb-2 sm:mb-0">
            Showing <span class="font-medium">{{ $notices->firstItem() }}</span> to <span
                class="font-medium">{{ $notices->lastItem() }}</span> of <span
                class="font-medium">{{ $notices->total() }}</span> results
        </div>
        <div class="flex flex-col sm:flex-row items-center gap-2 w-full sm:w-auto">
            <div
                class="flex space-x-1 w-full sm:w-auto overflow-x-auto whitespace-nowrap p-2 sm:p-0 justify-center sm:justify-start">
                @if($notices->onFirstPage())
                    <button class="px-3 py-1 rounded-lg border border-gray-300 bg-gray-100 text-gray-400 cursor-not-allowed">
                        Previous
                    </button>
                @else
                    <a href="{{ $notices->previousPageUrl() }}"
                        class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                        Previous
                    </a>
                @endif

                @php
                    $current = $notices->currentPage();
                    $last = $notices->lastPage();
                    $window = 2;
                @endphp

                @if($current > 1 + $window)
                    <a href="{{ $notices->url(1) }}"
                        class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">1</a>
                @endif
                @if($current > 2 + $window)
                    <span class="px-3 py-1">...</span>
                @endif
                @for($page = max(1, $current - $window); $page <= min($last, $current + $window); $page++)
                    @if($page == $current)
                        <span class="px-3 py-1 rounded-lg border border-green-500 bg-green-50 text-green-600 font-medium">{{ $page }}</span>
                    @else
                        <a href="{{ $notices->url($page) }}"
                            class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">{{ $page }}</a>
                    @endif
                @endfor
                @if($current < $last - $window - 1)
                    <span class="px-3 py-1">...</span>
                @endif
                @if($current < $last - $window && $last > 1)
                    <a href="{{ $notices->url($last) }}"
                        class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">{{ $last }}</a>
                @endif

                @if($notices->hasMorePages())
                    <a href="{{ $notices->nextPageUrl() }}"
                        class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">Next</a>
                @else
                    <button class="px-3 py-1 rounded-lg border border-gray-300 bg-gray-100 text-gray-400 cursor-not-allowed">Next</button>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Upload Notice Modal -->
<div class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden" id="noticeModal">
    <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <div class="flex justify-between items-center pb-3 border-b">
                <h3 class="text-xl font-semibold text-gray-800">Upload Notice</h3>
                <button id="closeNoticeModal" class="text-gray-400 hover:text-gray-600"><i class="fas fa-times"></i></button>
            </div>

            <form action="{{ route('notice.store') }}" method="POST" class="mt-4 space-y-4" onsubmit="disablebtn()">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" required
                        class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" rows="4"
                        class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Type</label>
                    <select name="type" id="noticeType" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
                        <option value="">Select a type</option>
                        <option value="UpcomingEvents">Upcoming Events</option>
                        <option value="Alerts">Alerts</option>
                        <option value="Achievements">Achievements</option>
                    </select>
                </div>
                
                <!-- Event Date Field (Initially Hidden) -->
                <div id="eventDateField" class="hidden">
                    <label class="block text-sm font-medium text-gray-700">Event Date</label>
                    <input type="date" name="event_date" 
                        class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700">Location</label>
                    <input type="text" name="location" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Tags <span class="text-xs text-gray-500">(comma separated)</span></label>
                    <input type="text" name="tags" placeholder="e.g. important, meeting, announcement" 
                        class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
                    <p class="text-xs text-gray-500 mt-1">Enter tags separated by commas. Example: important, meeting, announcement</p>
                </div>

                <div class="flex justify-end pt-4 border-t mt-6">
                    <button type="button" id="cancelNoticeBtn" class="bg-white py-2 px-4 border border-gray-300 rounded-md">Cancel</button>
                    <button type="submit" class="ml-3 bg-green-600 text-white py-2 px-4 rounded-md">Save Notice</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
        <h3 class="text-lg font-semibold text-gray-800">Delete Notice</h3>
        <p class="mt-2 text-gray-600">Are you sure you want to delete this notice? This action cannot be undone.</p>

        <form id="deleteForm" method="POST" class="mt-4 flex justify-end space-x-3">
            @csrf
            @method('DELETE')
            <button type="button" onclick="closeDeleteModal()"
                class="px-4 py-2 border rounded-md text-gray-600 hover:bg-gray-100">
                Cancel
            </button>
            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                Delete
            </button>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('noticeModal');
    const addBtn = document.getElementById('addNoticeBtn');
    const closeBtn = document.getElementById('closeNoticeModal');
    const cancelBtn = document.getElementById('cancelNoticeBtn');
    const noticeType = document.getElementById('noticeType');
    const eventDateField = document.getElementById('eventDateField');

    addBtn.addEventListener('click', () => modal.classList.remove('hidden'));
    closeBtn.addEventListener('click', () => modal.classList.add('hidden'));
    cancelBtn.addEventListener('click', () => modal.classList.add('hidden'));

    // Show/hide event date field based on notice type selection
    noticeType.addEventListener('change', function() {
        if (this.value === 'UpcomingEvents') {
            eventDateField.classList.remove('hidden');
        } else {
            eventDateField.classList.add('hidden');
        }
    });

    window.addEventListener('click', (e) => {
        if (e.target === modal) modal.classList.add('hidden');
    });
});

function openDeleteModal(id) {
    const modal = document.getElementById('deleteModal');
    const form = document.getElementById('deleteForm');
    form.action = `/notice/${id}`; // dynamically set action route
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeDeleteModal() {
    const modal = document.getElementById('deleteModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

window.addEventListener('click', function (e) {
    const modal = document.getElementById('deleteModal');
    if (e.target === modal) closeDeleteModal();
});
</script>
@endsection