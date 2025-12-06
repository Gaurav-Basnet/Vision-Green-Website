@extends("master")
@section('title', 'Career Opportunities')
@section('content')

    <!-- Hero Section -->
    <section class="min-h-[300px] md:min-h-[500px] bg-cover bg-center py-12 md:py-24 text-white relative flex items-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1769&q=80');">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">Join Our Team</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">Help build a sustainable future for Nepal through meaningful
                work</p>
        </div>
    </section>
    <!-- Current Openings Section - Enhanced Design -->
    <section class="py-8 md:py-16 bg-gradient-to-br from-gray-50 to-green-50">
        <div class="container mx-auto px-4 max-w-6xl">




            <!-- Job Listings -->
            <div class="space-y-6">
                @forelse ($jobs as $job)
                    <!-- Job Card -->
                    <div
                        class="group bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                        <div class="md:flex">
                            <!-- Icon + Employment Type -->
                            <div
                                class="md:w-1/5 bg-gradient-to-br from-green-50 to-indigo-50 p-6 flex flex-col items-center justify-center">
                                <div
                                    class="bg-white w-16 h-16 rounded-2xl flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-briefcase text-green-600 text-2xl"></i>
                                </div>
                                <span class="text-sm font-semibold text-green-700 bg-green-100 px-3 py-1 rounded-full">
                                    {{ $job->employment_type }}
                                </span>
                                @if($job->created_at)
                                    <span class="text-xs text-gray-500 mt-3">
                                        Posted {{ $job->created_at->diffForHumans() }}
                                    </span>
                                @endif
                            </div>

                            <!-- Job Details -->
                            <div class="md:w-4/5 p-6">
                                <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-4">
                                    <div class="mb-3 md:mb-0">
                                        <h3
                                            class="text-xl font-bold text-gray-900 group-hover:text-green-600 transition-colors">
                                            {{ $job->title }}
                                        </h3>
                                        <div class="flex flex-wrap gap-2 mt-3">
                                            @if($job->location)
                                                <span
                                                    class="inline-flex items-center bg-gray-100 text-gray-700 text-xs px-3 py-1.5 rounded-full">
                                                    <i class="fas fa-map-marker-alt mr-1.5 text-gray-500"></i>
                                                    {{ $job->location }}
                                                </span>
                                            @endif
                                            @if($job->category)
                                                <span
                                                    class="inline-flex items-center bg-green-100 text-green-700 text-xs px-3 py-1.5 rounded-full">
                                                    <i class="fas fa-tag mr-1.5 text-green-500"></i>
                                                    {{ $job->category }}
                                                </span>
                                            @endif
                                            @if($job->salary_range)
                                                <span
                                                    class="inline-flex items-center bg-green-100 text-green-700 text-xs px-3 py-1.5 rounded-full">
                                                    <i class="fas fa-dollar-sign mr-1.5 text-green-500"></i>
                                                    {{ $job->salary_range }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        @if($job->is_remote)
                                            <span
                                                class="inline-flex items-center bg-purple-100 text-purple-700 text-xs px-3 py-1.5 rounded-full">
                                                <i class="fas fa-laptop-house mr-1.5"></i> Remote
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <p class="text-gray-600 mb-5 leading-relaxed">
                                    {{ Str::limit($job->description, 150, '...') }}
                                </p>

                                <!-- Experience Required -->
                                <div class="bg-green-50 p-4 rounded-xl mb-5 border border-green-100">
                                    <h4 class="font-semibold text-green-800 mb-2 flex items-center">
                                        <i class="fas fa-graduation-cap mr-2"></i> Experience Required
                                    </h4>
                                    <p class="text-gray-700 text-sm">{{ $job->experience }}+years</p>
                                </div>

                                <div class="flex flex-col xs:flex-row justify-between items-start xs:items-center gap-4">
                                    <div class="flex items-center">
                                        @if($job->deadline)
                                            <div class="flex items-center bg-red-50 px-3 py-1.5 rounded-lg">
                                                <i class="fas fa-hourglass-end text-red-500 mr-2"></i>
                                                <span class="text-sm font-medium text-red-700">
                                                    Apply before <span
                                                        class="font-bold">{{ \Carbon\Carbon::parse($job->deadline)->format('M d, Y') }}</span>
                                                </span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="flex gap-3">

                                        <!-- Apply Now -->
                                        <a href="/vacancy/apply/{{ $job->id }}"
                                            class="bg-green-600 hover:bg-green-700 text-white font-medium px-5 py-2.5 rounded-lg inline-flex items-center transition-colors shadow-md hover:shadow-lg">
                                            Apply Now
                                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- Empty State -->
                    <div class="text-center py-16 bg-white rounded-2xl shadow-md">
                        <div class="bg-gray-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-briefcase text-gray-400 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">No current openings</h3>
                        <p class="text-gray-600 mb-6">We don't have any job vacancies at the moment. Please check back later.
                        </p>
                        <button class="text-green-600 hover:text-green-800 font-medium inline-flex items-center">
                            Set up job alerts
                            <i class="fas fa-bell ml-2"></i>
                        </button>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($jobs->hasPages())
                <div class="mt-10 bg-white rounded-xl shadow-sm p-4">
                    {{ $jobs->links() }}
                </div>
            @endif


        </div>
    </section>

    <!-- Why Work With Us Section - Mobile Optimized -->
    <section class="gsap py-8 md:py-12 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-8 md:mb-12">
                <h2 class="text-xl md:text-3xl font-bold text-green-800">Why Work With Green Vision?</h2>
                <p class="text-gray-600 mt-1 md:mt-2 text-xs md:text-sm">We offer more than just jobs - we offer purpose</p>
            </div>

            <div id="work-benefits" class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-8">
                <!-- Benefit 1 - Mobile Optimized -->
                <div
                    class="gsap-card bg-green-50 rounded-lg md:rounded-xl p-4 md:p-6 text-center hover:shadow-sm md:hover:shadow-md transition-shadow">
                    <div
                        class="bg-green-100 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8 text-green-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-base md:text-lg font-semibold mb-1 md:mb-2 text-gray-800">Meaningful Work</h3>
                    <p class="text-gray-600 text-xs md:text-base leading-tight md:leading-normal">Contribute to
                        environmental conservation in Nepal.</p>
                </div>

                <!-- Benefit 2 - Mobile Optimized -->
                <div
                    class="gsap-card bg-green-50 rounded-lg md:rounded-xl p-4 md:p-6 text-center hover:shadow-sm md:hover:shadow-md transition-shadow">
                    <div
                        class="bg-green-100 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8 text-green-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-base md:text-lg font-semibold mb-1 md:mb-2 text-gray-800">Professional Growth</h3>
                    <p class="text-gray-600 text-xs md:text-base leading-tight md:leading-normal">Training and skill
                        development opportunities.</p>
                </div>

                <!-- Benefit 3 - Mobile Optimized -->
                <div
                    class="gsap-card bg-green-50 rounded-lg md:rounded-xl p-4 md:p-6 text-center hover:shadow-sm md:hover:shadow-md transition-shadow">
                    <div
                        class="bg-green-100 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8 text-green-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-base md:text-lg font-semibold mb-1 md:mb-2 text-gray-800">Supportive Team</h3>
                    <p class="text-gray-600 text-xs md:text-base leading-tight md:leading-normal">Collaborate with
                        passionate professionals.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Process - Mobile Optimized -->
    <section id="work-benefits" class="gsap py-8 md:py-16 bg-gray-50">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-8 md:mb-12">
                <h2 class="text-xl md:text-3xl font-bold text-green-800">Our Hiring Process</h2>
                <p class="text-gray-600 mt-1 md:mt-2 text-xs md:text-base">What to expect when you apply</p>
            </div>

            <div class="relative">
                <!-- Timeline line - Hidden on mobile -->
                <div class="hidden md:block absolute left-1/2 h-full w-1 bg-green-200 transform -translate-x-1/2"></div>

                <!-- Step 1 - Mobile Optimized -->
                <div class="gsap-card flex flex-col items-center mb-6 md:mb-12 md:flex-row">
                    <div class="w-full md:w-1/2 md:pr-12 mb-3 md:mb-0 md:text-right pl-3 ">
                        <div class="flex items-center md:block">
                            <div
                                class="md:hidden w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center mr-3 flex-shrink-0">
                                <span class="font-bold text-sm">1</span>
                            </div>
                            <div>
                                <h3 class="text-lg md:text-xl font-bold text-green-700 ">1. Application</h3>
                                <p class="text-gray-700 text-xs md:text-base">Submit CV and cover letter</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="hidden md:flex w-10 h-10 md:w-12 md:h-12 rounded-full bg-green-600 text-white items-center justify-center mx-3 md:mx-4 flex-shrink-0">
                        <span class="font-bold text-sm md:text-base">1</span>
                    </div>
                    <div class="w-full md:w-1/2 md:pl-12"></div>
                </div>

                <!-- Step 2 - Mobile Optimized -->
                <div class="gsap-card flex flex-col items-center mb-6 md:mb-12 md:flex-row  pl-3">
                    <div class="w-full md:w-1/2 md:pr-12"></div>
                    <div
                        class="hidden md:flex w-10 h-10 md:w-12 md:h-12 rounded-full bg-green-600 text-white items-center justify-center mx-3 md:mx-4 flex-shrink-0">
                        <span class="font-bold text-sm md:text-base">2</span>
                    </div>
                    <div class="w-full md:w-1/2 md:pl-12 mb-3 md:mb-0">
                        <div class="flex items-center md:block">
                            <div
                                class="md:hidden w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center mr-3 flex-shrink-0">
                                <span class="font-bold text-sm">2</span>
                            </div>
                            <div>
                                <h3 class="text-lg md:text-xl font-bold text-green-700">2. Screening</h3>
                                <p class="text-gray-700 text-xs md:text-base">HR reviews qualifications</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 - Mobile Optimized -->
                <div id="hiring-process" class="gsap-card flex flex-col items-center mb-6 md:mb-12 md:flex-row  pl-3">
                    <div class="w-full md:w-1/2 md:pr-12 mb-3 md:mb-0 md:text-right">
                        <div class="flex items-center md:block">
                            <div
                                class="md:hidden w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center mr-3 flex-shrink-0">
                                <span class="font-bold text-sm">3</span>
                            </div>
                            <div>
                                <h3 class="text-lg md:text-xl font-bold text-green-700">3. Interviews</h3>
                                <p class="text-gray-700 text-xs md:text-base">1-2 rounds with team</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="hidden md:flex w-10 h-10 md:w-12 md:h-12 rounded-full bg-green-600 text-white items-center justify-center mx-3 md:mx-4 flex-shrink-0">
                        <span class="font-bold text-sm md:text-base">3</span>
                    </div>
                    <div class="w-full md:w-1/2 md:pl-12"></div>
                </div>

                <!-- Step 4 - Mobile Optimized -->
                <div class="gsap-card flex flex-col items-center md:flex-row  pl-3">
                    <div class="w-full md:w-1/2 md:pr-12"></div>
                    <div
                        class="hidden md:flex w-10 h-10 md:w-12 md:h-12 rounded-full bg-green-600 text-white items-center justify-center mx-3 md:mx-4 flex-shrink-0">
                        <span class="font-bold text-sm md:text-base">4</span>
                    </div>
                    <div class="w-full md:w-1/2 md:pl-12 mb-3 md:mb-0">
                        <div class="flex items-center md:block">
                            <div
                                class="md:hidden w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center mr-3 flex-shrink-0">
                                <span class="font-bold text-sm">4</span>
                            </div>
                            <div>
                                <h3 class="text-lg md:text-xl font-bold text-green-700">4. Decision</h3>
                                <p class="text-gray-700 text-xs md:text-base">Offer to successful candidate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- General Application CTA -->
    <section id="general-application" class="gsap py-12 bg-white">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-3xl mx-auto bg-green-50 rounded-xl p-8 md:p-10">
                <h2 class="text-2xl md:text-3xl font-bold text-green-800 mb-4">Don't See Your Dream Job?</h2>
                <p class="text-gray-700 mb-6 text-sm">We're always looking for passionate individuals to join our mission.
                    Submit a general application and we'll contact you when a suitable position opens.</p>
                <a href="mailto:visiongreen@example.com"
                    class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-md font-medium transition-colors">
                    Submit General Application
                </a>
            </div>
        </div>
    </section>

    <!-- Equal Opportunity Statement -->
    <section id="equal-opportunity" class="gsap py-8 bg-gray-100">
        <div class="container mx-auto px-4 max-w-4xl text-center">
            <p class="text-gray-600 text-sm md:text-base">
                <strong>Green Vision is an equal opportunity employer.</strong> We celebrate diversity and are committed to
                creating an inclusive environment for all employees. We do not discriminate on the basis of race, religion,
                color, national origin, gender, sexual orientation, age, marital status, or disability status.
            </p>
        </div>
    </section>

@endsection