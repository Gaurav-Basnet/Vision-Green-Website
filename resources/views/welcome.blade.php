@extends("master")
@section('title', 'Home')
@section('content')

    <!-- Hero Section with Coming Soon Message -->
    <section class="min-h-[400px] md:min-h-[700px] bg-cover bg-center py-12 md:py-32 text-white relative"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1774&q=80');">
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="container mx-auto px-4 text-center">

                <!-- <h1 class="text-4xl md:text-6xl font-bold mb-4 md:mb-6">Together for a Sustainable Nepal</h1> -->
                <h1 class="text-4xl md:text-6xl font-bold mb-4 md:mb-6">
                    {{ $home->t1 ?? 'Default Main Heading' }}
                </h1>
                <p class="text-lg md:text-2xl max-w-3xl mx-auto mb-6 md:mb-8">{{ $home->st1 }}</p>

                <div class="flex flex-col sm:flex-row justify-center gap-3 md:gap-4">
                    <button
                        class="bg-emerald-600 hover:bg-emerald-700 text-white font-medium py-2 px-6 rounded-lg transition duration-300 opacity-80 cursor-not-allowed text-sm md:text-base"
                        disabled>
                        Learn More
                    </button>
                    <button
                        class="border-2 border-white hover:bg-white/10 text-white font-medium py-2 px-6 rounded-lg transition duration-300 opacity-80 cursor-not-allowed text-sm md:text-base"
                        disabled>
                        Get Involved
                    </button>
                </div>
                <br>
                <div
                    class="inline-block bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl px-4 py-3 md:px-8 md:py-6 mb-6 md:mb-8 animate-pulse">
                    <span class="text-emerald-300 font-semibold tracking-widest text-xs md:text-sm uppercase">Coming
                        Soon</span>
                </div>

            </div>
        </div>
    </section>


    <!-- Mission and Vision -->
    <section id="mission-vision" class="bg-white py-12 md:py-16 gsap">
        <div class="container max-w-full px-4">
            <div class="flex flex-col md:flex-row gap-8 md:gap-12 items-center">
                <!-- Image/Icon Section -->
                <div class="w-full md:w-1/2 flex justify-center">
                    <div class="relative w-full h-64 md:h-96">
                        <!-- Floating green circles background -->
                        <div
                            class="absolute -top-4 -left-4 w-32 h-32 bg-green-100 rounded-full opacity-70 animate-float animation-delay-200">
                        </div>
                        <div
                            class="absolute -bottom-4 -right-4 w-24 h-24 bg-green-200 rounded-full opacity-50 animate-float animation-delay-400">
                        </div>

                        <!-- Main card -->
                        <div
                            class="relative bg-green-50 border-2 border-green-100 rounded-xl w-full h-full flex items-center justify-center shadow-md z-10">
                            <div class="text-center p-6">
                                <div class="bg-white p-6 rounded-full shadow-inner mb-6 inline-flex">
                                    <i class="fas fa-seedling text-5xl md:text-7xl text-green-600"></i>
                                </div>
                                <h3 class="text-xl md:text-2xl font-bold text-green-800">Sustainable Nepal</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Text Content -->
                <div class="w-full md:w-1/2">
                    <!-- Mission -->
                    <div class="gsap-card mb-8 md:mb-12 p-6 bg-green-50 rounded-lg border-l-4 border-green-600">
                        <div class="flex items-center mb-3">
                            <div class="bg-green-600 text-white p-2 rounded-full mr-4">
                                <i class="fas fa-bullseye text-lg"></i>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold text-green-800">Our Mission</h3>
                        </div>
                        <p class="text-gray-700 text-sm md:text-base pl-12">{{ $home->fst2 }}</p>
                    </div>

                    <!-- Vision -->
                    <div class="gsap-card p-6 bg-green-50 rounded-lg border-l-4 border-green-600">
                        <div class="flex items-center mb-3">
                            <div class="bg-green-600 text-white p-2 rounded-full mr-4">
                                <i class="fas fa-eye text-lg"></i>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold text-green-800">Our Vision</h3>
                        </div>
                        <p class="text-gray-700 text-sm md:text-base pl-12">{{ $home->sst2 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Focus Areas -->
    <section id="focus-area" class="bg-gray-50 py-12 md:py-16 gsap">
        <div class="container max-w-full px-4">
            <div class="text-center mb-8 md:mb-16">
                <h2 class="text-2xl md:text-4xl font-bold mb-2 md:mb-4 text-green-800">Our Focus Areas</h2>
                <p class="text-sm md:text-lg max-w-3xl mx-auto text-gray-600">{{ $home->mst3 }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <!-- Habitat Restoration -->
                <div
                    class="gsap-card focus-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-l-4 border-green-600">
                    <div class="flex items-center mb-3 md:mb-4">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="{{ $home->icon1 }} text-xl md:text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-green-800">{{ $home->t3 }}</h3>
                    </div>
                    <p class="text-sm md:text-base text-gray-600">{{ $home->st3 }}</p>
                </div>

                <!-- Indigenous Knowledge -->
                <div
                    class="gsap-card focus-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-l-4 border-green-600">
                    <div class="flex items-center mb-3 md:mb-4">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="{{ $home->icon2 }} text-xl md:text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-green-800">{{ $home->icon2 }}</h3>
                    </div>
                    <p class="text-sm md:text-base text-gray-600">{{ $home->st4 }}</p>
                </div>

                <!-- Biodiversity Conservation -->
                <div
                    class="gsap-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-l-4 border-green-600">
                    <div class="flex items-center mb-3 md:mb-4">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="{{ $home->icon3 }} text-xl md:text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-green-800">{{ $home->t5 }}</h3>
                    </div>
                    <p class="text-sm md:text-base text-gray-600">{{ $home->st5 }}</p>
                </div>

                <!-- Youth Empowerment -->
                <div
                    class="gsap-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-l-4 border-green-600">
                    <div class="flex items-center mb-3 md:mb-4">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="{{ $home->icon4 }}text-xl md:text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-green-800">{{ $home->t6 }}</h3>
                    </div>
                    <p class="text-sm md:text-base text-gray-600">{{ $home->st6 }}</p>
                </div>

                <!-- Health Advocacy -->
                <div
                    class="gsap-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-l-4 border-green-600">
                    <div class="flex items-center mb-3 md:mb-4">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="{{ $home->icon5 }} text-xl md:text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-green-800">{{ $home->t7 }}</h3>
                    </div>
                    <p class="text-sm md:text-base text-gray-600">{{ $home->st7 }}</p>
                </div>

                <!-- Research & Innovation -->
                <div
                    class="gsap-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-l-4 border-green-600">
                    <div class="flex items-center mb-3 md:mb-4">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="{{ $home->icon6 }} text-xl md:text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-green-800">{{ $home->t8 }}</h3>
                    </div>
                    <p class="text-sm md:text-base text-gray-600">{{ $home->st8 }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Stats with image inner shadow - Improved Version -->
    <section id="impact" class="relative bg-cover bg-center py-20 md:py-32 lg:py-40 text-white gsap"
        style="background-image:url('https://images.unsplash.com/photo-1501004318641-b39e6451bec6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1673&q=80');">

        <!-- Dark overlay for better text readability -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Inner shadow effect -->
        <div class="absolute inset-0 shadow-[inset_0_0_80px_rgba(0,0,0,0.8)] pointer-events-none"></div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Your content here -->
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Our Impact</h2>
                <p class="text-xl md:text-2xl opacity-90">{{ $home->st10 }}</p>
            </div>
        </div>
    </section>


    <!-- Featured Projects with Images -->
    <section id="project" class="bg-white py-10 md:py-14 gsap">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8 md:mb-12">
                <h2 class="text-xl md:text-3xl font-bold mb-2 text-green-800">Featured Projects</h2>
                <p class="text-sm md:text-base max-w-3xl mx-auto text-gray-600">{{ $home->st11 ?? '' }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6">

                @forelse($projects as $project)
                    <div
                        class="gsap-card rounded-lg md:rounded-xl overflow-hidden shadow-md md:shadow-lg hover:shadow-lg md:hover:shadow-xl transition-shadow">
                        <div class="h-40 md:h-48 bg-gray-200 overflow-hidden relative">
                            @if(!empty($project->image))
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }}"
                                    class="w-full h-full object-cover">
                            @else
                                <img src="https://via.placeholder.com/400x300" alt="Project image"
                                    class="w-full h-full object-cover">
                            @endif

                            <div
                                class="absolute bottom-0 left-0 {{ $project['status'] === 'Completed' ? 'bg-blue-600' : 'bg-green-600' }}">
                                {{ $project['status'] }}
                            </div>

                        </div>

                        <div class="p-4 md:p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-lg md:text-xl font-bold text-gray-800">{{ $project->name }}</h3>
                                <span class="@if($project->category === 'Reforestation') bg-green-100 text-green-800
                                @elseif($project->category === 'Education') bg-blue-100 text-blue-800
                                        @elseif($project->category === 'Community') bg-purple-100 text-purple-800
                                                    @else bg-gray-100 text-gray-800 @endif
                                                    text-xs px-2 py-0.5 md:px-2 md:py-1 rounded">
                                    {{ $project->category ?? 'General' }}
                                </span>
                            </div>
                            <p class="text-gray-600 mb-3 md:mb-4 text-xs md:text-sm">
                                {{ $project->description ?? 'No description available' }}
                            </p>
                            <div class="flex justify-between items-center text-xs md:text-sm text-gray-500">
                                <span>{{ $project->location ?? 'Location not specified' }}</span>
                       
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-10">
                        <p class="text-gray-500">No projects available at the moment.</p>
                    </div>
                @endforelse

            </div>

            <div class="text-center mt-8 md:mt-10">
                <a href="/project#projects"
                    class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium text-sm md:text-base px-5 py-2.5 rounded-lg transition-colors shadow-md hover:shadow-lg">
                    View All Projects
                </a>
            </div>
        </div>
    </section>



    <!-- Featured Project Highlight with Background -->
    <section class="bg-cover bg-center py-16 md:py-24 relative gsap"
        style="background-image: url('https://images.unsplash.com/photo-1448375240586-882707db888b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80');">
        <!-- Dark overlay for better text readability -->
        <div class="absolute inset-0 bg-black/30"></div>

        <div class="gsap-card container mx-auto px-4 relative z-10">
            <div class="max-w-2xl mx-auto bg-white/90 backdrop-blur-sm rounded-xl shadow-lg overflow-hidden p-8">
                <!-- Badge -->
                <span class="inline-block bg-green-600 text-white text-xs font-semibold px-3 py-1 rounded-full mb-4">
                    Featured Initiative
                </span>

                <!-- Title and Description -->
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3">Himalayan Reforestation Initiative</h2>
                <p class="text-gray-700 mb-6">Restoring vital ecosystems in Nepal's mountainous regions through
                    community-led conservation efforts.</p>

                <!-- Stats Grid -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                        <p class="text-2xl font-bold text-green-600">12,000+</p>
                        <p class="text-sm text-gray-600">Trees Planted</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                        <p class="text-2xl font-bold text-green-600">8</p>
                        <p class="text-sm text-gray-600">Communities</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                        <p class="text-2xl font-bold text-green-600">25</p>
                        <p class="text-sm text-gray-600">Species Protected</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                        <p class="text-2xl font-bold text-green-600">150+</p>
                        <p class="text-sm text-gray-600">Jobs Created</p>
                    </div>
                </div>

                <!-- CTA Button -->
                <a href="/project#projects"
                    class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white font-medium px-5 py-2.5 rounded-lg transition-colors">
                    Explore Project
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Get Involved Section - Compact Version -->
    <section id="involved-section" class="bg-green-900 text-white py-12 md:py-16 gsap">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-3xl mx-auto mb-8 md:mb-12">
                <h2 class="text-xl md:text-3xl font-bold mb-3 md:mb-4">{{ $home->t11 }}</h2>
                <!-- <p class="text-sm md:text-lg opacity-90">Whether you're a volunteer, researcher, or supporter, your
                                    contribution makes a difference.</p> -->
                <p class="text-sm md:text-lg opacity-90">{{ $home->st12}}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                <!-- Volunteer -->
                <div
                    class="group bg-white/10 p-6 rounded-xl backdrop-blur-sm border border-white/10 hover:border-green-500 transition-all duration-300 hover:shadow-lg">
                    <div
                        class="w-14 h-14 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-500 transition-colors">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-3">Volunteer</h3>
                    <p class="text-xs md:text-sm opacity-80 mb-4">{{ $home->st13}}</p>

                    <a href="#"
                        class="inline-flex items-center text-green-300 hover:text-white text-sm font-medium transition-colors">
                        Learn More
                        <svg class="ml-1 w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Donate -->
                <div
                    class=" group bg-white/10 p-6 rounded-xl backdrop-blur-sm border border-white/10 hover:border-green-500 transition-all duration-300 hover:shadow-lg">
                    <div
                        class="w-14 h-14 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-500 transition-colors">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-3">Donate</h3>
                    <p class="text-xs md:text-sm opacity-80 mb-4">{{ $home->st14}}</p>
                    <a href="#"
                        class="inline-flex items-center text-green-300 hover:text-white text-sm font-medium transition-colors">
                        Donate Now
                        <svg class="ml-1 w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Advocate -->
                <div
                    class=" group bg-white/10 p-6 rounded-xl backdrop-blur-sm border border-white/10 hover:border-green-500 transition-all duration-300 hover:shadow-lg">
                    <div
                        class="w-14 h-14 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-500 transition-colors">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-3">Advocate</h3>
                    <p class="text-xs md:text-sm opacity-80 mb-4">{{ $home->st15}}</p>
                    <a href="#"
                        class="inline-flex items-center text-green-300 hover:text-white text-sm font-medium transition-colors">
                        Take Action
                        <svg class="ml-1 w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team-section" class="gsap py-8 md:py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-8 md:mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-green-800">Meet Our Team</h2>
                <p class="text-gray-600 mt-2 text-sm md:text-base">{{ $home->st14 ?? 'Our dedicated professionals' }}</p>
            </div>

            <div class="gsap-card grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                @foreach($members as $member)
                    <div
                        class="bg-white rounded-lg md:rounded-xl shadow-sm md:shadow-md overflow-hidden hover:shadow-md md:hover:shadow-lg transition-shadow">
                        <div class="h-40 sm:h-48 bg-gray-200 overflow-hidden">
                            <img src="{{ $member->photo ? asset('storage/' . $member->photo) : 'https://via.placeholder.com/200' }}"
                                alt="{{ $member->name }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="font-bold text-base md:text-lg text-gray-800">{{ $member->name }}</h3>
                            <p class="text-green-600 text-xs md:text-sm">{{ $member->designation }}</p>
                            <p class="text-gray-600 text-xs mt-1 md:mt-2 line-clamp-2">{{ $member->bio }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-8 md:mt-10">
                <a href="/about#team"
                    class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium px-5 py-2 md:px-6 md:py-2.5 rounded-lg transition-colors text-sm md:text-base">
                    View Full Team
                </a>
            </div>
        </div>
    </section>


@endsection