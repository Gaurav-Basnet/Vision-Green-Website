@extends('Auth.dashboard')
@section('title', 'Company Details Management')
@section('content')
<div class="container mx-auto px-4 py-6">

    <!-- Header Section -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Company Details Management</h2>
        <p class="text-gray-600">Update company details</p>
    </div>

    <!-- Company Details Table -->
    <div class="bg-white rounded-t-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Emails</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PAN</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SWC</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reg. Number</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($companies as $company)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">
                                {{ $company->email ?? '-' }}<br>
                                {{ $company->email2 ?? '' }}<br>
                                {{ $company->email3 ?? '' }}<br>
                                {{ $company->email4 ?? '' }}
                            </td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">{{ $company->phone_number ?? '-' }}</td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">{{ $company->address ?? '-' }}</td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">{{ $company->pan_number ?? '-' }}</td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">{{ $company->swc_number ?? '-' }}</td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">{{ $company->reg_number ?? '-' }}</td>
                            <td class="px-4 py-4 whitespace-nowrap">
                                <button type="button" class="text-blue-600 hover:text-blue-900"
                                    onclick="openEditCompanyModal({{ $company->id }})">
                                    <i class="fas fa-edit"></i> Update
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {!! $companies->links() !!}
    </div>
</div>

<!-- Edit Company Modal -->
<div class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden" id="companyModal">
    <div class="relative top-10 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <div class="flex justify-between items-center pb-3 border-b">
                <h3 class="text-xl font-semibold text-gray-800">Update Company Details</h3>
                <button id="closeCompanyModal" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <form id="companyForm" action="{{ route('companies.update') }}" method="POST" class="mt-4 space-y-4">
                @csrf
                @method('PUT')
                <input type="hidden" name="company_id" id="company_id">

                <!-- Emails -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Primary Email</label>
                        <input type="email" name="email" id="email1"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Secondary Email</label>
                        <input type="email" name="email2" id="email2"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tertiary Email</label>
                        <input type="email" name="email3" id="email3"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Quaternary Email</label>
                        <input type="email" name="email4" id="email4"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>
                </div>

                <!-- Phone & Address -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                        <input type="text" name="address" id="address"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>
                </div>

                <!-- PAN, SWC, Reg -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">PAN Number</label>
                        <input type="text" name="pan_number" id="pan_number"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">SWC Number</label>
                        <input type="text" name="swc_number" id="swc_number"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Registration Number</label>
                        <input type="text" name="reg_number" id="reg_number"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex justify-end pt-4 border-t mt-6">
                    <button type="button" id="cancelCompanyBtn" 
                        class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                        Cancel
                    </button>
                    <button type="submit" 
                        class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('companyModal');
    const closeBtn = document.getElementById('closeCompanyModal');
    const cancelBtn = document.getElementById('cancelCompanyBtn');

    closeBtn.addEventListener('click', () => modal.classList.add('hidden'));
    cancelBtn.addEventListener('click', () => modal.classList.add('hidden'));

    window.addEventListener('click', (e) => {
        if (e.target === modal) modal.classList.add('hidden');
    });
});

function openEditCompanyModal(id) {
    const modal = document.getElementById('companyModal');

    fetch(`/companies/${id}/edit`)
        .then(res => res.json())
        .then(data => {
            document.getElementById('company_id').value = data.id;
            document.getElementById('email1').value = data.email ?? '';
            document.getElementById('email2').value = data.email2 ?? '';
            document.getElementById('email3').value = data.email3 ?? '';
            document.getElementById('email4').value = data.email4 ?? '';
            document.getElementById('phone_number').value = data.phone_number ?? '';
            document.getElementById('address').value = data.address ?? '';
            document.getElementById('pan_number').value = data.pan_number ?? '';
            document.getElementById('swc_number').value = data.swc_number ?? '';
            document.getElementById('reg_number').value = data.reg_number ?? '';
            modal.classList.remove('hidden');
        });
}
</script>
@endsection
