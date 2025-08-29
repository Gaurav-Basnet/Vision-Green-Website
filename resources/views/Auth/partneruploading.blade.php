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
                            <!-- Delete button -->
                            <form action="{{ route('partners.destroy', $partner->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-100 hover:bg-red-200 p-2 rounded-full">🗑</button>
                            </form>
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

        <form action="{{ route('partners.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
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
                <button type="submit"
                        class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection
