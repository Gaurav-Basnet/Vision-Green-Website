@extends('Auth.dashboard')
@section('title', 'Team Management')
@section('content')

<div class="container mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="text-center mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-green-800">Team Management</h1>
        <p class="text-gray-600 mt-2">Manage your team members in a structured table format</p>
    </div>

    <!-- Action Button -->
    <div class="flex justify-end mb-6">
        <button onclick="document.getElementById('addMemberModal').classList.remove('hidden')"
            class="bg-green-600 hover:bg-green-700 text-white font-medium px-5 py-2 rounded-lg transition-colors">
            + Add New Member
        </button>
    </div>

    <!-- Team Members Table -->
    <div class="overflow-x-auto bg-white shadow-md rounded-xl">
        <table class="min-w-full table-auto border-collapse">
            <thead class="bg-green-100 text-green-800">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Photo</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Name</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Designation</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Bio</th>
                    <th class="px-4 py-3 text-center text-sm font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-sm">
                @foreach($members as $member)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3">
                            <img src="{{ $member->photo ? asset('storage/' . $member->photo) : 'https://via.placeholder.com/80' }}"
                                alt="{{ $member->name }}" class="w-14 h-14 rounded-lg object-cover">
                        </td>
                        <td class="px-4 py-3 font-medium text-gray-800">{{ $member->name }}</td>
                        <td class="px-4 py-3 text-green-600">{{ $member->designation }}</td>
                        <td class="px-4 py-3 text-gray-600">{{ $member->bio }}</td>
                        <td class="px-4 py-3 text-center space-x-2">
                            <!-- Delete button -->
                            <form action="{{ route('team.destroy', $member->id) }}" method="POST" class="inline">
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

<!-- Add Member Modal -->
<div id="addMemberModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-6">
        <h2 class="text-xl font-semibold text-green-700 mb-4">Add New Team Member</h2>

        <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" required
                       class="w-full border rounded-lg px-3 py-2 focus:ring-green-500 focus:border-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Designation</label>
                <input type="text" name="designation" required
                       class="w-full border rounded-lg px-3 py-2 focus:ring-green-500 focus:border-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Bio</label>
                <textarea name="bio" rows="3"
                          class="w-full border rounded-lg px-3 py-2 focus:ring-green-500 focus:border-green-500"></textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Photo</label>
                <input type="file" name="photo" accept="image/*"
                       class="w-full border rounded-lg px-3 py-2 focus:ring-green-500 focus:border-green-500">
            </div>

            <div class="flex justify-end space-x-2">
                <button type="button"
                        onclick="document.getElementById('addMemberModal').classList.add('hidden')"
                        class="px-4 py-2 bg-gray-300 rounded-lg">Cancel</button>
                <button type="submit"
                        class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection
