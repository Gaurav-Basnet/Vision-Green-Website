@extends("master")
@section('title', 'About Us')
@section('content')

    <!-- Hero Section -->
    <section id="hero-section"
        class="min-h-[300px] md:min-h-[500px] bg-cover bg-center py-12 md:py-24 text-white relative flex items-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1526779259212-939e64788e3c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1774&q=80');">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">{{ $about->t1 }}</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">{{ $about->st1 }}
                Nepal</p>
            <div class="mt-6">
                <a href="#mission"
                    class="gsap inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md font-medium transition-colors mr-3">
                    Our Mission
                </a>
                <a href="#team"
                    class=" gsap inline-block bg-white hover:bg-gray-100 text-green-700 px-6 py-2 rounded-md font-medium transition-colors">
                    Meet the Team
                </a>
            </div>
        </div>
    </section>

    <!-- Mission & Vision with Meaningful Nepal Conservation Image -->
    <section id="mission" class="gsap py-10 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <!-- Image Column - Shows real conservation work -->
                <div class="md:w-2/5">
                    <img src="https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Nepalese community planting trees for conservation"
                        class="rounded-lg shadow-md w-full h-64 object-cover" loading="lazy">
                </div>

                <!-- Content Column -->
                <div class="md:w-3/5 space-y-6">
                    <!-- Mission -->
                    <div
                        class="gsap-card bg-green-50 p-5 rounded-lg border-l-4 border-green-600 hover:shadow-sm transition-shadow">
                        <div class="flex items-start">
                            <div class="bg-green-600 p-2 rounded-full mr-4 flex-shrink-0 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-green-800 mb-2">Our Mission</h3>
                                <p class="text-gray-700 text-base leading-relaxed">
                                    To empower local communities in Nepal through hands-on environmental conservation,
                                    sustainable resource management, and climate change adaptation initiatives.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Vision -->
                    <div
                        class="gsap-card bg-green-50 p-5 rounded-lg border-l-4 border-green-600 hover:shadow-sm transition-shadow">
                        <div class="flex items-start">
                            <div class="bg-green-600 p-2 rounded-full mr-4 flex-shrink-0 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-green-800 mb-2">Our Vision</h3>
                                <p class="text-gray-700 text-base leading-relaxed">
                                    A resilient Nepal where mountain ecosystems and local communities flourish together
                                    through innovative conservation practices and green development leadership.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section id="core-values" class="gsap py-12 md:py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-green-800">{{ $about->t2}}</h2>
                <p class="text-gray-600 mt-2">{{ $about->st2}}</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Value 1 -->
                <div
                    class="gsap-card bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow flex flex-row items-center space-x-4 md:flex-col md:items-start md:space-x-0 md:space-y-4">
                    <!-- Number Circle -->
                    <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center">
                        <span class="text-green-600 font-bold text-xl">1</span>
                    </div>

                    <!-- Text Content -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">{{ $about->t3}}</h3>
                        <p class="text-gray-600 text-sm md:text-base">{{ $about->st3}}</p>
                    </div>
                </div>
                <!-- Value 2 -->
                <div
                    class="gsap-card bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow flex flex-row items-center space-x-4 md:flex-col md:items-start md:space-x-0 md:space-y-4">
                    <!-- Number -->
                    <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center">
                        <span class="text-green-600 font-bold text-xl">2</span>
                    </div>

                    <!-- Text -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">{{ $about->t4}}</h3>
                        <p class="text-gray-600 text-sm md:text-base"></p>
                    </div>
                </div>

                <!-- Value 3 -->
                <div
                    class="gsap-card bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow flex flex-row items-center space-x-4 md:flex-col md:items-start md:space-x-0 md:space-y-4">
                    <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center">
                        <span class="text-green-600 font-bold text-xl">3</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">{{ $about->t5 }}</h3>
                        <p class="text-gray-600 text-sm md:text-base">{{ $about->st5 }}</p>
                    </div>
                </div>

                <!-- Value 4 -->
                <div
                    class="gsap-card bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow flex flex-row items-center space-x-4 md:flex-col md:items-start md:space-x-0 md:space-y-4">
                    <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center">
                        <span class="text-green-600 font-bold text-xl">4</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">{{ $about->t6 }}</h3>
                        <p class="text-gray-600 text-sm md:text-base">{{ $about->t6 }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Our History -->
    <section id="our-history" class=" gsap py-12 md:py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-8 md:gap-12 items-center">
                <div class="w-full md:w-1/2 gsap-card">
                    <div class="bg-green-50 p-6 md:p-8 rounded-xl border-l-4 border-green-600">
                        <h2 class="text-2xl md:text-3xl font-bold mb-4 text-green-800">{{ $about->t7 }}</h2>
                        <p class="text-gray-700 mb-4 text-sm md:text-base">{{ $about->st7 }}</p>

                    </div>
                </div>
                <div class="w-full md:w-1/2 gsap-card">
                    <div class="relative h-64 md:h-80 rounded-xl overflow-hidden shadow-lg">
                        <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1771&q=80"
                            alt="Our early days" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Milestones Timeline -->
    <section id="milestones" class="gsap py-12 md:py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-green-800">Our Milestones</h2>
                <p class="text-gray-600 mt-2"></p>
            </div>

            <div class="relative">
                <!-- Timeline line -->
                <div class="hidden md:block absolute left-1/2 h-full w-1 bg-green-200 transform -translate-x-1/2"></div>

                <!-- Milestone 1 -->
                <div class="gsap-card flex flex-col md:flex-row items-center mb-8 md:mb-12">
                    <div class="w-full md:w-1/2 md:pr-12 mb-4 md:mb-0 md:text-right">
                        <h3 class="text-xl font-bold text-green-700">2010</h3>
                        <p class="text-gray-700 text-sm md:text-base"></p>
                    </div>
                    <div
                        class="hidden md:flex w-16 h-16 rounded-full bg-green-600 text-white items-center justify-center mx-4 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div class="w-full md:w-1/2 md:pl-12"></div>
                </div>

                <!-- Milestone 2 -->
                <div class="gsap-card flex flex-col md:flex-row items-center mb-8 md:mb-12">
                    <div class="w-full md:w-1/2 md:pr-12"></div>
                    <div
                        class="hidden md:flex w-16 h-16 rounded-full bg-green-600 text-white items-center justify-center mx-4 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div class="w-full md:w-1/2 md:pl-12 mb-4 md:mb-0">
                        <h3 class="text-xl font-bold text-green-700">2014</h3>
                        <p class="text-gray-700 text-sm md:text-base"></p>
                    </div>
                </div>

                <!-- Milestone 3 -->
                <div class="gsap-card flex flex-col md:flex-row items-center mb-8 md:mb-12">
                    <div class="w-full md:w-1/2 md:pr-12 mb-4 md:mb-0 md:text-right">
                        <h3 class="text-xl font-bold text-green-700">2018</h3>
                        <p class="text-gray-700 text-sm md:text-base"></p>
                    </div>
                    <div
                        class="hidden md:flex w-16 h-16 rounded-full bg-green-600 text-white items-center justify-center mx-4 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div class="w-full md:w-1/2 md:pl-12"></div>
                </div>

                <!-- Milestone 4 -->
                <div class="gsap-card flex flex-col md:flex-row items-center">
                    <div class="w-full md:w-1/2 md:pr-12"></div>
                    <div
                        class="hidden md:flex w-16 h-16 rounded-full bg-green-600 text-white items-center justify-center mx-4 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div class="w-full md:w-1/2 md:pl-12 mb-4 md:mb-0">
                        <h3 class="text-xl font-bold text-green-700">2023</h3>
                        <p class="text-gray-700 text-sm md:text-base"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Team Section -->
    <section id="team" class="gsap py-12 md:py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-green-800">Meet Our Team</h2>
                <p class="text-gray-600 mt-2">The passionate individuals driving our mission</p>
            </div>

            <!-- Team Grid -->
            <div id="teamGrid" class="gsap-card grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($teams as $key => $team)
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow team-card {{ $key > 3 ? 'hidden extra-team' : '' }}">
                        <div class="h-48 bg-gray-200 overflow-hidden">
                            <img src="{{ $team->image ? asset('storage/' . $team->image) : 'https://via.placeholder.com/300' }}"
                                alt="{{ $team->name }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800">{{ $team->name }}</h3>
                            <p class="text-green-600 text-sm md:text-base">{{ $team->position }}</p>
                            <p class="text-gray-600 text-xs md:text-sm mt-2">{{ $team->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- View Full Team Button -->
            @if($teams->count() > 4)
                <div class="text-center mt-10">
                    <button id="toggleTeamBtn"
                        class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium px-6 py-2.5 rounded-lg transition-colors text-sm md:text-base">
                        View Full Team
                    </button>
                </div>
            @endif
        </div>
    </section>
    <!-- Company Details Section -->
    <section id="company-details" class="py-12 md:py-16 bg-gray-100 gsap">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-green-800">Company Details</h2>
                <p class="text-gray-600 mt-2">All the important information about our organization</p>
            </div>

            <ul class="space-y-4 text-gray-700">
          
                <li class="flex items-start">
                    <i class="fas fa-envelope mt-1 mr-3 text-green-600"></i>
                    <span>Email 1: <a href="mailto:{{ $companyDetails->email ?? '#' }}"
                            class="hover:text-green-600 transition-colors">{{ $companyDetails->email ?? 'Not Available' }}</a></span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-envelope mt-1 mr-3 text-green-600"></i>
                    <span>Email 2: <a href="mailto:{{ $companyDetails->email2 ?? '#' }}"
                            class="hover:text-green-600 transition-colors">{{ $companyDetails->email2 ?? 'Not Available' }}</a></span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-envelope mt-1 mr-3 text-green-600"></i>
                    <span>Email 3: <a href="mailto:{{ $companyDetails->email3 ?? '#' }}"
                            class="hover:text-green-600 transition-colors">{{ $companyDetails->email3 ?? 'Not Available' }}</a></span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-envelope mt-1 mr-3 text-green-600"></i>
                    <span>Email 4: <a href="mailto:{{ $companyDetails->email4 ?? '#' }}"
                            class="hover:text-green-600 transition-colors">{{ $companyDetails->email4 ?? 'Not Available' }}</a></span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-phone mt-1 mr-3 text-green-600"></i>
                    <span>Phone: {{ $companyDetails->phone_number ?? 'Not Available' }}</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-map-marker-alt mt-1 mr-3 text-green-600"></i>
                    <span>Address: {{ $companyDetails->address ?? 'Not Available' }}</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-id-card mt-1 mr-3 text-green-600"></i>
                    <span>PAN Number: {{ $companyDetails->pan_number ?? 'Not Available' }}</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-users mt-1 mr-3 text-green-600"></i>
                    <span>SWC Number: {{ $companyDetails->swc_number ?? 'Not Available' }}</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-file-alt mt-1 mr-3 text-green-600"></i>
                    <span>Registration Number: {{ $companyDetails->reg_number ?? 'Not Available' }}</span>
                </li>
        
            </ul>
        </div>
    </section>


    <!-- Optimized Impact Stats for Mobile & Desktop -->
    <section id="impact-stats" class="gsap py-12 bg-gradient-to-b from-green-700 to-green-600 text-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12 md:mb-16">
                <span class="inline-block mb-2 text-green-200 text-xs md:text-sm font-semibold tracking-wider uppercase">Our
                    Reach</span>
                <h2 class="text-2xl md:text-3xl font-bold mb-3">{{ $about->t13}}</h2>
                <div class="w-16 h-0.5 bg-green-400 mx-auto"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
                <!-- Stat 1 -->
                <div
                    class="gsap-card bg-white/5 rounded-lg p-4 md:p-5 text-center transition-all duration-200 hover:bg-white/10">
                    <div class="text-3xl md:text-4xl font-bold mb-1 md:mb-2 text-white">{{ $about->t14}}</div>
                    <div class="text-xs md:text-sm font-medium text-green-100">{{ $about->st13 }}</div>
                    <div class="mt-1 md:mt-2 h-0.5 w-8 md:w-10 bg-green-400 mx-auto opacity-70"></div>
                </div>

                <!-- Stat 2 -->
                <div
                    class="gsap-card bg-white/5 rounded-lg p-4 md:p-5 text-center transition-all duration-200 hover:bg-white/10">
                    <div class="text-3xl md:text-4xl font-bold mb-1 md:mb-2 text-white">{{ $about->t15 }}</div>
                    <div class="text-xs md:text-sm font-medium text-green-100">{{ $about->st14 }}</div>
                    <div class="mt-1 md:mt-2 h-0.5 w-8 md:w-10 bg-green-400 mx-auto opacity-70"></div>
                </div>

                <!-- Stat 3 -->
                <div
                    class="gsap-card bg-white/5 rounded-lg p-4 md:p-5 text-center transition-all duration-200 hover:bg-white/10">
                    <div class="text-3xl md:text-4xl font-bold mb-1 md:mb-2 text-white">{{ $about->t16 }}</div>
                    <div class="text-xs md:text-sm font-medium text-green-100">{{ $about->st15 }}</div>
                    <div class="mt-1 md:mt-2 h-0.5 w-8 md:w-10 bg-green-400 mx-auto opacity-70"></div>
                </div>

                <!-- Stat 4 -->
                <div
                    class="gsap-card bg-white/5 rounded-lg p-4 md:p-5 text-center transition-all duration-200 hover:bg-white/10">
                    <div class="text-3xl md:text-4xl font-bold mb-1 md:mb-2 text-white">{{ $about->t17 }}</div>
                    <div class="text-xs md:text-sm font-medium text-green-100">{{ $about->st16 }}</div>
                    <div class="mt-1 md:mt-2 h-0.5 w-8 md:w-10 bg-green-400 mx-auto opacity-70"></div>
                </div>
            </div>

            <!-- Mobile-optimized CTA -->
            <div class="text-center mt-12 md:mt-16">
                <a href="#"
                    class="inline-block px-6 py-2 md:px-8 md:py-3 bg-white text-green-700 text-sm md:text-base font-semibold rounded-full hover:bg-green-50 transition-all duration-300 shadow-md hover:shadow-lg">
                    See Our Impact
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5 inline-block ml-1"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- partner section  -->
    <section id="partners" class="py-12 md:py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-green-800">Our Partners</h2>
                <p class="text-gray-600 mt-2">Working together with trusted organizations</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach($partners as $partner)
                    <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm h-24">
                        <img src="{{ $partner->logo ? asset('storage/' . $partner->logo) : 'https://via.placeholder.com/150x60?text=Partner' }}"
                            alt="{{ $partner->name }}" class="max-h-12">
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- CTA Section -->
    <section id="cta-section" class="py-12 md:py-16 bg-white gsap">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-green-800 mb-4">{{ $about->t19 }}</h2>
            <p class="text-gray-700 max-w-2xl mx-auto mb-8 text-sm md:text-base">{{ $about->st18 }}.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/volunteer"
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-md font-medium transition-colors text-sm md:text-base">
                    Volunteer With Us
                </a>
                <a href="/donate"
                    class="bg-white hover:bg-gray-50 border border-green-600 text-green-700 px-6 py-3 rounded-md font-medium transition-colors text-sm md:text-base">
                    Make a Donation
                </a>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggleBtn = document.getElementById("toggleTeamBtn");
            const extraTeams = document.querySelectorAll(".extra-team");
            let expanded = false;

            if (toggleBtn) {
                toggleBtn.addEventListener("click", function () {
                    expanded = !expanded;

                    extraTeams.forEach(team => {
                        team.classList.toggle("hidden", !expanded);
                    });

                    toggleBtn.textContent = expanded ? "Hide Team" : "View Full Team";
                });
            }
        });
    </script>


@endsection