@extends('Auth.dashboard')
@section('title', 'About Page Editor')
@section('content')

    @if(session('success'))
        <div class="text-green-600">{{ session('success') }}</div>
    @endif

    <form action="{{ route('about-sections.update') }}" method="POST">
        @csrf
        <!-- Hero Section -->
        <section id="hero-section"
            class="min-h-[300px] md:min-h-[500px] bg-cover bg-center py-12 md:py-24 text-white relative flex items-center"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1526779259212-939e64788e3c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1774&q=80');">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="container mx-auto px-4 text-center relative z-10">
                <!-- <h1 class="text-3xl md:text-5xl font-bold mb-4">Our Story</h1>
                                                                                                        <p class="text-lg md:text-xl max-w-2xl mx-auto">Discover the journey behind our commitment to a sustainable
                                                                                                            Nepal</p> -->
                <input type="text" name="t1" value="{{ old('t1', $about->t1) }}" placeholder="Enter Main Heading"
                    class="text-3xl sm:text-4xl md:text-6xl text-center font-bold mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                <input type="text" name="st1" value="{{ old('st1', $about->st1) }}" placeholder="Enter Subheading"
                    class="text-base sm:text-lg md:text-2xl text-center max-w-3xl mx-auto mb-6 w-full bg-transparent border-2 border-dashed border-gray-300 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

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
                    <!-- <h2 class="text-2xl md:text-3xl font-bold text-green-800">Our Core Values</h2> -->
                    <input type="text" name="t2" value="{{ $about->t2}}" placeholder="Enter title for core values"
                        class="text-2xl md:text-3xl max-w-3xl mx-auto font-bold text-green-800 mb-6 md:mb-8 w-full 
                                                                                                      bg-white bg-opacity-100 border-2 border-dashed border-gray-300 
                                                                                                      hover:border-gray-400 focus:outline-none focus:border-green-00 
                                                                                                      rounded-lg px-4 py-2 transition-all duration-200 text-center">

                    <!-- <p class="text-gray-600 mt-2">Guiding principles that define our work</p> -->
                    <input type="text" name="st2" value="{{ $about->st2 }}" placeholder="Enter subtitle for core values"
                        class="text-sm md:text-lg max-w-3xl mx-auto text-gray-600 mb-6 md:mb-8 w-full 
                                                                                                      bg-white bg-opacity-100 border-2 border-dashed border-gray-300 
                                                                                                      hover:border-gray-400 focus:outline-none focus:border-green-600 
                                                                                                      rounded-lg px-4 py-2 transition-all duration-200 text-center">
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
                            <input type="text" name="t3" value="{{ $about->t3}}" placeholder="Enter like sustainability"
                                class="text-lg font-semibold text-gray-800 mb-4 w-full 
                                                                                                      bg-white bg-opacity-100 border-2 border-dashed border-gray-300 
                                                                                                      hover:border-gray-400 focus:outline-none focus:border-green-600 
                                                                                                      rounded-lg px-4 py-2 transition-all duration-200">
                            <textarea name="st3" value="{{ $about->st3 }}"
                                placeholder="Enter your ecological balance description" class="text-gray-600 text-sm md:text-base w-full
                                                                         bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                                                                         hover:border-gray-400 focus:outline-none focus:border-green-600
                                                                         rounded-lg px-4 py-2 transition-all duration-200"
                                rows="3">{{ $about->st3}}</textarea>
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
                            <input type="text" name="t4" value="{{ $about->t4 }}" placeholder="Enter like community"
                                class="text-lg font-semibold text-gray-800 mb-4 w-full 
                                                                                                      bg-white bg-opacity-100 border-2 border-dashed border-gray-300 
                                                                                                      hover:border-gray-400 focus:outline-none focus:border-green-600 
                                                                                                      rounded-lg px-4 py-2 transition-all duration-200">

                            <textarea name="st4" placeholder="Describe your empowerment approach" class="text-gray-600 text-sm md:text-base w-full
                                                                     bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                                                                     hover:border-gray-400 focus:outline-none focus:border-green-600
                                                                     rounded-lg px-4 py-2 transition-all duration-200"
                                rows="2">{{ $about->st4 }}</textarea>
                        </div>
                    </div>

                    <!-- Value 3 -->
                    <div
                        class="gsap-card bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow flex flex-row items-center space-x-4 md:flex-col md:items-start md:space-x-0 md:space-y-4">
                        <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center">
                            <span class="text-green-600 font-bold text-xl">3</span>
                        </div>
                        <div>
                            <input type="text" name="t5" value="{{ $about->t5 }}" placeholder="Enter innovation subtitle"
                                class="text-lg font-semibold text-gray-800 mb-4 w-full 
                                                                                                  bg-white bg-opacity-100 border-2 border-dashed border-gray-300 
                                                                                                  hover:border-gray-400 focus:outline-none focus:border-green-600 
                                                                                                  rounded-lg px-4 py-2 transition-all duration-200">
                            <textarea name="st5" placeholder="Describe your creative solutions approach" class="text-gray-600 text-sm md:text-base w-full
                                                                 bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                                                                 hover:border-gray-400 focus:outline-none focus:border-green-600
                                                                 rounded-lg px-4 py-2 transition-all duration-200"
                                rows="2">{{ $about->st5 }}</textarea>
                        </div>
                    </div>

                    <!-- Value 4 -->
                    <div
                        class="gsap-card bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow flex flex-row items-center space-x-4 md:flex-col md:items-start md:space-x-0 md:space-y-4">
                        <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center">
                            <span class="text-green-600 font-bold text-xl">4</span>
                        </div>
                        <div>
                            <input type="text" name="t6" value="{{ $about->t6 }}"
                                placeholder="Describe your integrity values"
                                class="text-lg font-semibold text-gray-800 mb-4 w-full 
                                                                                                  bg-white bg-opacity-100 border-2 border-dashed border-gray-300 
                                                                                                  hover:border-gray-400 focus:outline-none focus:border-green-600 
                                                                                                  rounded-lg px-4 py-2 transition-all duration-200">
                            <textarea name="st6" placeholder="Describe your transparency and accountability approach" class="text-gray-600 text-sm md:text-base w-full
                                                             bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                                                             hover:border-gray-400 focus:outline-none focus:border-green-600
                                                             rounded-lg px-4 py-2 transition-all duration-200"
                                rows="2">{{ $about->st6 }}</textarea>
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
                            <input type="text" name="t7" value="{{ $about->t7 }}" placeholder="Describe your origins"
                                class="text-2xl md:text-3xl font-bold text-green-800 mb-4 w-full 
                                                                                              bg-white bg-opacity-100 border-2 border-dashed border-gray-300 
                                                                                              hover:border-gray-400 focus:outline-none focus:border-green-600 
                                                                                              rounded-lg px-4 py-3 md:py-4 transition-all duration-200">

                            <!-- <p class="text-gray-700 mb-4 text-sm md:text-base">Founded in 2010 by a group of environmental
                                                                        enthusiasts, we started as a small community initiative in Kathmandu Valley with just 5
                                                                        volunteers and a vision for greener neighborhoods.</p>
                                                                    <p class="text-gray-700 text-sm md:text-base">What began as local tree planting campaigns has
                                                                        grown
                                                                        into a nationwide movement for sustainable development and environmental conservation, now
                                                                        engaging over 50,000 volunteers annually.</p> -->
                            <textarea name="st7" value="{{ $about->st7 }}"
                                placeholder="Enter your organization's background story..."
                                class="text-gray-700 mb-4 text-sm md:text-base w-full 
                                                                                             bg-white bg-opacity-100 border-2 border-dashed border-gray-300 
                                                                                             hover:border-gray-400 focus:outline-none focus:border-green-600 
                                                                                             rounded-lg px-4 py-2 transition-all duration-200" rows="4">{{ $about->st7 }}</textarea>
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
                    <input type="text" name="t8" value="{{ $about->t8}}" placeholder="Enter milestones title"
                        class="text-2xl md:text-3xl font-bold text-green-800 mb-4 w-full
                                                                                      bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                                                                                      hover:border-gray-400 focus:outline-none focus:border-green-600
                                                                                      rounded-lg px-4 py-2 transition-all duration-200 flex text-center">

                    <input type="text" name="st8" value="{{ $about->st8 }}" placeholder="Enter subtitle for key moments"
                        class="text-gray-600 mt-2 w-full
                                                      bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                                                      hover:border-gray-400 focus:outline-none focus:border-green-600
                                                      rounded-lg px-4 py-2 transition-all duration-200 flex text-center">
                </div>

                <div class="relative">
                    <!-- Timeline line -->
                    <div class="hidden md:block absolute left-1/2 h-full w-1 bg-green-200 transform -translate-x-1/2"></div>

                    <!-- Milestone 1 -->
                    <div class="gsap-card flex flex-col md:flex-row items-center mb-8 md:mb-12">
                        <div class="w-full md:w-1/2 md:pr-12 mb-4 md:mb-0 md:text-right">
                            <input type="text" name="t9" value="{{ $about->t9 }}" placeholder="Enter year"
                                class="text-xl font-bold text-green-700 mb-2 w-full
                                                                                                bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                                                                                                hover:border-gray-400 focus:outline-none focus:border-green-600
                                                                                                rounded-lg px-4 py-1 transition-all duration-200 flex text-left md:text-right flex text-center">

                            <input type="text" name="st9" value="{{ $about->st9 }}"
                                placeholder="Enter milestone description"
                                class="text-gray-700 text-sm md:text-base w-full
                                                  bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                                                  hover:border-gray-400 focus:outline-none focus:border-green-600
                                                  rounded-lg px-4 py-2 transition-all duration-200 md:text-right text-left">
                        </div>
                        <div
                            class="hidden md:flex w-16 h-16 rounded-full bg-green-600 text-white items-center justify-center mx-4 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </div>
                        <div class="w-full md:w-1/2 md:pl-12 mb-4 md:mb-0">
                            <input type="text" name="t10" value="{{ $about->t10 }}" placeholder="Enter year"
                                class="text-xl font-bold text-green-700 mb-2 w-full
                                                                                                bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                                                                                                hover:border-gray-400 focus:outline-none focus:border-green-600
                                                                                                rounded-lg px-4 py-1 transition-all duration-200 flex ">
                            <input type="text" name="st10" value="{{ $about->st10}}"
                                placeholder="Enter expansion milestone description" class="text-gray-700 text-sm md:text-base w-full
                                          bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                                          hover:border-gray-400 focus:outline-none focus:border-green-600
                                          rounded-lg px-4 py-2 transition-all duration-200">
                        </div>
                    </div>

                    <!-- Milestone 3 -->
                    <div class="gsap-card flex flex-col md:flex-row items-center mb-8 md:mb-12">
                        <div class="w-full md:w-1/2 md:pr-12 mb-4 md:mb-0 md:text-right">
                            <input type="text" name="t11" value="{{ $about->t11}}" placeholder="Enter year"
                                class="text-xl font-bold text-green-700 mb-2 w-full
                                                                                                bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                                                                                                hover:border-gray-400 focus:outline-none focus:border-green-600
                                                                                                rounded-lg px-4 py-1 transition-all duration-200 flex text-left md:text-right">
                            <input type="text" name="st11" value="{{ $about->st11 }}"
                                placeholder="Enter milestone description"
                                class="text-gray-700 text-sm md:text-base w-full
                                                  bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                                                  hover:border-gray-400 focus:outline-none focus:border-green-600
                                                  rounded-lg px-4 py-2 transition-all duration-200 md:text-right text-left">
                        </div>
                        <div
                            class="hidden md:flex w-16 h-16 rounded-full bg-green-600 text-white items-center justify-center mx-4 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </div>
                        <div class="w-full md:w-1/2 md:pl-12 mb-4 md:mb-0">
                            <input type="text" name="t12" value="{{ $about->t12 }}" placeholder="Enter year"
                                class="text-xl font-bold text-green-700 mb-2 w-full
                                                                                                bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                                                                                                hover:border-gray-400 focus:outline-none focus:border-green-600
                                                                                                rounded-lg px-4 py-1 transition-all duration-200 flex ">
                            <input type="text" name="st12" value="{{ $about->st12}}"
                                placeholder="Enter expansion milestone description" class="text-gray-700 text-sm md:text-base w-full
                                          bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                                          hover:border-gray-400 focus:outline-none focus:border-green-600
                                          rounded-lg px-4 py-2 transition-all duration-200">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="gsap py-12 md:py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-green-800">Meet Our Team</h2>
                    <p class="text-gray-600 mt-2">The passionate individuals driving our mission</p>
                </div>

                <div class="gsap-card grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Team Member 1 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="h-48 bg-gray-200 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80"
                                alt="Rajesh Thapa" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800">Rajesh Thapa</h3>
                            <p class="text-green-600 text-sm md:text-base">Executive Director</p>
                            <p class="text-gray-600 text-xs md:text-sm mt-2">Environmental scientist with 15+ years
                                experience
                                in Himalayan ecology</p>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="gsap-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="h-48 bg-gray-200 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=776&q=80"
                                alt="Priya Gurung" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800">Priya Gurung</h3>
                            <p class="text-green-600 text-sm md:text-base">Program Director</p>
                            <p class="text-gray-600 text-xs md:text-sm mt-2">Community development specialist focused on
                                women's
                                empowerment</p>
                        </div>
                    </div>

                    <!-- Team Member 3 -->
                    <div class="gsap-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="h-48 bg-gray-200 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80"
                                alt="Amit Sharma" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800">Amit Sharma</h3>
                            <p class="text-green-600 text-sm md:text-base">Research Coordinator</p>
                            <p class="text-gray-600 text-xs md:text-sm mt-2">PhD in Conservation Biology with focus on
                                Himalayan
                                species</p>
                        </div>
                    </div>

                    <!-- Team Member 4 -->
                    <div class="gsap-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="h-48 bg-gray-200 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=761&q=80"
                                alt="Sunita Rai" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800">Sunita Rai</h3>
                            <p class="text-green-600 text-sm md:text-base">Field Operations</p>
                            <p class="text-gray-600 text-xs md:text-sm mt-2">Indigenous knowledge expert from Eastern Nepal
                            </p>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-10">
                    <a href="/team"
                        class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium px-6 py-2.5 rounded-lg transition-colors text-sm md:text-base">
                        View Full Team
                    </a>
                </div>
            </div>
        </section>

        <!-- Optimized Impact Stats for Mobile & Desktop -->
        <section id="impact-stats" class="gsap py-12 bg-gradient-to-b from-green-700 to-green-600 text-white">
            <div class="container mx-auto px-4 max-w-6xl">
                <div class="text-center mb-12 md:mb-16">
                    <span
                        class="inline-block mb-2 text-green-200 text-xs md:text-sm font-semibold tracking-wider uppercase">Our
                        Reach</span>
                    <input type="text" name="t13" value="{{ $about->t13}}" placeholder="Enter title for core values"
                        class="text-2xl md:text-3xl max-w-3xl mx-auto font-bold text-green-800 mb-6 md:mb-8 w-full 
                                                                                                      bg-white bg-opacity-100 border-2 border-dashed border-gray-300 
                                                                                                      hover:border-gray-400 focus:outline-none focus:border-green-00 
                                                                                                      rounded-lg px-4 py-2 transition-all duration-200 text-center">
                    <div class="w-16 h-0.5 bg-green-400 mx-auto"></div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
                    <!-- Stat 1 -->
                    <div
                        class="gsap-card bg-white/5 rounded-lg p-4 md:p-5 text-center transition-all duration-200 hover:bg-white/10">
                        <input type="text" name="t14" value="{{ $about->t14}}" placeholder="15+"
                            class="text-3xl md:text-4xl font-bold mb-1 md:mb-2 text-white w-full
                                                                              bg-transparent border-2 border-dashed border-white border-opacity-50
                                                                              hover:border-opacity-80 focus:outline-none focus:border-opacity-100
                                                                              rounded-lg px-4 py-1 text-center transition-all duration-200" style="max-width: 120px;">

                        <input type="text" name="st13" value="{{ $about->st13 }}" placeholder="Enter label text" class="text-xs md:text-sm font-medium text-green-100 w-full
                                  bg-transparent border-0 focus:outline-none
                                  placeholder-green-100 placeholder-opacity-50 flex text-center">
                        <div class="mt-1 md:mt-2 h-0.5 w-8 md:w-10 bg-green-400 mx-auto opacity-70"></div>
                    </div>

                    <!-- Stat 2 -->
                    <div
                        class="gsap-card bg-white/5 rounded-lg p-4 md:p-5 text-center transition-all duration-200 hover:bg-white/10">
                        <input type="text" name="t15" value="{{ $about->t15 }}" placeholder="500+"
                            class="text-3xl md:text-4xl font-bold mb-1 md:mb-2 text-white w-full
                                                                              bg-transparent border-2 border-dashed border-white border-opacity-50
                                                                              hover:border-opacity-80 focus:outline-none focus:border-opacity-100
                                                                              rounded-lg px-4 py-1 text-center transition-all duration-200" style="max-width: 120px;">
                        <input type="text" name="st14" value="{{ $about->st14 }}" placeholder="Enter label text" class="text-xs md:text-sm font-medium text-green-100 w-full
                                  bg-transparent border-0 focus:outline-none
                                  placeholder-green-100 placeholder-opacity-50 flex text-center">
                        <div class="mt-1 md:mt-2 h-0.5 w-8 md:w-10 bg-green-400 mx-auto opacity-70"></div>
                    </div>

                    <!-- Stat 3 -->
                    <div
                        class="gsap-card bg-white/5 rounded-lg p-4 md:p-5 text-center transition-all duration-200 hover:bg-white/10">
                        <input type="text" name="t16" value="{{ $about->t16}}" placeholder="50k+"
                            class="text-3xl md:text-4xl font-bold mb-1 md:mb-2 text-white w-full
                                                                              bg-transparent border-2 border-dashed border-white border-opacity-50
                                                                              hover:border-opacity-80 focus:outline-none focus:border-opacity-100
                                                                              rounded-lg px-4 py-1 text-center transition-all duration-200" style="max-width: 120px;">
                        <input type="text" name="st15" value="{{ $about->st15 }}"
                            placeholder="Enter label text" class="text-xs md:text-sm font-medium text-green-100 w-full
                          bg-transparent border-0 focus:outline-none
                          placeholder-green-100 placeholder-opacity-50 flex text-center">
                        <div class="mt-1 md:mt-2 h-0.5 w-8 md:w-10 bg-green-400 mx-auto opacity-70"></div>
                    </div>

                    <!-- Stat 4 -->
                    <div
                        class="gsap-card bg-white/5 rounded-lg p-4 md:p-5 text-center transition-all duration-200 hover:bg-white/10">
                        <input type="text" name="t17" value="{{ $about->t17 }}" placeholder="100++"
                            class="text-3xl md:text-4xl font-bold mb-1 md:mb-2 text-white w-full
                                                                              bg-transparent border-2 border-dashed border-white border-opacity-50
                                                                              hover:border-opacity-80 focus:outline-none focus:border-opacity-100
                                                                              rounded-lg px-4 py-1 text-center transition-all duration-200" style="max-width: 120px;">
                        <input type="text" name="st16" value="{{ $about->st16 }}" placeholder="Enter label text" class="text-xs md:text-sm font-medium text-green-100 w-full
                          bg-transparent border-0 focus:outline-none
                          placeholder-green-100 placeholder-opacity-50 flex text-center">
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

        <!-- Partners Section -->
        <section id="partners" class="gsap py-12 md:py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <input type="text" name="t18" value="{{ $about->t18 }}" placeholder="Enter partners title"
                        class="text-2xl md:text-3xl font-bold text-green-800 mb-4 w-full
                                                                          bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                                                                          hover:border-gray-400 focus:outline-none focus:border-green-600
                                                                          rounded-lg px-4 py-2 transition-all duration-200 flex text-center">
                    <input type="text" name="st17" value="{{ $about->st17 }}" placeholder="Enter collaboration text" class="text-gray-600 mt-2 w-full
                      bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                      hover:border-gray-400 focus:outline-none focus:border-green-600
                      rounded-lg px-4 py-2 transition-all duration-200 flex text-center">
                </div>

                <div class="gsap-card grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div
                        class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm h-24 hover:shadow-md transition-shadow">
                        <img src="https://via.placeholder.com/150x60?text=Ministry+of+Forest" alt="Ministry of Forest"
                            class="max-h-12">
                    </div>
                    <div
                        class="gsap-card flex items-center justify-center p-4 bg-white rounded-lg shadow-sm h-24 hover:shadow-md transition-shadow">
                        <img src="https://via.placeholder.com/150x60?text=WWF+Nepal" alt="WWF Nepal" class="max-h-12">
                    </div>
                    <div
                        class="gsap-card flex items-center justify-center p-4 bg-white rounded-lg shadow-sm h-24 hover:shadow-md transition-shadow">
                        <img src="https://via.placeholder.com/150x60?text=UNDP" alt="UNDP" class="max-h-12">
                    </div>
                    <div
                        class="gsap-card flex items-center justify-center p-4 bg-white rounded-lg shadow-sm h-24 hover:shadow-md transition-shadow">
                        <img src="https://via.placeholder.com/150x60?text=Local+Communities" alt="Local Communities"
                            class="max-h-12">
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section id="cta-section" class="py-12 md:py-16 bg-white gsap">
            <div class="container mx-auto px-4 text-center">
                <input type="text" name="t19" value="{{ $about->t19 }}" placeholder="Enter CTA title"
                    class="text-2xl md:text-3xl font-bold text-green-800 mb-4 w-full
                                                                          bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                                                                          hover:border-gray-400 focus:outline-none focus:border-green-600
                                                                          rounded-lg px-4 py-2 transition-all duration-200 flex text-center">
                <!-- <p class="text-gray-700 max-w-2xl mx-auto mb-8 text-sm md:text-base">Become part of the solution for a
                        sustainable Nepal. Whether through volunteering, donations, or partnerships, your support makes a
                        difference.</p>
    for this also -->

                <textarea name="st18" value="{{ $about->st18 }}" placeholder="Enter your call-to-action message" class="text-gray-700 max-w-2xl mx-auto mb-8 text-sm md:text-base w-full
                         bg-white bg-opacity-100 border-2 border-dashed border-gray-300
                         hover:border-gray-400 focus:outline-none focus:border-green-600
                         rounded-lg px-4 py-2 transition-all duration-200 flex text-center" rows="3">{{ $about->st18 }}</textarea>
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

        <div class="flex justify-end">
            <button type="submit"
                class="mt-3 px-4 py-2 bg-blue-500 hover:bg-blue-600 active:bg-blue-700 text-white rounded transition-colors duration-200">
                Save
            </button>
        </div>


    </form>

@endsection