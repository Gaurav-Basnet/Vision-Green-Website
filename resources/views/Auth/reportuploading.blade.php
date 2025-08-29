@extends('Auth.dashboard')
@section('title', 'Research Reports Management')
@section('content')

<div class="container mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="text-center mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-green-800">Research Reports Management</h1>
        <p class="text-gray-600 mt-2">Manage featured research reports in a structured table format</p>
    </div>

    <!-- Action Button -->
    <div class="flex justify-end mb-6">
        <button onclick="document.getElementById('addReportModal').classList.remove('hidden')"
            class="bg-green-600 hover:bg-green-700 text-white font-medium px-5 py-2 rounded-lg transition-colors">
            + Add New Report
        </button>
    </div>

    <!-- Reports Table -->
    <div class="overflow-x-auto bg-white shadow-md rounded-xl">
        <table class="min-w-full table-auto border-collapse">
            <thead class="bg-green-100 text-green-800">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Cover</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Title</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Year</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Published Date</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Description</th>
                    <th class="px-4 py-3 text-center text-sm font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-sm">
                <!-- Example static data (later will come from DB) -->
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">
                        <img src="https://images.unsplash.com/photo-1469827160215-9d29e96e72f4"
                             alt="Report Cover"
                             class="w-20 h-14 rounded-lg object-cover">
                    </td>
                    <td class="px-4 py-3 font-medium text-gray-800">Himalayan Biodiversity Assessment 2023</td>
                    <td class="px-4 py-3 text-green-600">2023</td>
                    <td class="px-4 py-3 text-gray-500">June 15, 2023</td>
                    <td class="px-4 py-3 text-gray-600">Comprehensive analysis of biodiversity trends across the Nepalese Himalayas.</td>
                    <td class="px-4 py-3 text-center space-x-2">
                        <button class="bg-red-100 hover:bg-red-200 p-2 rounded-full">🗑</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef"
                             alt="Report Cover"
                             class="w-20 h-14 rounded-lg object-cover">
                    </td>
                    <td class="px-4 py-3 font-medium text-gray-800">Climate Change Impacts on Nepalese Agriculture</td>
                    <td class="px-4 py-3 text-green-600">2022</td>
                    <td class="px-4 py-3 text-gray-500">March 8, 2022</td>
                    <td class="px-4 py-3 text-gray-600">Case studies from 15 districts documenting climate impacts and adaptation strategies.</td>
                    <td class="px-4 py-3 text-center space-x-2">
                        <button class="bg-red-100 hover:bg-red-200 p-2 rounded-full">🗑</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Add Report Modal -->
<div id="addReportModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-6">
        <h2 class="text-xl font-semibold text-green-700 mb-4">Add New Research Report</h2>

        <form class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" required
                       class="w-full border rounded-lg px-3 py-2 focus:ring-green-500 focus:border-green-500">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Year</label>
                    <input type="number" name="year" required
                           class="w-full border rounded-lg px-3 py-2 focus:ring-green-500 focus:border-green-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Published Date</label>
                    <input type="date" name="published_date" required
                           class="w-full border rounded-lg px-3 py-2 focus:ring-green-500 focus:border-green-500">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" rows="3"
                          class="w-full border rounded-lg px-3 py-2 focus:ring-green-500 focus:border-green-500"></textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Cover Image</label>
                <input type="file" name="cover" accept="image/*"
                       class="w-full border rounded-lg px-3 py-2 focus:ring-green-500 focus:border-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Report PDF</label>
                <input type="file" name="pdf" accept="application/pdf"
                       class="w-full border rounded-lg px-3 py-2 focus:ring-green-500 focus:border-green-500">
            </div>

            <div class="flex justify-end space-x-2">
                <button type="button"
                        onclick="document.getElementById('addReportModal').classList.add('hidden')"
                        class="px-4 py-2 bg-gray-300 rounded-lg">Cancel</button>
                <button type="submit"
                        class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection
