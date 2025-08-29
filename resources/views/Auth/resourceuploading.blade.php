@extends('Auth.dashboard')
@section('title', 'Educational Resources Editor')
@section('content')
    <div class="container mx-auto px-4 py-6">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Educational Resources Management</h2>
                <p class="text-gray-600">Upload and manage educational materials (PDF + Image)</p>
            </div>
            <button id="addResourceBtn"
                class="mt-4 md:mt-0 bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-lg flex items-center">
                <i class="fas fa-plus mr-2"></i> Upload Resource
            </button>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <!-- Resources Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Image</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Audience</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">File</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">File Size</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($resources as $resource)
                            <tr>
                                <!-- Image -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($resource->image)
                                        <img src="{{ asset('storage/' . $resource->image) }}" alt="Resource Image"
                                            class="h-12 w-12 object-cover rounded-md">
                                    @else
                                        <span class="text-gray-400">No image</span>
                                    @endif
                                </td>

                                <!-- Title & Description -->
                                <td class="px-6 py-4 whitespace-nowrap">{{ $resource->title }}</td>
                                
                                <td class="px-6 py-4 whitespace-nowrap">{{ $resource->audience }}</td>

                                <td class="px-6 py-4 whitespace-nowrap">{{ Str::limit($resource->description, 50) }}</td>

                                <!-- PDF -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($resource->file_path)
                                        <a href="{{ asset('storage/' . $resource->file_path) }}" target="_blank"
                                            class="text-blue-600 hover:underline">Download</a>
                                    @else
                                        <span class="text-gray-400">No file</span>
                                    @endif
                                </td>
                                
                                <!-- File Size -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $resource->file_size ? $resource->file_size . ' MB' : 'N/A' }}
                                </td>

                                <!-- Date -->
                                <td class="px-6 py-4 whitespace-nowrap">{{ $resource->created_at->format('M d, Y') }}</td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button type="button" class="text-red-600 hover:text-red-900"
                                        onclick="openDeleteModal({{ $resource->id }})">
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
                Showing <span class="font-medium">{{ $resources->firstItem() }}</span> to <span
                    class="font-medium">{{ $resources->lastItem() }}</span> of <span
                    class="font-medium">{{ $resources->total() }}</span> results
            </div>
            <div class="flex flex-col sm:flex-row items-center gap-2 w-full sm:w-auto">
                <div
                    class="flex space-x-1 w-full sm:w-auto overflow-x-auto whitespace-nowrap p-2 sm:p-0 justify-center sm:justify-start">
                    @if($resources->onFirstPage())
                        <button
                            class="px-3 py-1 rounded-lg border border-gray-300 bg-gray-100 text-gray-400 cursor-not-allowed">
                            Previous
                        </button>
                    @else
                        <a href="{{ $resources->previousPageUrl() }}"
                            class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                            Previous
                        </a>
                    @endif

                    @php
                        $current = $resources->currentPage();
                        $last = $resources->lastPage();
                        $window = 2; // Number of pages to show around current page
                    @endphp

                    {{-- Always show first page --}}
                    @if($current > 1 + $window)
                        <a href="{{ $resources->url(1) }}"
                            class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                            1
                        </a>
                    @endif

                    {{-- Show ellipsis if needed --}}
                    @if($current > 2 + $window)
                        <span class="px-3 py-1">...</span>
                    @endif

                    {{-- Show pages around current page --}}
                    @for($page = max(1, $current - $window); $page <= min($last, $current + $window); $page++)
                        @if($page == $current)
                            <span class="px-3 py-1 rounded-lg border border-green-500 bg-green-50 text-green-600 font-medium">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $resources->url($page) }}"
                                class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                                {{ $page }}
                            </a>
                        @endif
                    @endfor

                    {{-- Show ellipsis if needed --}}
                    @if($current < $last - $window - 1)
                        <span class="px-3 py-1">...</span>
                    @endif

                    {{-- Always show last page if it's not in the current window --}}
                    @if($current < $last - $window && $last > 1)
                        <a href="{{ $resources->url($last) }}"
                            class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                            {{ $last }}
                        </a>
                    @endif

                    @if($resources->hasMorePages())
                        <a href="{{ $resources->nextPageUrl() }}"
                            class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                            Next
                        </a>
                    @else
                        <button
                            class="px-3 py-1 rounded-lg border border-gray-300 bg-gray-100 text-gray-400 cursor-not-allowed">
                            Next
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Upload Resource Modal -->
    <div class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden" id="resourceModal">
        <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <div class="flex justify-between items-center pb-3 border-b">
                    <h3 class="text-xl font-semibold text-gray-800">Upload Educational Resource</h3>
                    <button id="closeModal" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <form action="{{ route('resources.store') }}" method="POST" enctype="multipart/form-data"
                    class="mt-4 space-y-4">
                    @csrf

                    <!-- Title -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Title *</label>
                        <input type="text" name="title" required
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" rows="3"
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2"></textarea>
                    </div>
                    
                    <!-- Audience Dropdown -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Audience *</label>
                        <select name="audience" required class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
                            <option value="">Select Audience</option>
                            <option value="Teachers">Teachers</option>
                            <option value="Students">Students</option>
                            <option value="Community">Community</option>
                            <option value="General Public">General Public</option>
                        </select>
                    </div>
                    
                    <!-- Grade Level (Optional) -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Grade Level (if applicable)</label>
                        <input type="text" name="grade_level" placeholder="e.g., Grades 6-10"
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
                    </div>

                    <!-- Image Upload -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Thumbnail Image</label>
                        <input type="file" name="image" accept="image/*"
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
                    </div>

                    <!-- File Upload -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Resource File (PDF) *</label>
                        <input type="file" name="file" accept="application/pdf" required
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end pt-4 border-t mt-6">
                        <button type="button" id="cancelBtn"
                            class="bg-white py-2 px-4 border border-gray-300 rounded-md">Cancel</button>
                        <button type="submit" class="ml-3 bg-green-600 text-white py-2 px-4 rounded-md">Save Resource</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
            <h3 class="text-lg font-semibold text-gray-800">Delete Resource</h3>
            <p class="mt-2 text-gray-600">Are you sure you want to delete this educational resource? This action cannot be undone.</p>

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
            const modal = document.getElementById('resourceModal');
            const addBtn = document.getElementById('addResourceBtn');
            const closeBtn = document.getElementById('closeModal');
            const cancelBtn = document.getElementById('cancelBtn');

            addBtn.addEventListener('click', () => modal.classList.remove('hidden'));
            closeBtn.addEventListener('click', () => modal.classList.add('hidden'));
            cancelBtn.addEventListener('click', () => modal.classList.add('hidden'));

            window.addEventListener('click', (e) => {
                if (e.target === modal) modal.classList.add('hidden');
            });
        });

        function openDeleteModal(id) {
            const modal = document.getElementById('deleteModal');
            const form = document.getElementById('deleteForm');
            form.action = `/resources/${id}`; // dynamically set action route
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeDeleteModal() {
            const modal = document.getElementById('deleteModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // close modal if clicked outside content
        window.addEventListener('click', function (e) {
            const modal = document.getElementById('deleteModal');
            if (e.target === modal) {
                closeDeleteModal();
            }
        });
    </script>

@endsection