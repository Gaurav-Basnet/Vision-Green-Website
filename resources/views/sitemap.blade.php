@extends("master")
@section('title', 'Sitemap')
@section('content')

    <!-- Hero Section -->
    <section class="min-h-[300px] md:min-h-[400px] bg-cover bg-center py-12 md:py-20 text-white relative flex items-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1774&q=80');">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">Sitemap</h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto">Navigate our website easily</p>
            <div class="mt-6">
                <a href="#sitemap-content" class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md font-medium transition-colors">
                    Explore Pages
                </a>
            </div>
        </div>
    </section>

    <!-- Sitemap Content Section -->
    <section id="sitemap-content" class="py-12 md:py-16 bg-white">
        <div class="container max-w-6xl mx-auto px-4">
            <div class="bg-gray-50 p-6 md:p-8 rounded-xl border border-green-100 shadow-sm">
                <!-- Main Pages -->
                <div class="mb-12">
                    <h2 class="text-xl md:text-2xl font-bold mb-6 text-gray-800 border-b border-green-200 pb-3">Main Pages</h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/" class="hover:text-green-600 transition-colors">Home</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">Our main landing page</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/about" class="hover:text-green-600 transition-colors">About Us</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">Our mission, vision and history</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/contact" class="hover:text-green-600 transition-colors">Contact Us</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">Get in touch with our team</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/donate" class="hover:text-green-600 transition-colors">Donate</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">Support our environmental causes</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/projects" class="hover:text-green-600 transition-colors">Our Projects</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">Current environmental initiatives</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/volunteer" class="hover:text-green-600 transition-colors">Volunteer</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">Join our team of changemakers</p>
                        </div>
                    </div>
                </div>

                <!-- Legal Pages -->
                <div class="mb-12">
                    <h2 class="text-xl md:text-2xl font-bold mb-6 text-gray-800 border-b border-green-200 pb-3">Legal Pages</h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/privacy" class="hover:text-green-600 transition-colors">Privacy Policy</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">How we handle your data</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/terms" class="hover:text-green-600 transition-colors">Terms & Conditions</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">Website usage terms</p>
                        </div>
                    </div>
                </div>

                <!-- Programs Section -->
                <div class="mb-12">
                    <h2 class="text-xl md:text-2xl font-bold mb-6 text-gray-800 border-b border-green-200 pb-3">Our Programs</h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/programs/reforestation" class="hover:text-green-600 transition-colors">Reforestation</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">Tree planting across Nepal</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.663 17h4.673L12 3 9.663 17zm1.316-12.999L8.332 18H3l7-14h2l7 14h-5.332l-2.651-13.999h-1.338z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/programs/education" class="hover:text-green-600 transition-colors">Environmental Education</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">School and community programs</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/programs/waste-management" class="hover:text-green-600 transition-colors">Waste Management</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">Community recycling initiatives</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/programs/clean-energy" class="hover:text-green-600 transition-colors">Clean Energy</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">Renewable energy solutions</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6 3a1 1 0 011-1h.01a1 1 0 010 2H7a1 1 0 01-1-1zm2 3a1 1 0 00-2 0v1a2 2 0 00-2 2v1a2 2 0 00-2 2v.683a3.7 3.7 0 011.055.485 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0A3.7 3.7 0 0118 12.683V12a2 2 0 00-2-2V9a2 2 0 00-2-2V6a1 1 0 10-2 0v1h-1V6a1 1 0 10-2 0v1H8V6zm10 8.868a3.704 3.704 0 01-4.055-.036 1.704 1.704 0 00-1.89 0 3.704 3.704 0 01-4.11 0 1.704 1.704 0 00-1.89 0A3.704 3.704 0 012 14.868V17a1 1 0 001 1h14a1 1 0 001-1v-2.132zM9 3a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H13a1 1 0 01-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/programs/community" class="hover:text-green-600 transition-colors">Community Engagement</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">Local environmental projects</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/programs/volunteer" class="hover:text-green-600 transition-colors">Volunteer Programs</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">Get involved with our work</p>
                        </div>
                    </div>
                </div>

                <!-- Resources Section -->
                <div>
                    <h2 class="text-xl md:text-2xl font-bold mb-6 text-gray-800 border-b border-green-200 pb-3">Resources</h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/resources/blog" class="hover:text-green-600 transition-colors">Blog</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">Environmental news and updates</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/resources/reports" class="hover:text-green-600 transition-colors">Annual Reports</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">Our impact and financial reports</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/resources/faq" class="hover:text-green-600 transition-colors">FAQs</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">Frequently asked questions</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/resources/guides" class="hover:text-green-600 transition-colors">Guides</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">Environmental action guides</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/resources/gallery" class="hover:text-green-600 transition-colors">Photo Gallery</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">Images from our projects</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-100 p-2 rounded-full mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="/sitemap" class="hover:text-green-600 transition-colors">Sitemap</a>
                                </h3>
                            </div>
                            <p class="text-gray-600 text-sm ml-12">All pages on our website</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Additional Styles -->
    <style>
        /* Animations */
        .animate-fadeIn {
            animation: fadeIn 1s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
@endsection