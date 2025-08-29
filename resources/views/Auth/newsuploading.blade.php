@extends('Auth.dashboard')
@section('title', 'NewsLetter Page Editor')
@section('content')

    @if(session('success'))
        <div class="text-green-600">{{ session('success') }}</div>
    @endif

    <form action="{{ route('news-sections.update') }}" method="POST">
        @csrf

        <!-- Hero Section -->
        <section
            class="min-h-[200px] md:min-h-[500px] bg-cover bg-center py-8 md:py-24 text-white relative flex items-center"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1772&q=80');">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="container mx-auto px-4 text-center relative z-10">
                <input type="text" name="t1" value="{{ old('t1', $newsdata->t1) }}" placeholder="Enter Newsletter Heading"
                    class="text-2xl md:text-5xl font-bold mb-2 md:mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg flex text-center">
                <input type="text" name="st1" value="{{ old('st1', $newsdata->st1) }}"
                    placeholder="Enter newsletter description"
                    class="text-base md:text-xl max-w-2xl mx-auto w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg flex text-center">
                <div class="mt-4 md:mt-6">
                    <a href="#subscribe"
                        class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 md:px-6 md:py-3 rounded-md text-sm md:text-base font-medium transition-colors">
                        Subscribe Now
                    </a>
                </div>
            </div>
        </section>

        <!-- Latest Newsletter -->
        <section id="latest-edition" class="gsap py-12 md:py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3">Latest Edition</h2>
                    <div class="w-20 h-1 bg-green-600 mx-auto"></div>
                    <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Our most recent newsletter featuring current initiatives
                        and updates</p>
                </div>

                <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden md:flex">
                    <div class="md:w-1/2 h-64 md:h-auto">
                        <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80"
                            alt="Latest newsletter" class="w-full h-full object-cover">
                    </div>
                    <div class="md:w-1/2 p-6 md:p-8 gsap-card">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            June 2023 | Volume 12, Issue 6
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-3">Green Horizons: Summer Sustainability
                        </h3>
                        <p class="text-gray-600 mb-4">This month's highlights:</p>
                        <ul class="list-disc pl-5 text-gray-600 space-y-2 mb-6">
                            <li>Solar energy project launch in Humla District</li>
                            <li>Interview with our lead environmental scientist</li>
                            <li>Upcoming community tree-planting events</li>
                            <li>Sustainable living tips for monsoon season</li>
                        </ul>
                        <div class="space-y-3">
                            <a href="#"
                                class="block text-center bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md transition-colors">
                                Read Online
                            </a>
                            <a href="#"
                                class="block text-center bg-white hover:bg-gray-50 border border-gray-300 text-gray-700 font-medium py-2 px-4 rounded-md transition-colors flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                    </path>
                                </svg>
                                Download PDF (2.4MB)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Archive -->
        <section id="newletter-archive" class="gsap py-12 md:py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3">Newsletter Archive</h2>
                    <div class="w-20 h-1 bg-green-600 mx-auto"></div>
                    <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Browse our collection of past newsletters</p>
                </div>

                <div class="max-w-4xl mx-auto">
                    <!-- Year 2023 -->
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-4 border-b border-gray-200 pb-2">2023</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Newsletter Item -->
                            <div class="gsap-card bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                                <div class="flex items-start">
                                    <div class="bg-green-100 text-green-800 rounded-lg p-3 mr-4">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-800 mb-1">May 2023</h4>
                                        <p class="text-sm text-gray-600 mb-2">Biodiversity special edition</p>
                                        <div class="flex space-x-3">
                                            <a href="#" class="text-xs text-green-600 hover:text-green-700">Read</a>
                                            <a href="#" class="text-xs text-green-600 hover:text-green-700">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Newsletter Item -->
                            <div class="gsap-card bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                                <div class="flex items-start">
                                    <div class="bg-green-100 text-green-800 rounded-lg p-3 mr-4">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-800 mb-1">April 2023</h4>
                                        <p class="text-sm text-gray-600 mb-2">Earth Day initiatives and results</p>
                                        <div class="flex space-x-3">
                                            <a href="#" class="text-xs text-green-600 hover:text-green-700">Read</a>
                                            <a href="#" class="text-xs text-green-600 hover:text-green-700">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Newsletter Item -->
                            <div class="gsap-card bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                                <div class="flex items-start">
                                    <div class="bg-green-100 text-green-800 rounded-lg p-3 mr-4">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-800 mb-1">March 2023</h4>
                                        <p class="text-sm text-gray-600 mb-2">Water conservation special</p>
                                        <div class="flex space-x-3">
                                            <a href="#" class="text-xs text-green-600 hover:text-green-700">Read</a>
                                            <a href="#" class="text-xs text-green-600 hover:text-green-700">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Newsletter Item -->
                            <div class="gsap-card bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                                <div class="flex items-start">
                                    <div class="bg-green-100 text-green-800 rounded-lg p-3 mr-4">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-800 mb-1">February 2023</h4>
                                        <p class="text-sm text-gray-600 mb-2">Sustainable agriculture updates</p>
                                        <div class="flex space-x-3">
                                            <a href="#" class="text-xs text-green-600 hover:text-green-700">Read</a>
                                            <a href="#" class="text-xs text-green-600 hover:text-green-700">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Year 2022 -->
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-4 border-b border-gray-200 pb-2">2022</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Newsletter Item -->
                            <div class="gsap-card bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                                <div class="flex items-start">
                                    <div class="bg-green-100 text-green-800 rounded-lg p-3 mr-4">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-800 mb-1">December 2022</h4>
                                        <p class="text-sm text-gray-600 mb-2">Year in review and achievements</p>
                                        <div class="flex space-x-3">
                                            <a href="#" class="text-xs text-green-600 hover:text-green-700">Read</a>
                                            <a href="#" class="text-xs text-green-600 hover:text-green-700">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Newsletter Item -->
                            <div class="gsap-card bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                                <div class="flex items-start">
                                    <div class="bg-green-100 text-green-800 rounded-lg p-3 mr-4">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-800 mb-1">September 2022</h4>
                                        <p class="text-sm text-gray-600 mb-2">Climate action special report</p>
                                        <div class="flex space-x-3">
                                            <a href="#" class="text-xs text-green-600 hover:text-green-700">Read</a>
                                            <a href="#" class="text-xs text-green-600 hover:text-green-700">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- View All Button -->
                    <div class="text-center">
                        <a href="#"
                            class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium px-6 py-3 rounded-md transition-colors">
                            View Full Archive
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Benefits -->
        <section id="newsletter-benefits" class="gsap py-12 md:py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <input type="text" name="t2" value="{{ old('t2', $newsdata->t2) }}" placeholder="Enter heading text"
                        class="text-2xl md:text-3xl font-bold text-gray-800 mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg flex text-center">
                    <div class="w-20 h-1 bg-green-600 mx-auto"></div>
                    <textarea name="st2" placeholder="Enter newsletter benefits description"
                        class="text-gray-600 mt-4 max-w-2xl mx-auto w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg flex text-center">{{ old('st2', $newsdata->st2) }}</textarea>
                </div>

                <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-6 md:gap-8">
                    <!-- Benefit 1 -->
                    <div class="gsap-card bg-gray-50 p-6 rounded-xl text-center">
                        <div class="bg-green-100 w-14 h-14 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <input type="text" name="t3" value="{{ old('t3', $newsdata->t3) }}"
                            placeholder="Enter feature title"
                            class="text-lg font-semibold text-gray-800 mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg flex text-center">
                        <textarea name="st3" placeholder="Enter feature description"
                            class="text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st3', $newsdata->st3) }}</textarea>
                    </div>

                    <!-- Benefit 2 -->
                    <div class="gsap-card bg-gray-50 p-6 rounded-xl text-center">
                        <div class="bg-green-100 w-14 h-14 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <!-- Heading -->
                        <input type="text" name="t4" value="{{ old('t4', $newsdata->t4) }}" placeholder="Enter heading text"
                            class="text-lg font-semibold text-gray-800 mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg flex text-center">

                        <!-- Description -->
                        <textarea name="st4" placeholder="Enter description text"
                            class="text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st4', $newsdata->st4) }}</textarea>
                    </div>

                    <!-- Benefit 3 -->
                    <div class="gsap-card bg-gray-50 p-6 rounded-xl text-center">
                        <div class="bg-green-100 w-14 h-14 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <!-- Heading Input -->
                        <input type="text" name="t5" value="{{ old('t5', $newsdata->t5) }}"
                            placeholder="Enter section heading"
                            class="text-lg font-semibold text-gray-800 mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg flex text-center">

                        <!-- Description Textarea -->
                        <textarea name="st5" placeholder="Enter section description"
                            class="text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st5', $newsdata->st5) }}</textarea>
                    </div>
                </div>
            </div>
        </section>

   

        <!-- Testimonials -->
        <section id="testimonials" class="gsap py-12 md:py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3">What Our Readers Say</h2>
                    <div class="w-20 h-1 bg-green-600 mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="gsap-card bg-gray-50 p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Reader"
                                class="w-12 h-12 rounded-full object-cover mr-4">
                            <div>
                                <h4 class="font-semibold text-gray-800">Sarita Shrestha</h4>
                                <p class="text-sm text-gray-500">Kathmandu</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-600 italic">"The newsletter keeps me informed about local environmental
                            initiatives I can participate in. I especially appreciate the practical sustainability tips."
                        </p>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="gsap-card bg-gray-50 p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Reader"
                                class="w-12 h-12 rounded-full object-cover mr-4">
                            <div>
                                <h4 class="font-semibold text-gray-800">Rajiv Gurung</h4>
                                <p class="text-sm text-gray-500">Pokhara</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.784.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-600 italic">"As a teacher, I find the educational resources in the newsletter
                            incredibly valuable for my classroom. The content is well-researched and engaging."</p>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="gsap-card bg-gray-50 p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Reader"
                                class="w-12 h-12 rounded-full object-cover mr-4">
                            <div>
                                <h4 class="font-semibold text-gray-800">Anjali Thapa</h4>
                                <p class="text-sm text-gray-500">Chitwan</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.784.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.784.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-600 italic">"The newsletter helped me transform my small business into an
                            eco-friendly enterprise. The case studies and success stories are truly inspiring!"</p>
                    </div>
                </div>
                <div class="text-center mt-8 md:mt-10">
                    <a href="/project"
                        class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium text-sm md:text-base px-5 py-2.5 rounded-lg transition-colors shadow-md hover:shadow-lg">
                        View More
                    </a>
                </div>
            </div>
        </section>

        <div class="flex justify-end">
            <button type="submit"
                class="mt-3 px-4 py-2 bg-blue-500 hover:bg-blue-600 active:bg-blue-700 text-white rounded transition-colors duration-200">
                Save
            </button>
        </div>
    </form>



@endsection