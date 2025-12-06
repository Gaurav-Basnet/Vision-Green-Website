@extends('Auth.dashboard')
@section('title', 'Newsletter Management')
@section('content')
    <div class="container mx-auto px-4 py-6">


        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Newsletter Management</h2>
                <p class="text-gray-600">Upload and manage newsletters (PDF + Image)</p>
            </div>
            <button id="addNewsletterBtn"
                class="mt-4 md:mt-0 bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-lg flex items-center">
                <i class="fas fa-plus mr-2"></i> Upload Newsletter
            </button>
        </div>

        <!-- Newsletters Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Image</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Subtitle</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">PDF</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($newsletters as $newsletter)
                            <tr>
                                <!-- Image -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($newsletter->image)
                                        <img src="{{ asset('storage/' . $newsletter->image) }}" alt="Newsletter Image"
                                            class="h-12 w-12 object-cover rounded-md">
                                    @else
                                        <span class="text-gray-400">No image</span>
                                    @endif
                                </td>

                                <!-- Title & Subtitle -->
                                <td class="px-6 py-4 whitespace-nowrap">{{ $newsletter->title }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $newsletter->subtitle }}</td>

                                <!-- PDF -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($newsletter->pdf)
                                        <a href="{{ asset('storage/' . $newsletter->pdf) }}" target="_blank"
                                            class="text-blue-600 hover:underline">View PDF</a>
                                    @else
                                        <span class="text-gray-400">No file</span>
                                    @endif
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button type="button" class="text-red-600 hover:text-red-900"
                                        onclick="openDeleteModal({{ $newsletter->id }})">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div
            class="max-w-full mt-4 px-6 md:px-0 lg:px-0 py-2 flex flex-col sm:flex-row items-center justify-between text-sm text-gray-700 border-t">
            <div class="mb-2 sm:mb-0">
                Showing <span class="font-medium">{{ $newsletters->firstItem() }}</span> to <span
                    class="font-medium">{{ $newsletters->lastItem() }}</span> of <span
                    class="font-medium">{{ $newsletters->total() }}</span> results
            </div>
            <div class="flex flex-col sm:flex-row items-center gap-2 w-full sm:w-auto">
                <div
                    class="flex space-x-1 w-full sm:w-auto overflow-x-auto whitespace-nowrap p-2 sm:p-0 justify-center sm:justify-start">
                    @if($newsletters->onFirstPage())
                        <button
                            class="px-3 py-1 rounded-lg border border-gray-300 bg-gray-100 text-gray-400 cursor-not-allowed">
                            Previous
                        </button>
                    @else
                        <a href="{{ $newsletters->previousPageUrl() }}"
                            class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                            Previous
                        </a>
                    @endif

                    @php
                        $current = $newsletters->currentPage();
                        $last = $newsletters->lastPage();
                        $window = 2; // Number of pages to show around current page
                    @endphp

                    {{-- Always show first page --}}
                    @if($current > 1 + $window)
                        <a href="{{ $newsletters->url(1) }}"
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
                            <a href="{{ $newsletters->url($page) }}"
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
                        <a href="{{ $newsletters->url($last) }}"
                            class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                            {{ $last }}
                        </a>
                    @endif

                    @if($newsletters->hasMorePages())
                        <a href="{{ $newsletters->nextPageUrl() }}"
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

    <!-- Upload Newsletter Modal -->
    <div class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden" id="newsletterModal">
        <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <div class="flex justify-between items-center pb-3 border-b">
                    <h3 class="text-xl font-semibold text-gray-800">Upload Newsletter</h3>
                    <button id="closeModal" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

<form id="uploadNewsletterForm" action="{{ route('newsletters.store') }}" method="POST" enctype="multipart/form-data"
                    class="mt-4 space-y-4">
                    @csrf

                    <!-- Title -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" required
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
                    </div>

                    <!-- Subtitle -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Subtitle</label>
                        <input type="text" name="subtitle"
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
                    </div>

                    <!-- Image Upload -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" name="image" accept="image/*"
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
                    </div>

                    <!-- PDF Upload -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">PDF File</label>
                        <input type="file" name="pdf" accept="application/pdf"
                            class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2">
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end pt-4 border-t mt-6">
                        <button type="button" id="cancelBtn"
                            class="bg-white py-2 px-4 border border-gray-300 rounded-md">Cancel</button>
                        <button type="submit" id="saveNewsletterBtn"  class="ml-3 bg-green-600 text-white py-2 px-4 rounded-md">Save
                            Newsletter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
            <h3 class="text-lg font-semibold text-gray-800">Delete Newsletter</h3>
            <p class="mt-2 text-gray-600">Are you sure you want to delete this newsletter? This action cannot be undone.</p>

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
         // Disable Save button while submitting newsletter
    const uploadNewsletterForm = document.getElementById('uploadNewsletterForm');
    const saveNewsletterBtn = document.getElementById('saveNewsletterBtn');

    uploadNewsletterForm.addEventListener('submit', () => {
        saveNewsletterBtn.disabled = true;
        saveNewsletterBtn.textContent = 'Saving...';
    });
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('newsletterModal');
            const addBtn = document.getElementById('addNewsletterBtn');
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
            form.action = `/newsletters/${id}`; // dynamically set action route
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