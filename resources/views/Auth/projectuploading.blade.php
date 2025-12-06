@extends('Auth.dashboard')
@section('title', 'Project Management')
@section('content')
<div class="container mx-auto px-4 py-6">

    <!-- Success Message -->
    @if(session('success'))
        <div class="text-green-600 mb-4">{{ session('success') }}</div>
    @endif

    <!-- Header Section -->
    <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Project Management</h2>
            <p class="text-gray-600">Manage and track all your projects</p>
        </div>
        <button id="addProjectBtn"
            class="mt-4 md:mt-0 bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-lg flex items-center">
            <i class="fas fa-plus mr-2"></i> Add New Project
        </button>
    </div>

    <!-- Projects Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Project</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">End Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($projects as $project)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $project->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $project->category }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $project->status }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $project->start_date }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $project->end_date }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img class="h-10 w-10 rounded-full object-cover"
                                    src="{{ $project->image ? asset('storage/' . $project->image) : 'https://via.placeholder.com/40' }}"
                                    alt="{{ $project->name }}">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Project Modal -->
<div class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden" id="projectModal">
    <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <div class="flex justify-between items-center pb-3 border-b">
                <h3 class="text-xl font-semibold text-gray-800">Add New Project</h3>
                <button id="closeModal" class="text-gray-400 hover:text-gray-600"><i class="fas fa-times"></i></button>
            </div>

            <form id="projectForm" action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="mt-4 space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700">Project Name</label>
                    <input type="text" name="name" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2"></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Category</label>
                        <select name="category" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2" required>
                            <option>Reforestation</option>
                            <option>Education</option>
                            <option>Community</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Start Date</label>
                        <input type="date" name="start_date" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">End Date</label>
                        <input type="date" name="end_date" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2" required>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Location</label>
                        <input type="text" name="location" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Project Image</label>
                        <input type="file" name="image" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
                    </div>
                </div>

                <div class="flex justify-end pt-4 border-t mt-6 space-x-3">
                    <button type="button" id="cancelBtn" class="bg-white py-2 px-4 border border-gray-300 rounded-md">Cancel</button>
                    <button type="submit" id="saveProjectBtn" class="ml-3 bg-green-600 text-white py-2 px-4 rounded-md">Save Project</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('projectModal');
    const addBtn = document.getElementById('addProjectBtn');
    const closeBtn = document.getElementById('closeModal');
    const cancelBtn = document.getElementById('cancelBtn');
    const projectForm = document.getElementById('projectForm');
    const saveBtn = document.getElementById('saveProjectBtn');

    // Open/Close modal
    addBtn.addEventListener('click', () => modal.classList.remove('hidden'));
    closeBtn.addEventListener('click', () => modal.classList.add('hidden'));
    cancelBtn.addEventListener('click', () => modal.classList.add('hidden'));
    window.addEventListener('click', (e) => { if(e.target === modal) modal.classList.add('hidden'); });

    // Disable save button on form submit
    projectForm.addEventListener('submit', function() {
        saveBtn.disabled = true;
        saveBtn.textContent = 'Saving...';
    });
});
</script>
@endsection
