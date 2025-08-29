@extends("master")
@section('title', 'Career Opportunities')
@section('content')

<!-- Hero Section -->
<section class="min-h-[300px] md:min-h-[500px] bg-cover bg-center py-12 md:py-24 text-white relative flex items-center"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1769&q=80');">
    <div class="absolute inset-0 bg-black/30"></div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-5xl font-bold mb-4">Join Our Team</h1>
        <p class="text-lg md:text-xl max-w-2xl mx-auto">Help build a sustainable future for Nepal through meaningful work</p>
    </div>
</section>

<!-- Current Openings Section - Mobile Optimized -->
<section class="gsap py-8 md:py-12 bg-gray-50">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="text-center mb-8 md:mb-12">
            <h2 class="text-xl md:text-3xl font-bold text-green-800">Current Job Openings</h2>
            <p class="text-gray-600 mt-1 md:mt-2 text-sm md:text-base">Explore opportunities to grow your career with us</p>
        </div>

        <!-- Job Listing 1 - Mobile Optimized -->
        <div id="job-1" class="gsap-card bg-white rounded-lg md:rounded-xl shadow-sm md:shadow-md overflow-hidden mb-6 md:mb-8 hover:shadow-md transition-shadow">
            <div class="md:flex">
                <!-- Icon Section - Smaller on mobile -->
                <div class="md:w-1/4 bg-green-50 p-4 md:p-6 flex items-center justify-center">
                    <div class="text-center">
                        <div class="bg-green-100 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center mx-auto mb-2 md:mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <span class="text-xs md:text-base font-medium text-gray-500">Full-time</span>
                    </div>
                </div>
                
                <!-- Content Section - Adjusted spacing for mobile -->
                <div id="job-2" class="md:w-3/4 p-4 md:p-6">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div id="job-locataions" class="mb-2 md:mb-0">
                            <h3 class="text-lg md:text-xl font-bold text-gray-800">Conservation Project Manager</h3>
                            <div  class="flex flex-wrap gap-1 md:gap-2 mt-2">
                                <span class="bg-green-100 text-green-800 text-[10px] md:text-sm px-2 py-0.5 rounded">Kathmandu</span>
                                <span class="bg-blue-100 text-blue-800 text-[10px] md:text-sm px-2 py-0.5 rounded">Management</span>
                                <span class="bg-yellow-100 text-yellow-800 text-[10px] md:text-sm px-2 py-0.5 rounded">5+ yrs</span>
                            </div>
                        </div>
                        <span class="text-xs md:text-sm text-gray-500 mb-2 md:mb-0">Posted: Jun 10, 2023</span>
                    </div>
                    
                    <p class="text-gray-600 mb-3 text-xs md:text-base leading-relaxed">Lead our flagship conservation projects in the Himalayan region...</p>
                    
                    <div class="flex flex-col xs:flex-row justify-between items-start xs:items-center gap-2">
                        <div>
                            <span class="text-xs md:text-base font-medium text-gray-700">Deadline: <span class="text-red-600">Jul 5, 2023</span></span>
                        </div>
                        <a href="#" class="text-green-600 hover:text-green-800 font-medium text-xs md:text-base inline-flex items-center">
                            Details & Apply
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 md:h-4 md:w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Job Listing 2 - Mobile Optimized -->
        <div id="job-types" class="gsap-card bg-white rounded-lg md:rounded-xl shadow-sm md:shadow-md overflow-hidden mb-6 md:mb-8 hover:shadow-md transition-shadow">
            <div class="md:flex">
                <div class="md:w-1/4 bg-green-50 p-4 md:p-6 flex items-center justify-center">
                    <div class="text-center">
                        <div class="bg-green-100 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center mx-auto mb-2 md:mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <span class="text-xs md:text-base font-medium text-gray-500">Contract</span>
                    </div>
                </div>
                <div class="md:w-3/4 p-4 md:p-6">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div class="mb-2 md:mb-0">
                            <h3 class="text-lg md:text-xl font-bold text-gray-800">Environmental Research Officer</h3>
                            <div class="flex flex-wrap gap-1 md:gap-2 mt-2">
                                <span class="bg-green-100 text-green-800 text-[10px] md:text-sm px-2 py-0.5 rounded">Pokhara</span>
                                <span class="bg-purple-100 text-purple-800 text-[10px] md:text-sm px-2 py-0.5 rounded">Research</span>
                                <span class="bg-yellow-100 text-yellow-800 text-[10px] md:text-sm px-2 py-0.5 rounded">2+ yrs</span>
                            </div>
                        </div>
                        <span class="text-xs md:text-sm text-gray-500 mb-2 md:mb-0">Posted: Jun 5, 2023</span>
                    </div>
                    <p class="text-gray-600 mb-3 text-xs md:text-base leading-relaxed">Conduct field research on biodiversity and climate change impacts...</p>
                    <div class="flex flex-col xs:flex-row justify-between items-start xs:items-center gap-2">
                        <div>
                            <span class="text-xs md:text-base font-medium text-gray-700">Deadline: <span class="text-red-600">Jun 30, 2023</span></span>
                        </div>
                        <a href="#" class="text-green-600 hover:text-green-800 font-medium text-xs md:text-base inline-flex items-center">
                            Details & Apply
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 md:h-4 md:w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- No Openings Message -->
        <div class="hidden bg-white rounded-lg md:rounded-xl shadow-sm md:shadow-md overflow-hidden p-6 md:p-8 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 md:h-12 md:w-12 mx-auto text-gray-400 mb-3 md:mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="text-lg md:text-xl font-bold text-gray-700 mb-1 md:mb-2">No Current Openings</h3>
            <p class="text-gray-600 mb-3 md:mb-4 text-xs md:text-sm">We currently don't have any open positions.</p>
            <a href="/about#team" class="inline-block bg-green-600 hover:bg-green-700 text-white px-4 py-1.5 md:px-6 md:py-2 rounded-md font-medium transition-colors text-xs md:text-sm">
                Learn About Our Team
            </a>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-6 md:mt-10">
            <a href="#"
                class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium text-xs md:text-sm px-4 py-2 md:px-5 md:py-2.5 rounded-lg transition-colors shadow-sm md:shadow-md hover:shadow-md">
                View All Projects
            </a>
        </div>
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
            <div class="gsap-card bg-green-50 rounded-lg md:rounded-xl p-4 md:p-6 text-center hover:shadow-sm md:hover:shadow-md transition-shadow">
                <div class="bg-green-100 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-base md:text-lg font-semibold mb-1 md:mb-2 text-gray-800">Meaningful Work</h3>
                <p class="text-gray-600 text-xs md:text-base leading-tight md:leading-normal">Contribute to environmental conservation in Nepal.</p>
            </div>
            
            <!-- Benefit 2 - Mobile Optimized -->
            <div class="gsap-card bg-green-50 rounded-lg md:rounded-xl p-4 md:p-6 text-center hover:shadow-sm md:hover:shadow-md transition-shadow">
                <div class="bg-green-100 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="text-base md:text-lg font-semibold mb-1 md:mb-2 text-gray-800">Professional Growth</h3>
                <p class="text-gray-600 text-xs md:text-base leading-tight md:leading-normal">Training and skill development opportunities.</p>
            </div>
            
            <!-- Benefit 3 - Mobile Optimized -->
            <div class="gsap-card bg-green-50 rounded-lg md:rounded-xl p-4 md:p-6 text-center hover:shadow-sm md:hover:shadow-md transition-shadow">
                <div class="bg-green-100 w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-base md:text-lg font-semibold mb-1 md:mb-2 text-gray-800">Supportive Team</h3>
                <p class="text-gray-600 text-xs md:text-base leading-tight md:leading-normal">Collaborate with passionate professionals.</p>
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
                        <div class="md:hidden w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center mr-3 flex-shrink-0">
                            <span class="font-bold text-sm">1</span>
                        </div>
                        <div>
                            <h3 class="text-lg md:text-xl font-bold text-green-700 ">1. Application</h3>
                            <p class="text-gray-700 text-xs md:text-base">Submit CV and cover letter</p>
                        </div>
                    </div>
                </div>
                <div class="hidden md:flex w-10 h-10 md:w-12 md:h-12 rounded-full bg-green-600 text-white items-center justify-center mx-3 md:mx-4 flex-shrink-0">
                    <span class="font-bold text-sm md:text-base">1</span>
                </div>
                <div class="w-full md:w-1/2 md:pl-12"></div>
            </div>

            <!-- Step 2 - Mobile Optimized -->
            <div class="gsap-card flex flex-col items-center mb-6 md:mb-12 md:flex-row  pl-3">
                <div class="w-full md:w-1/2 md:pr-12"></div>
                <div class="hidden md:flex w-10 h-10 md:w-12 md:h-12 rounded-full bg-green-600 text-white items-center justify-center mx-3 md:mx-4 flex-shrink-0">
                    <span class="font-bold text-sm md:text-base">2</span>
                </div>
                <div class="w-full md:w-1/2 md:pl-12 mb-3 md:mb-0">
                    <div class="flex items-center md:block">
                        <div class="md:hidden w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center mr-3 flex-shrink-0">
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
                        <div class="md:hidden w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center mr-3 flex-shrink-0">
                            <span class="font-bold text-sm">3</span>
                        </div>
                        <div>
                            <h3 class="text-lg md:text-xl font-bold text-green-700">3. Interviews</h3>
                            <p class="text-gray-700 text-xs md:text-base">1-2 rounds with team</p>
                        </div>
                    </div>
                </div>
                <div class="hidden md:flex w-10 h-10 md:w-12 md:h-12 rounded-full bg-green-600 text-white items-center justify-center mx-3 md:mx-4 flex-shrink-0">
                    <span class="font-bold text-sm md:text-base">3</span>
                </div>
                <div class="w-full md:w-1/2 md:pl-12"></div>
            </div>

            <!-- Step 4 - Mobile Optimized -->
            <div class="gsap-card flex flex-col items-center md:flex-row  pl-3">
                <div class="w-full md:w-1/2 md:pr-12"></div>
                <div class="hidden md:flex w-10 h-10 md:w-12 md:h-12 rounded-full bg-green-600 text-white items-center justify-center mx-3 md:mx-4 flex-shrink-0">
                    <span class="font-bold text-sm md:text-base">4</span>
                </div>
                <div class="w-full md:w-1/2 md:pl-12 mb-3 md:mb-0">
                    <div class="flex items-center md:block">
                        <div class="md:hidden w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center mr-3 flex-shrink-0">
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
<section  id="general-application" class="gsap py-12 bg-white">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-3xl mx-auto bg-green-50 rounded-xl p-8 md:p-10">
            <h2 class="text-2xl md:text-3xl font-bold text-green-800 mb-4">Don't See Your Dream Job?</h2>
            <p class="text-gray-700 mb-6 text-sm">We're always looking for passionate individuals to join our mission. Submit a general application and we'll contact you when a suitable position opens.</p>
            <a href="#" class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-md font-medium transition-colors">
                Submit General Application
            </a>
        </div>
    </div>
</section>

<!-- Equal Opportunity Statement -->
<section id="equal-opportunity" class="gsap py-8 bg-gray-100">
    <div class="container mx-auto px-4 max-w-4xl text-center">
        <p class="text-gray-600 text-sm md:text-base">
            <strong>Green Vision is an equal opportunity employer.</strong> We celebrate diversity and are committed to creating an inclusive environment for all employees. We do not discriminate on the basis of race, religion, color, national origin, gender, sexual orientation, age, marital status, or disability status.
        </p>
    </div>
</section>
    
@endsection