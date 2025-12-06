@extends('Auth.dashboard')
@section('title', 'Job Management')
@section('content')
    <div class="container mx-auto px-4 py-6">

        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Job Management</h2>
                <p class="text-gray-600">Upload and manage job postings</p>
            </div>
            <button id="addJobBtn"
                class="mt-4 md:mt-0 bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-lg flex items-center transition-colors shadow-md hover:shadow-lg">
                <i class="fas fa-plus mr-2"></i> Upload Job
            </button>
        </div>



        <!-- Jobs Table -->
        <div class="bg-white rounded-t-lg shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title
                            </th>
                            <th
                                class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">
                                Type</th>
                            <th
                                class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">
                                Location</th>
                            <th
                                class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">
                                Category</th>
                            <th
                                class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden xl:table-cell">
                                Experience</th>
                            <th
                                class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden sm:table-cell">
                                Deadline</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($jobs as $job)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div
                                            class="flex-shrink-0 h-10 w-10 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                            <i class="fas fa-briefcase text-blue-600"></i>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">{{ $job->title }}</div>
                                            <div class="text-sm text-gray-500 md:hidden">{{ $job->employment_type }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap hidden md:table-cell">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full 
                                            @if($job->employment_type == 'Full-time') bg-blue-100 text-blue-800
                                            @elseif($job->employment_type == 'Part-time') bg-purple-100 text-purple-800
                                            @elseif($job->employment_type == 'Contract') bg-yellow-100 text-yellow-800
                                            @elseif($job->employment_type == 'Internship') bg-green-100 text-green-800
                                            @else bg-gray-100 text-gray-800 @endif">
                                        {{ $job->employment_type }}
                                    </span>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <i class="fas fa-map-marker-alt mr-1 text-gray-400"></i>
                                        {{ $job->location ?? 'Remote' }}
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap hidden lg:table-cell">
                                    <span class="text-sm text-gray-500">{{ $job->category ?? '-' }}</span>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap hidden xl:table-cell">
                                    <span class="text-sm text-gray-500">{{ $job->experience ?? '-' }}</span>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap hidden sm:table-cell">
                                    @if($job->deadline)
                                        <div class="flex items-center text-sm text-gray-500">
                                            <i class="far fa-calendar-alt mr-1 text-gray-400"></i>
                                            {{ \Carbon\Carbon::parse($job->deadline)->format('M d, Y') }}
                                        </div>
                                    @else
                                        <span class="text-sm text-gray-500">-</span>
                                    @endif
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-2">

                                        <button type="button" class="text-red-600 hover:text-red-900"
                                            onclick="openDeleteJobModal({{ $job->id }})">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div
            class="max-w-full px-4 py-4 flex flex-col sm:flex-row items-center justify-between text-sm text-gray-700 bg-white rounded-b-lg shadow-sm border border-gray-200">
            <div class="mb-2 sm:mb-0">
                Showing <span class="font-medium">{{ $jobs->firstItem() }}</span> to <span
                    class="font-medium">{{ $jobs->lastItem() }}</span> of <span
                    class="font-medium">{{ $jobs->total() }}</span> results
            </div>
            <div class="flex flex-col sm:flex-row items-center gap-2 w-full sm:w-auto">
                <div
                    class="flex space-x-1 w-full sm:w-auto overflow-x-auto whitespace-nowrap p-2 sm:p-0 justify-center sm:justify-start">
                    @if($jobs->onFirstPage())
                        <button
                            class="px-3 py-1 rounded-lg border border-gray-300 bg-gray-100 text-gray-400 cursor-not-allowed">Previous</button>
                    @else
                        <a href="{{ $jobs->previousPageUrl() }}"
                            class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50 transition-colors">Previous</a>
                    @endif

                    @php
                        $current = $jobs->currentPage();
                        $last = $jobs->lastPage();
                        $window = 2;
                    @endphp

                    @if($current > 1 + $window)
                        <a href="{{ $jobs->url(1) }}"
                            class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50 transition-colors">1</a>
                    @endif
                    @if($current > 2 + $window)
                        <span class="px-3 py-1">...</span>
                    @endif
                    @for($page = max(1, $current - $window); $page <= min($last, $current + $window); $page++)
                        @if($page == $current)
                            <span
                                class="px-3 py-1 rounded-lg border border-green-500 bg-green-50 text-green-600 font-medium">{{ $page }}</span>
                        @else
                            <a href="{{ $jobs->url($page) }}"
                                class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50 transition-colors">{{ $page }}</a>
                        @endif
                    @endfor
                    @if($current < $last - $window - 1)
                        <span class="px-3 py-1">...</span>
                    @endif
                    @if($current < $last - $window && $last > 1)
                        <a href="{{ $jobs->url($last) }}"
                            class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50 transition-colors">{{ $last }}</a>
                    @endif

                    @if($jobs->hasMorePages())
                        <a href="{{ $jobs->nextPageUrl() }}"
                            class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50 transition-colors">Next</a>
                    @else
                        <button
                            class="px-3 py-1 rounded-lg border border-gray-300 bg-gray-100 text-gray-400 cursor-not-allowed">Next</button>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Upload Job Modal -->
    <div class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden" id="jobModal">
        <div class="relative top-10 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <div class="flex justify-between items-center pb-3 border-b">
                    <h3 class="text-xl font-semibold text-gray-800">Upload Job</h3>
                    <button id="closeJobModal" class="text-gray-400 hover:text-gray-600 transition-colors">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

<form id="uploadJobForm" action="{{ route('jobs.store') }}" method="POST" class="mt-4 space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Title *</label>
                            <input type="text" name="title" required
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Employment Type *</label>
                            <select name="employment_type" required
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                <option value="">Select Type</option>
                                <option value="Full-time">Full-time</option>
                                <option value="Part-time">Part-time</option>
                                <option value="Contract">Contract</option>
                                <option value="Internship">Internship</option>
                                <option value="Freelance">Freelance</option>
                                <option value="Temporary">Temporary</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Location</label>
                            <input type="text" name="location"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                placeholder="e.g., New York, NY">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                            <input type="text" name="category"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                placeholder="e.g, Management">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Education</label>
                            <select name="education"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                <option value="">Select Education</option>
                                <option value="High School">High School</option>
                                <option value="Associate Degree">Associate Degree</option>
                                <option value="Bachelor's Degree">Bachelor's Degree</option>
                                <option value="Master's Degree">Master's Degree</option>
                                <option value="Doctorate">Doctorate</option>
                                <option value="No Formal Education">No Formal Education</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Experience</label>
                            <select name="experience"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                <option value="">Select Experience</option>
                                <option value="Entry Level">Entry Level (0-2 years)</option>
                                <option value="Mid Level">Mid Level (2-5 years)</option>
                                <option value="Senior Level">Senior Level (5+ years)</option>
                                <option value="Executive">Executive</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Skills</label>
                        <input type="text" name="skills"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            placeholder="e.g., JavaScript, React, Node.js">
                        <p class="text-xs text-gray-500 mt-1">Separate skills with commas</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Description *</label>
                        <textarea name="description" rows="4" required
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            placeholder="Describe the job responsibilities and requirements..."></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Deadline</label>
                        <input type="date" name="deadline"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>

                    <div class="flex justify-end pt-4 border-t mt-6 space-x-3">
                        <button type="button" id="cancelJobBtn"
                            class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" id="saveJobBtn"
                            class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                            Save Job
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteJobModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 mx-4">
            <div class="flex items-center mb-4">
                <div class="bg-red-100 p-3 rounded-full mr-4">
                    <i class="fas fa-exclamation-triangle text-red-600"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-800">Delete Job</h3>
            </div>
            <p class="text-gray-600 mb-6">Are you sure you want to delete this job? This action cannot be undone.</p>

            <form id="deleteJobForm" method="POST" class="flex justify-end space-x-3">
                @csrf
                @method('DELETE')
                <button type="button" onclick="closeDeleteJobModal()"
                    class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                    Cancel
                </button>
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                    Delete
                </button>
            </form>
        </div>
    </div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('jobModal');
    const addBtn = document.getElementById('addJobBtn');
    const closeBtn = document.getElementById('closeJobModal');
    const cancelBtn = document.getElementById('cancelJobBtn');

    addBtn.addEventListener('click', () => modal.classList.remove('hidden'));
    closeBtn.addEventListener('click', () => modal.classList.add('hidden'));
    cancelBtn.addEventListener('click', () => modal.classList.add('hidden'));

    window.addEventListener('click', (e) => {
        if (e.target === modal) modal.classList.add('hidden');
    });

    // Disable Save button on form submit
    const uploadJobForm = document.getElementById('uploadJobForm');
    const saveJobBtn = document.getElementById('saveJobBtn');

    uploadJobForm.addEventListener('submit', () => {
        saveJobBtn.disabled = true;
        saveJobBtn.textContent = 'Saving...';
    });
});

function openDeleteJobModal(id) {
    const modal = document.getElementById('deleteJobModal');
    const form = document.getElementById('deleteJobForm');
    form.action = `/jobs/${id}`;
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeDeleteJobModal() {
    const modal = document.getElementById('deleteJobModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

window.addEventListener('click', function (e) {
    const modal = document.getElementById('deleteJobModal');
    if (e.target === modal) closeDeleteJobModal();
});
</script>
@endsection