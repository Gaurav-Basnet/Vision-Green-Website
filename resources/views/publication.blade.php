@extends("master")
@section('title', 'Publications')
@section('content')

    <!-- Hero Section -->
    <section id="reports" class="min-h-[300px] md:min-h-[500px] bg-cover bg-center py-12 md:py-24 text-white relative flex items-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1457369804613-52c61a468e7d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80');">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">{{ $homedata->t1 }}</h1>
    <p class="text-lg md:text-xl max-w-2xl mx-auto">{{ $homedata->st1 }}</p>
            <div class="mt-6">
                <a href="#reports"
                    class="gsap inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md font-medium transition-colors mr-3">
                    Research Reports
                </a>
                <a href="#resources"
                    class=" gsap inline-block bg-white hover:bg-gray-100 text-green-700 px-6 py-2 rounded-md font-medium transition-colors">
                    Educational Resources
                </a>
            </div>
        </div>
    </section>

    <!-- Publications Intro -->
    <section id="policy-briefs" class="gsap  py-8 md:py-12 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-green-800">{{ $homedata->t2 }}</h2>
        <p class="text-gray-600 mt-2 max-w-3xl mx-auto">{{ $homedata->st2 }}</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="gsap-card bg-green-50 p-6 rounded-lg border-l-4 border-green-600">
                    <div class="text-green-600 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">{{ $homedata->t3 }}</h3>
                    <p class="text-gray-700 text-sm">{{ $homedata->st3 }}</p>
                </div>
                
                <div class="gsap-card bg-green-50 p-6 rounded-lg border-l-4 border-green-600">
                    <div class="text-green-600 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">{{ $homedata->t4}}</h3>
                    <p class="text-gray-700 text-sm">{{ $homedata->st4 }}</p>
                </div>
                
                <div class="gsap-card bg-green-50 p-6 rounded-lg border-l-4 border-green-600">
                    <div class="text-green-600 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">{{ $homedata->t5 }}</h3>
                    <p class="text-gray-700 text-sm">{{ $homedata->st5 }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Reports -->
    <section id="publicaton-archive" class="gsap  py-8 md:py-12 bg-gray-50">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-green-800">Featured Research Reports</h2>
                <p class="text-gray-600 mt-2">Our latest and most impactful publications</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Report 1 -->
                <div class="gsap-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1469827160215-9d29e96e72f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1772&q=80" 
                             alt="Himalayan Biodiversity Report" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded">2023 Report</span>
                            <span class="text-xs text-gray-500">June 15, 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Himalayan Biodiversity Assessment 2023</h3>
                        <p class="text-gray-600 text-sm mb-4">Comprehensive analysis of biodiversity trends across the Nepalese Himalayas with conservation recommendations.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-green-600 hover:text-green-700 text-sm font-medium flex items-center">
                                Download PDF
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                            </a>
                            <span class="text-xs text-gray-500">48 pages, 12MB</span>
                        </div>
                    </div>
                </div>
                
                <!-- Report 2 -->
                <div class="gsap-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" 
                             alt="Climate Change Report" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded">2022 Report</span>
                            <span class="text-xs text-gray-500">March 8, 2022</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Climate Change Impacts on Nepalese Agriculture</h3>
                        <p class="text-gray-600 text-sm mb-4">Case studies from 15 districts documenting climate impacts and community adaptation strategies.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-green-600 hover:text-green-700 text-sm font-medium flex items-center">
                                Download PDF
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                            </a>
                            <span class="text-xs text-gray-500">64 pages, 15MB</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-10">
                <a href="/reports"
                    class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium px-6 py-2.5 rounded-lg transition-colors">
                    View All Research Reports
                </a>
            </div>
        </div>
    </section>

    <!-- Policy Briefs -->
    <section id="policy-briefs" class="gsap py-8 md:py-12 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-green-800">{{ $homedata->t6 }}</h2>
                <p class="text-gray-600 mt-2">{{ $homedata->st6 }}</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Brief 1 -->
                <div class="gsap-card bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                    <div class="p-5">
                        <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded">Policy Brief</span>
                        <h3 class="text-lg font-bold text-gray-800 mt-3 mb-2"> {{ $homedata->t7 }}</h3>
                        <p class="text-gray-600 text-sm mb-4">{{ $homedata->st7 }}</p>
                        <a href="#" class="text-green-600 hover:text-green-700 text-sm font-medium flex items-center">
                            Read Brief
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Brief 2 -->
                <div class="gsap-card bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                    <div class="p-5">
                        <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded">Policy Brief</span>
                        <h3 class="text-lg font-bold text-gray-800 mt-3 mb-2">{{ $homedata->t8 }}</h3>
                        <p class="text-gray-600 text-sm mb-4">{{ $homedata->st8 }}</p>
                        <a href="#" class="text-green-600 hover:text-green-700 text-sm font-medium flex items-center">
                            Read Brief
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Brief 3 -->
                <div class="gsap-card bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                    <div class="p-5">
                        <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded">Policy Brief</span>
                        <h3 class="text-lg font-bold text-gray-800 mt-3 mb-2">{{ $homedata->t9 }}</h3>
                        <p class="text-gray-600 text-sm mb-4">{{ $homedata->st9 }}</p>
                        <a href="#" class="text-green-600 hover:text-green-700 text-sm font-medium flex items-center">
                            Read Brief
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Educational Resources -->
    <section id="resources" class="gsap  py-8 md:py-12 bg-gray-50">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-green-800">Educational Resources</h2>
                <p class="text-gray-600 mt-2">Materials for schools and community education</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Resource 1 -->
                <div class="gsap-card bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                    <div class="h-40 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" 
                             alt="School Guide" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 mb-1">Environmental Education Guide</h3>
                        <p class="text-gray-600 text-xs mb-3">For grades 6-10 teachers</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-green-600 hover:text-green-700 text-xs font-medium">Download</a>
                            <span class="text-xs text-gray-500">PDF, 8MB</span>
                        </div>
                    </div>
                </div>
                
                <!-- Resource 2 -->
                <div class="gsap-card bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                    <div class="h-40 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" 
                             alt="Community Toolkit" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 mb-1">Community Conservation Toolkit</h3>
                        <p class="text-gray-600 text-xs mb-3">Local action guide</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-green-600 hover:text-green-700 text-xs font-medium">Download</a>
                            <span class="text-xs text-gray-500">PDF, 5MB</span>
                        </div>
                    </div>
                </div>
                
                <!-- Resource 3 -->
                <div class="gsap-card bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                    <div class="h-40 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" 
                             alt="Species Guide" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 mb-1">Himalayan Wildlife Guide</h3>
                        <p class="text-gray-600 text-xs mb-3">Common species identification</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-green-600 hover:text-green-700 text-xs font-medium">Download</a>
                            <span class="text-xs text-gray-500">PDF, 12MB</span>
                        </div>
                    </div>
                </div>
                
                <!-- Resource 4 -->
                <div class="gsap-card bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                    <div class="h-40 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" 
                             alt="Activity Book" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 mb-1">Children's Activity Book</h3>
                        <p class="text-gray-600 text-xs mb-3">Ages 6-12</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-green-600 hover:text-green-700 text-xs font-medium">Download</a>
                            <span class="text-xs text-gray-500">PDF, 3MB</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-10">
                <a href="/resources"
                    class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium px-6 py-2.5 rounded-lg transition-colors">
                    View All Educational Resources
                </a>
            </div>
        </div>
    </section>

    <!-- Publication Archive -->
    <section id="publication-achive" class="gsap  py-8 md:py-12 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-green-800">Publication Archive</h2>
                <p class="text-gray-600 mt-2">Browse our complete collection of publications</p>
            </div>
            
            <div class="bg-gray-50 rounded-lg p-6">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                    <div class="mb-4 md:mb-0">
                        <h3 class="text-lg font-semibold text-gray-800">Filter Publications</h3>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
                        <select class="bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-md text-sm focus:outline-none focus:ring-1 focus:ring-green-500">
                            <option>All Types</option>
                            <option>Research Reports</option>
                            <option>Policy Briefs</option>
                            <option>Educational Materials</option>
                        </select>
                        <select class="bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-md text-sm focus:outline-none focus:ring-1 focus:ring-green-500">
                            <option>All Years</option>
                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                            <option>2020</option>
                        </select>
                        <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm">
                            Apply Filters
                        </button>
                    </div>
                </div>
                
                <!-- Publication List -->
                <div id="featured-reports" class="divide-y divide-gray-200">
                    <!-- Publication Item 1 -->
                    <div class="gsap-card py-4 hover:bg-white transition-colors duration-150">
                        <div class="flex flex-col md:flex-row md:items-center justify-between">
                            <div class="mb-2 md:mb-0">
                                <h4 class="font-medium text-gray-800">Climate Resilience in Mountain Communities</h4>
                                <p class="text-sm text-gray-600">Case studies from Dolpa and Mustang districts</p>
                            </div>
                            <div class="flex items-center space-x-3">
                                <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">Research Report</span>
                                <span class="text-xs text-gray-500">2023</span>
                                <a href="#" class="text-green-600 hover:text-green-700 text-sm font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Publication Item 2 -->
                    <div class="gsap-card py-4 hover:bg-white transition-colors duration-150">
                        <div class="flex flex-col md:flex-row md:items-center justify-between">
                            <div class="mb-2 md:mb-0">
                                <h4 class="font-medium text-gray-800">Sustainable Tourism Guidelines</h4>
                                <p class="text-sm text-gray-600">Best practices for trekking companies and lodges</p>
                            </div>
                            <div class="flex items-center space-x-3">
                                <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded">Policy Brief</span>
                                <span class="text-xs text-gray-500">2022</span>
                                <a href="#" class="text-green-600 hover:text-green-700 text-sm font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Publication Item 3 -->
                    <div class="gsap-card py-4 hover:bg-white transition-colors duration-150">
                        <div class="flex flex-col md:flex-row md:items-center justify-between">
                            <div class="mb-2 md:mb-0">
                                <h4 class="font-medium text-gray-800">Waste Management Handbook</h4>
                                <p class="text-sm text-gray-600">For municipalities and community organizations</p>
                            </div>
                            <div class="flex items-center space-x-3">
                                <span class="text-xs bg-purple-100 text-purple-800 px-2 py-1 rounded">Educational</span>
                                <span class="text-xs text-gray-500">2022</span>
                                <a href="#" class="text-green-600 hover:text-green-700 text-sm font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Publication Item 4 -->
                    <div class="gsap-card py-4 hover:bg-white transition-colors duration-150">
                        <div class="flex flex-col md:flex-row md:items-center justify-between">
                            <div class="mb-2 md:mb-0">
                                <h4 class="font-medium text-gray-800">Red Panda Conservation Status</h4>
                                <p class="text-sm text-gray-600">Population trends and habitat assessment</p>
                            </div>
                            <div class="flex items-center space-x-3">
                                <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">Research Report</span>
                                <span class="text-xs text-gray-500">2021</span>
                                <a href="#" class="text-green-600 hover:text-green-700 text-sm font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-6 flex justify-center">
                    <nav class="inline-flex rounded-md shadow">
                        <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">Previous</a>
                        <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-green-600 hover:bg-gray-50">1</a>
                        <a href="#" class="px-3 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">2</a>
                        <a href="#" class="px-3 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">3</a>
                        <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">Next</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="cta-section" class=" py-8 md:py-12 bg-green-700 text-white gsap">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl md:text-3xl font-bold mb-4">{{ $homedata->t9 }}</h2>
            <p class="max-w-2xl mx-auto mb-8">{{ $homedata->st9 }}</p>
            <div class="max-w-md mx-auto flex flex-col sm:flex-row gap-3">
                <input type="email" placeholder="Your email address" class="flex-grow px-4 py-2 rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-green-300">
                <button class="bg-white text-green-700 hover:bg-gray-100 px-6 py-2 rounded-md font-medium transition-colors">
                    Subscribe
                </button>
            </div>
        </div>
    </section>

@endsection