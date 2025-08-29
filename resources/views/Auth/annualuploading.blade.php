@extends('Auth.dashboard')
@section('title', 'Annual Report Editor')
@section('content')

    @if(session('success'))
        <div class="text-green-600">{{ session('success') }}</div>
    @endif

    <form action="{{ route('annuals-uploading.update') }}" method="POST">
        @csrf

        <!-- Hero Section -->
        <section
            class="min-h-[300px] md:min-h-[400px] bg-cover bg-center py-12 md:py-20 text-white relative flex items-center"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1466611653911-95081537e5b7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80');">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="container mx-auto px-4 text-center relative z-10">
                <input type="text" name="h1" value="{{ old('h1', $annual->h1) }}" placeholder="Enter Annual Report Heading"
                    class="text-3xl md:text-5xl font-bold mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">

                <textarea name="sh1" placeholder="Enter annual report description"
                    class="text-lg md:text-xl max-w-3xl mx-auto w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">{{ old('sh1', $annual->sh1) }}</textarea>

                <div class="mt-6">
                    <a href="#download-report"
                        class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md font-medium transition-colors">
                        Download Report
                    </a>
                </div>
            </div>
        </section>

        <!-- Report Highlights -->
        <section class="py-12 md:py-16 bg-white">
            <div class="container max-w-6xl mx-auto px-4">
                <div class="text-center mb-12">
                    <input type="text" name="h2" value="{{ old('h2', $annual->h2) }}" placeholder="Section Heading"
                        class="text-2xl md:text-3xl font-bold text-gray-800 mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">

                    <textarea name="sh3" placeholder="Section description"
                        class="text-gray-600 max-w-3xl mx-auto w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">{{ old('sh3', $annual->sh3) }}</textarea>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                    <!-- Stat 1 -->
                    <div class="bg-green-50 p-6 rounded-lg text-center border border-green-100">
                        <input type="text" name="sh4" value="{{ old('sh4', $annual->sh4) }}" placeholder="Statistic Value"
                            class="text-4xl font-bold text-green-600 mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">

                        <input type="text" name="sh5" value="{{ old('sh5', $annual->sh5) }}" placeholder="Statistic Title"
                            class="text-lg font-medium text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">

                        <input type="text" name="sh6" value="{{ old('sh6', $annual->sh6) }}"
                            placeholder="Statistic Description"
                            class="text-gray-600 mt-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">
                    </div>

                    <!-- Stat 2 -->
                    <div class="bg-green-50 p-6 rounded-lg text-center border border-green-100">
                        <input type="text" name="sh7" value="{{ old('sh7', $annual->sh7) }}" placeholder="Statistic Value"
                            class="text-4xl font-bold text-green-600 mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">

                        <input type="text" name="sh8" value="{{ old('sh8', $annual->sh8) }}" placeholder="Statistic Title"
                            class="text-lg font-medium text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">

                        <input type="text" name="sh9" value="{{ old('sh9', $annual->sh9) }}"
                            placeholder="Statistic Description"
                            class="text-gray-600 mt-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">
                    </div>

                    <!-- Stat 3 -->
                    <div class="bg-green-50 p-6 rounded-lg text-center border border-green-100">
                        <input type="text" name="sh10" value="{{ old('sh10', $annual->sh10) }}"
                            placeholder="Statistic Value"
                            class="text-4xl font-bold text-green-600 mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">

                        <input type="text" name="sh11" value="{{ old('sh11', $annual->sh11) }}"
                            placeholder="Statistic Title"
                            class="text-lg font-medium text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">

                        <input type="text" name="sh12" value="{{ old('sh12', $annual->sh12) }}"
                            placeholder="Statistic Description"
                            class="text-gray-600 mt-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">
                    </div>
                </div>

                <!-- Financial Summary -->
                <div class="bg-gray-50 p-6 md:p-8 rounded-xl border border-gray-200 mb-12 gsap-card ">
                    <input type="text" name="h3" value="{{ old('h3', $annual->h3 ?? 'Financial Summary') }}"
                        placeholder="Section Heading"
                        class="text-xl md:text-2xl font-bold mb-6 text-center text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="font-medium text-gray-800 mb-4">Income Sources</h3>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span>Individual Donations</span>
                                    <span class="font-medium">45%</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Corporate Sponsorships</span>
                                    <span class="font-medium">35%</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Grants</span>
                                    <span class="font-medium">15%</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Other</span>
                                    <span class="font-medium">5%</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="font-medium text-gray-800 mb-4">Expenditure</h3>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span>Program Activities</span>
                                    <span class="font-medium">75%</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Administrative</span>
                                    <span class="font-medium">15%</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Fundraising</span>
                                    <span class="font-medium">10%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Key Projects -->
                <div class="mb-12 gsap">
                    <!-- Section Heading (h4) -->
                    <input type="text" name="h4" value="{{ old('h4', $annual->h4 ?? 'Key Projects') }}"
                        placeholder="Section Heading"
                        class="text-xl md:text-2xl font-bold mb-6 text-center text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 gsap-card">
                        <!-- Project 1 -->
                        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                            <input type="text" name="h5"
                                value="{{ old('h5', $annual->h5 ?? 'Urban Greening Initiative') }}"
                                placeholder="Project Title"
                                class="text-lg font-bold text-green-600 mb-2 w-full bg-transparent border-b border-dashed border-gray-300 focus:outline-none focus:border-blue-500">
                            <textarea name="sh13" placeholder="Project Description"
                                class="text-gray-600 mb-4 w-full bg-transparent border-b border-dashed border-gray-300 focus:outline-none focus:border-blue-500 min-h-[60px]">{{ $annual->sh13 }}</textarea>
                            <input type="text" name="sh14_status1"
                                value="{{ old('sh14_status1', $annual->sh14_status1 ?? 'Completed: June 2023') }}"
                                placeholder="Project Status"
                                class="text-sm text-gray-500 w-full bg-transparent border-b border-dashed border-gray-300 focus:outline-none">
                        </div>

                        <!-- Project 2 -->
                        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                            <input type="text" name="h6"
                                value="{{ old('h6', $annual->h6?? 'River Cleanup Campaign') }}"
                                placeholder="Project Title"
                                class="text-lg font-bold text-green-600 mb-2 w-full bg-transparent border-b border-dashed border-gray-300 focus:outline-none focus:border-blue-500">
                            <textarea name="sh14" placeholder="Project Description"
                                class="text-gray-600 mb-4 w-full bg-transparent border-b border-dashed border-gray-300 focus:outline-none focus:border-blue-500 min-h-[60px]">{{ $annual->sh14 }}</textarea>
                            <input type="text" name="sh14_status2"
                                value="{{ old('sh14_status2', $annual->sh14_status2 ?? 'Ongoing') }}"
                                placeholder="Project Status"
                                class="text-sm text-gray-500 w-full bg-transparent border-b border-dashed border-gray-300 focus:outline-none">
                        </div>

                        <!-- Project 3 -->
                        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                            <input type="text" name="h7"
                                value="{{ old('h7', $annual->h7 ?? 'School Eco-Clubs') }}"
                                placeholder="Project Title"
                                class="text-lg font-bold text-green-600 mb-2 w-full bg-transparent border-b border-dashed border-gray-300 focus:outline-none focus:border-blue-500">
                            <textarea name="sh15" placeholder="Project Description"
                                class="text-gray-600 mb-4 w-full bg-transparent border-b border-dashed border-gray-300 focus:outline-none focus:border-blue-500 min-h-[60px]">{{ $annual->sh15 }}</textarea>
                            <input type="text" name="sh14_status3"
                                value="{{ old('sh14_status3', $annual->sh14_status3 ?? 'Launched: March 2023') }}"
                                placeholder="Project Status"
                                class="text-sm text-gray-500 w-full bg-transparent border-b border-dashed border-gray-300 focus:outline-none">
                        </div>

                        <!-- Project 4 -->
                        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                            <input type="text" name="h8"
                                value="{{ old('h8', $annual->h8?? 'Solar Power Pilot') }}"
                                placeholder="Project Title"
                                class="text-lg font-bold text-green-600 mb-2 w-full bg-transparent border-b border-dashed border-gray-300 focus:outline-none focus:border-blue-500">
                            <textarea name="sh" placeholder="Project Description"
                                class="text-gray-600 mb-4 w-full bg-transparent border-b border-dashed border-gray-300 focus:outline-none focus:border-blue-500 min-h-[60px]"> {{ $annual->sh16 }}</textarea>
                            <input type="text" name="sh14_status4"
                                value="{{ old('sh14_status4', $annual->sh14_status4 ?? 'Completed: November 2023') }}"
                                placeholder="Project Status"
                                class="text-sm text-gray-500 w-full bg-transparent border-b border-dashed border-gray-300 focus:outline-none">
                        </div>
                    </div>
                </div>

                <!-- Voices of Impact (Non-editable section) -->
                <div class="mb-12 text-center">
                    <h2 class="text-xl md:text-2xl font-bold mb-6">Voices of Impact</h2>
                    <p class="text-gray-600 max-w-3xl mx-auto">Hear from those whose lives we've touched through our
                        initiatives and programs.</p>
                </div>

                <!-- Download Section -->
                <div class="text-center bg-gray-50 p-8 rounded-xl border border-gray-200">
                    <input type="text" name="h9" value="{{ old('h9', $annual->h9) }}" placeholder="Download Section Heading"
                        class="text-xl md:text-2xl font-bold mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">

                    <textarea name="sh44" placeholder="Download Section Description"
                        class="text-gray-600 mb-6 max-w-2xl mx-auto w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('sh14', $annual->sh14) }}</textarea>

                    <div class="flex flex-col sm:flex-row mt-8 md:mt-10 justify-center gap-4">
                        <button type="button"
                            class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-md font-medium transition-colors">
                            Download English Version
                        </button>
                        <button type="button"
                            class="inline-block bg-white hover:bg-gray-100 text-gray-800 border border-gray-300 px-6 py-3 rounded-md font-medium transition-colors">
                            Download Nepali Version
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Looking Ahead -->
        <section class="py-8 md:py-16 bg-green-600 text-white">
            <div class="container max-w-4xl mx-auto px-2 mt-8 md:mt-10 text-center">
                <input type="text" name="h10" value="{{ old('h10', $annual->h10) }}" placeholder="Looking Ahead Heading"
                    class="text-2xl md:text-3xl font-bold mb-6 w-full bg-transparent border-2 border-dashed border-white focus:outline-none focus:border-blue-300 p-2 rounded-lg text-center">

                <textarea name="sh2" placeholder="Looking Ahead Description"
                    class="text-sm md:text-lg mb-8 w-full bg-transparent border-2 border-dashed border-white focus:outline-none focus:border-blue-300 p-2 rounded-lg text-center">{{ old('sh2', $annual->sh2) }}</textarea>

                <button type="button"
                    class="inline-block bg-white hover:bg-gray-100 text-green-600 px-6 py-2 rounded-md font-medium transition-colors">
                    Learn More About Our Future Plans
                </button>
            </div>
        </section>

        <div class="flex justify-end mt-4 p-4">
            <button type="submit"
                class="px-4 py-2 bg-blue-500 hover:bg-blue-600 active:bg-blue-700 text-white rounded transition-colors duration-200">
                Save Changes
            </button>
        </div>
    </form>

    <style>
        /* Make sure inputs and textareas take full width */
        input[type="text"],
        textarea {
            width: 100%;
        }

        /* Style for stat cards to maintain visual hierarchy */
        .bg-green-50 input,
        .bg-green-50 textarea {
            background-color: rgba(240, 253, 244, 0.7);
        }

        /* Style for white background sections */
        .bg-white input,
        .bg-white textarea {
            background-color: rgba(255, 255, 255, 0.7);
        }

        /* Style for green background section */
        .bg-green-600 input,
        .bg-green-600 textarea {
            background-color: rgba(22, 163, 74, 0.3);
            color: white;
        }

        /* Placeholder color for green section */
        .bg-green-600 input::placeholder,
        .bg-green-600 textarea::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
    </style>
@endsection