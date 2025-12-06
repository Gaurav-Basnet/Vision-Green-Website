@extends('Auth.dashboard')
@section('title', 'Partner Management')
@section('content')

<div class="container mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="text-center mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-green-800">Partner Management</h1>
        <p class="text-gray-600 mt-2">Manage and upload your partners</p>
    </div>

    <!-- Action Button -->
    <div class="flex justify-end mb-6">
        <button onclick="document.getElementById('addPartnerModal').classList.remove('hidden')"
            class="bg-green-600 hover:bg-green-700 text-white font-medium px-5 py-2 rounded-lg transition-colors">
            + Add New Partner
        </button>
    </div>

    <!-- Partners Table -->
    <div class="overflow-x-auto bg-white shadow-md rounded-xl">
        <table class="min-w-full table-auto border-collapse">
            <thead class="bg-green-100 text-green-800">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Logo</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Name</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Description</th>
                    <th class="px-4 py-3 text-center text-sm font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-sm">
                @foreach($partners as $partner)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3">
                            <img src="{{ $partner->logo ? asset('storage/' . $partner->logo) : 'https://via.placeholder.com/150x60?text=Partner' }}"
                                alt="{{ $partner->name }}" class="h-14 object-contain">
                        </td>
                        <td class="px-4 py-3 font-medium text-gray-800">{{ $partner->name }}</td>
                        <td class="px-4 py-3 text-gray-600">{{ $partner->description }}</td>
                        <td class="px-4 py-3 text-center space-x-2">
                            <!-- Delete button triggers modal -->
                            <button onclick="openDeleteModal({{ $partner->id }})"
                                class="bg-red-100 hover:bg-red-200 p-2 rounded-full">🗑</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Add Partner Modal -->
<div id="addPartnerModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-6">
        <h2 class="text-xl font-semibold text-green-700 mb-4">Add New Partner</h2>

        <form id="addPartnerForm" action="{{ route('partners.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Partner Name</label>
                <input type="text" name="name" required
                       class="w-full border rounded-lg px-3 py-2 focus:ring-green-500 focus:border-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" rows="3"
                          class="w-full border rounded-lg px-3 py-2 focus:ring-green-500 focus:border-green-500"></textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Logo</label>
                <input type="file" name="logo" accept="image/*"
                       class="w-full border rounded-lg px-3 py-2 focus:ring-green-500 focus:border-green-500">
            </div>

            <div class="flex justify-end space-x-2">
                <button type="button"
                        onclick="document.getElementById('addPartnerModal').classList.add('hidden')"
                        class="px-4 py-2 bg-gray-300 rounded-lg">Cancel</button>
                <button type="submit" id="savePartnerBtn"
                        class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 text-center">
        <h2 class="text-lg font-semibold text-red-600 mb-4">Confirm Delete</h2>
        <p class="mb-6">Are you sure you want to delete this partner? This action cannot be undone.</p>

        <div class="flex justify-center space-x-4">
            <button onclick="closeDeleteModal()"
                    class="px-4 py-2 bg-gray-300 rounded-lg">Cancel</button>
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" id="confirmDeleteBtn"
                        class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Delete</button>
            </form>
        </div>
    </div>
</div>

<script>
    // Disable Save button on Add Partner form submit
    const addPartnerForm = document.getElementById('addPartnerForm');
    const saveBtn = document.getElementById('savePartnerBtn');
    addPartnerForm.addEventListener('submit', () => {
        saveBtn.disabled = true;
        saveBtn.textContent = 'Saving...';
    });

    // Delete Modal functionality
    const deleteModal = document.getElementById('deleteModal');
    const deleteForm = document.getElementById('deleteForm');

    function openDeleteModal(partnerId) {
        deleteForm.action = `/partners/${partnerId}`;
        deleteModal.classList.remove('hidden');
    }

    function closeDeleteModal() {
        deleteModal.classList.add('hidden');
    }

    // Optional: disable Delete button while submitting
    deleteForm.addEventListener('submit', () => {
        const confirmBtn = document.getElementById('confirmDeleteBtn');
        confirmBtn.disabled = true;
        confirmBtn.textContent = 'Deleting...';
    });
</script>

@endsection
