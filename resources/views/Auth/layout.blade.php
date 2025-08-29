@extends('Auth.dashboard')
@section('title', 'Dashboard')
@section('content')

<div class="flex flex-col flex-1 overflow-hidden">
           

            <!-- Main content area -->
            <main class="flex-1 overflow-y-auto p-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <!-- Stats Cards -->
                    <div class="bg-white rounded-lg shadow p-6 flex items-center">
                        <div class="p-3 rounded-full bg-vision-green-100 text-vision-green-600 mr-4">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Trees Planted</h3>
                            <p class="text-2xl font-semibold text-vision-green-600">12,456</p>
                            <p class="text-xs text-green-500"><i class="fas fa-arrow-up"></i> 12% from last month</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6 flex items-center">
                        <div class="p-3 rounded-full bg-vision-green-100 text-vision-green-600 mr-4">
                            <i class="fas fa-users text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Active Volunteers</h3>
                            <p class="text-2xl font-semibold text-vision-green-600">1,245</p>
                            <p class="text-xs text-green-500"><i class="fas fa-arrow-up"></i> 8% from last month</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6 flex items-center">
                        <div class="p-3 rounded-full bg-vision-green-100 text-vision-green-600 mr-4">
                            <i class="fas fa-recycle text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Waste Recycled</h3>
                            <p class="text-2xl font-semibold text-vision-green-600">45.8 tons</p>
                            <p class="text-xs text-green-500"><i class="fas fa-arrow-up"></i> 15% from last month</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6 flex items-center">
                        <div class="p-3 rounded-full bg-vision-green-100 text-vision-green-600 mr-4">
                            <i class="fas fa-calendar-check text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Upcoming Events</h3>
                            <p class="text-2xl font-semibold text-vision-green-600">8</p>
                            <p class="text-xs text-gray-500">Next: Community Cleanup on 15th</p>
                        </div>
                    </div>

                    <!-- Recent Activities -->
                    <div class="bg-white rounded-lg shadow p-6 col-span-1 sm:col-span-2 lg:col-span-3">
                        <h3 class="text-lg font-semibold text-vision-green-800 mb-4">Recent Activities</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="p-2 rounded-full bg-vision-green-100 text-vision-green-600 mr-3">
                                    <i class="fas fa-tree"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">New tree planting initiative launched in Central Park
                                    </p>
                                    <p class="text-xs text-gray-500">2 hours ago • 45 volunteers registered</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="p-2 rounded-full bg-vision-green-100 text-vision-green-600 mr-3">
                                    <i class="fas fa-recycle"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">Recycling program reached monthly target</p>
                                    <p class="text-xs text-gray-500">5 hours ago • 12.5 tons recycled</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="p-2 rounded-full bg-vision-green-100 text-vision-green-600 mr-3">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">New corporate partner joined Vision Green</p>
                                    <p class="text-xs text-gray-500">Yesterday • GreenTech Solutions</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-semibold text-vision-green-800 mb-4">Quick Actions</h3>
                        <div class="space-y-3">
                            <button
                                class="w-full flex items-center justify-between px-4 py-2 bg-vision-green-50 text-vision-green-700 rounded-md hover:bg-vision-green-100 transition-colors duration-150">
                                <span>Add New Project</span>
                                <i class="fas fa-plus"></i>
                            </button>
                            <button
                                class="w-full flex items-center justify-between px-4 py-2 bg-vision-green-50 text-vision-green-700 rounded-md hover:bg-vision-green-100 transition-colors duration-150">
                                <span>Schedule Event</span>
                                <i class="fas fa-calendar-plus"></i>
                            </button>
                            <button
                                class="w-full flex items-center justify-between px-4 py-2 bg-vision-green-50 text-vision-green-700 rounded-md hover:bg-vision-green-100 transition-colors duration-150">
                                <span>Generate Report</span>
                                <i class="fas fa-file-export"></i>
                            </button>
                            <button
                                class="w-full flex items-center justify-between px-4 py-2 bg-vision-green-50 text-vision-green-700 rounded-md hover:bg-vision-green-100 transition-colors duration-150">
                                <span>Invite Volunteer</span>
                                <i class="fas fa-user-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>

@endsection