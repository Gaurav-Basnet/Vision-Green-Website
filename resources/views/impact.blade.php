@extends("master")
@section('title', 'Our Impact')
@section('content')

    <!-- Hero Section -->
    <section class="min-h-[200px] md:min-h-[500px] bg-cover bg-center py-8 md:py-24 text-white relative flex items-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1466611653911-95081537e5b7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80');">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-2xl md:text-5xl font-bold mb-2 md:mb-4">{{ $impacts->h1 }}</h1>
            <p class="text-base md:text-xl max-w-2xl mx-auto">{{ $impacts->sh1 }}</p>
            <div class="mt-4 md:mt-6">
                <a href="#key-metrics"
                    class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 md:px-6 md:py-3 rounded-md text-sm md:text-base font-medium transition-colors">
                    View Results
                </a>
            </div>
        </div>
    </section>

    <!-- Key Metrics -->
    <section id="key-metrics" class="gsap py-12 md:py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3">{{ $impacts->h2 }}</h2>
                <div class="w-20 h-1 bg-green-600 mx-auto"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">{{ $impacts->sh2 }}</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8">
                <!-- Metric 1 -->
                <div class="bg-green-50 p-4 md:p-6 rounded-xl text-center">
                    <div class="text-2xl md:text-4xl font-bold text-green-700 mb-2">{{ $impacts->sh3 }}</div>
                    <div class="text-sm md:text-base text-gray-700">{{ $impacts->sh4 }}</div>
                    <div class="mt-2">
                        <svg class="w-8 h-8 mx-auto text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                </div>

                <!-- Metric 2 -->
                <div class="bg-green-50 p-4 md:p-6 rounded-xl text-center">
                    <div class="text-2xl md:text-4xl font-bold text-green-700 mb-2">{{ $impacts->sh5 }}</div>
                    <div class="text-sm md:text-base text-gray-700">{{ $impacts->sh6 }}</div>
                    <div class="mt-2">
                        <svg class="w-8 h-8 mx-auto text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Metric 3 -->
                <div class="bg-green-50 p-4 md:p-6 rounded-xl text-center">
                    <div class="text-2xl md:text-4xl font-bold text-green-700 mb-2">{{ $impacts->sh7 }}</div>
                    <div class="text-sm md:text-base text-gray-700">{{ $impacts->sh8 }}</div>
                    <div class="mt-2">
                        <svg class="w-8 h-8 mx-auto text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- Metric 4 -->
                <div class="bg-green-50 p-4 md:p-6 rounded-xl text-center">
                    <div class="text-2xl md:text-4xl font-bold text-green-700 mb-2">{{ $impacts->sh9 }}</div>
                    <div class="text-sm md:text-base text-gray-700">{{ $impacts->sh10 }}</div>
                    <div class="mt-2">
                        <svg class="w-8 h-8 mx-auto text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Geographic Impact -->
    <section id="geographic-reach" class="gsap py-12 md:py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3">{{ $impacts->h3 }}</h2>
                <div class="w-20 h-1 bg-green-600 mx-auto"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">{{ $impacts->sh11 }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center gsap-card">
                <div>
                    <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1771&q=80"
                        alt="Nepal map with project locations" class="rounded-xl shadow-md w-full h-auto">
                </div>
                <div>
                    <div class="space-y-6">
                        <!-- Region 1 -->
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-10 w-10 rounded-md bg-green-600 text-white">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-800">{{ $impacts->sh12 }}</h3>
                                <p class="mt-1 text-gray-600">{{ $impacts->sh13 }}</p>
                            </div>
                        </div>

                        <!-- Region 2 -->
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-10 w-10 rounded-md bg-green-600 text-white">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-800">{{ $impacts->sh14 }}</h3>
                                <p class="mt-1 text-gray-600">{{ $impacts->sh15 }}</p>
                            </div>
                        </div>

                        <!-- Region 3 -->
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-10 w-10 rounded-md bg-green-600 text-white">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-800">{{ $impacts->sh16 }}</h3>
                                <p class="mt-1 text-gray-600">{{ $impacts->sh17 }}</p>
                            </div>
                        </div>

                        <!-- Region 4 -->
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-10 w-10 rounded-md bg-green-600 text-white">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-800">{{ $impacts->sh18 }}</h3>
                                <p class="mt-1 text-gray-600">{{ $impacts->sh19 }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Annual Report -->
    <section id="annual-report" class="gsap py-12 md:py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">

                <div class="gsap-card bg-white rounded-xl shadow-md overflow-hidden md:flex mb-8">
                    <div class="md:w-1/3 bg-green-700 p-6 md:p-8 flex items-center justify-center">
                        <div class="text-center">
                            <svg class="w-12 h-12 mx-auto text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                            <h3 class="mt-4 text-xl font-bold text-white"> Annual Report</h3>
                        </div>
                    </div>
                    <div class="md:w-2/3 p-6 md:p-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Download Our Full Annual Report</h2>
                        <p class="text-gray-600 mb-6">Explore our comprehensive annual report detaiiling achivements,
                            financial, and future goals for sustinable development in Nepal .</p>
                        <div class="space-y-3">
                            @foreach($annualReports as $report)
                                @if($report->pdf)
                                    <a href="{{ asset('storage/' . $report->pdf) }}" target="_blank"
                                        class="flex items-center justify-between bg-gray-100 hover:bg-gray-200 p-3 rounded-lg transition-colors">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                            <span class="font-medium">{{ $report->title }}</span>
                                        </div>
                                        <span class="text-sm text-gray-500">
                                            {{ number_format(Storage::disk('public')->size($report->pdf) / 1048576, 1) }} MB
                                        </span>
                                    </a>
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>



    <!-- CTA Section -->
    <section id="cta-section" class="gsap py-12 md:py-16 bg-green-800 text-white">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold mb-4">{{ $impacts->h5 }}</h2>
                <p class="text-sm md:text-xl mb-8">{{ $impacts->sh28 }}</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#"
                        class="bg-white hover:bg-gray-100 text-green-800 font-medium px-4 py-2 md:px-6 md:py-3 rounded-lg transition-colors text-sm md:text-base">
                        Donate Now
                    </a>
                    <a href="#"
                        class="bg-transparent border border-white md:border-2 hover:bg-white/10 font-medium px-4 py-2 md:px-6 md:py-3 rounded-lg transition-colors text-sm md:text-base">
                        Volunteer
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection