@extends("master")
@section('title', 'Annual Report')
@section('content')

    <!-- Hero Section -->
    <section id="download-report" class="min-h-[300px] md:min-h-[400px] bg-cover bg-center py-12 md:py-20 text-white relative flex items-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1466611653911-95081537e5b7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80');">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">{{ $annual->h1 ?? 'Annual Report 2023' }}</h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto">{{ $annual->sh1 ?? 'Celebrating our environmental achievements and impact' }}</p>
            <div class="mt-6">
                <a href="#download-report" class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md font-medium transition-colors">
                    Download Report
                </a>
            </div>
        </div>
    </section>

    <!-- Report Highlights -->
    <section id="report-highlight" class="py-12 md:py-16 bg-white gsap">
        <div class="container max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">{{ $annual->h2 ?? 'Year in Review' }}</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">{{ $annual->sh3 ?? 'Our collective efforts in 2023 have made a significant difference in environmental conservation across Nepal.' }}</p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 gsap-card">
                <div class="bg-green-50 p-6 rounded-lg text-center border border-green-100">
                    <div class="text-4xl font-bold text-green-600 mb-2">{{ $annual->sh4 ?? '1,250+' }}</div>
                    <h3 class="text-lg font-medium text-gray-800">{{ $annual->sh5 ?? 'Trees Planted' }}</h3>
                    <p class="text-gray-600 mt-2">{{ $annual->sh6 ?? 'Across 15 communities in Nepal' }}</p>
                </div>
                
                <div class="bg-green-50 p-6 rounded-lg text-center border border-green-100">
                    <div class="text-4xl font-bold text-green-600 mb-2">{{ $annual->sh7 ?? '85' }}</div>
                    <h3 class="text-lg font-medium text-gray-800">{{ $annual->sh8 ?? 'Cleanup Events' }}</h3>
                    <p class="text-gray-600 mt-2">{{ $annual->sh9 ?? 'Removing 12 tons of waste' }}</p>
                </div>
                
                <div class="bg-green-50 p-6 rounded-lg text-center border border-green-100">
                    <div class="text-4xl font-bold text-green-600 mb-2">{{ $annual->sh10 ?? '3,500+' }}</div>
                    <h3 class="text-lg font-medium text-gray-800">{{ $annual->sh11 ?? 'People Engaged' }}</h3>
                    <p class="text-gray-600 mt-2">{{ $annual->sh12 ?? 'Through education programs' }}</p>
                </div>
            </div>

      

            <!-- Key Projects -->
            <div class="mb-12 gsap">
                <h2 class="text-xl md:text-2xl font-bold mb-6 text-center text-gray-800">{{ $annual->h4 ?? 'Key Projects' }}</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 gsap-card">
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <h3 class="text-lg font-bold text-green-600 mb-2">{{ $annual->h5 ?? 'Urban Greening Initiative' }}</h3>
                        <p class="text-gray-600 mb-4">{{ $annual->sh13 ?? 'Planted 500 native trees in Kathmandu Valley, creating urban green spaces and improving air quality.' }}</p>
                        <div class="text-sm text-gray-500">{{ $annual->sh14_status1 ?? 'Completed: June 2023' }}</div>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <h3 class="text-lg font-bold text-green-600 mb-2">{{ $annual->h6 ?? 'River Cleanup Campaign' }}</h3>
                        <p class="text-gray-600 mb-4">{{ $annual->sh14 ?? 'Removed 5 tons of waste from Bagmati River with 200+ volunteers participating monthly.' }}</p>
                        <div class="text-sm text-gray-500">{{ $annual->sh14_status2 ?? 'Ongoing' }}</div>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <h3 class="text-lg font-bold text-green-600 mb-2">{{ $annual->h7 ?? 'School Eco-Clubs' }}</h3>
                        <p class="text-gray-600 mb-4">{{ $annual->sh15 ?? 'Established environmental clubs in 25 schools, reaching 1,200 students with sustainability education.' }}</p>
                        <div class="text-sm text-gray-500">{{ $annual->sh14_status3 ?? 'Launched: March 2023' }}</div>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <h3 class="text-lg font-bold text-green-600 mb-2">{{ $annual->h8 ?? 'Solar Power Pilot' }}</h3>
                        <p class="text-gray-600 mb-4">{{ $annual->sh16 ?? 'Installed solar panels in 3 rural communities, providing clean energy to 150 households.' }}</p>
                        <div class="text-sm text-gray-500">{{ $annual->sh14_status4 ?? 'Completed: November 2023' }}</div>
                    </div>
                </div>
            </div>

            <!-- Testimonials -->
            <div class="bg-green-50 py-12 md:py-8 rounded-xl px-2 gsap">
                <h2 class="text-xl md:text-2xl font-bold mb-6 text-center text-gray-800">Voices of Impact</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 gsap-card">
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <p class="text-gray-700 italic mb-4">"Volunteering with Vision Green changed my perspective on waste management. Seeing our community come together to clean our river was inspiring."</p>
                        <div class="flex items-center">
                            <div class="bg-green-100 p-2 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-800">Anita Shrestha</h4>
                                <p class="text-sm text-gray-600">Volunteer, Kathmandu</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <p class="text-gray-700 italic mb-4">"Our school's eco-club has empowered students to take action. We've reduced our waste by 40% and started a composting program."</p>
                        <div class="flex items-center">
                            <div class="bg-green-100 p-2 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-800">Rajiv Gurung</h4>
                                <p class="text-sm text-gray-600">Teacher, Pokhara</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Download Section -->
            <div id="download-report" class="text-center bg-gray-50 p-8 rounded-xl border border-gray-200">
                <h2 class="text-xl md:text-2xl font-bold mb-4 text-gray-800">{{ $annual->h9 ?? 'Full Annual Report' }}</h2>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto">{{ $annual->sh44 ?? 'Download our complete 2023 Annual Report for detailed financial statements, project outcomes, and future plans.' }}</p>
                <div class="flex flex-col sm:flex-row mt-8 md:mt-10 justify-center gap-4">
                    <a href="#" class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-md font-medium transition-colors">
                        Download PDF (English)
                    </a>
                    <a href="#" class="inline-block bg-white hover:bg-gray-100 text-gray-800 border border-gray-300 px-6 py-3 rounded-md font-medium transition-colors">
                        Download PDF (Nepali)
                    </a>
    
            </div>
        </div>
    </section>

    <!-- Looking Ahead -->
    <section class="py-8 md:py-16 bg-green-600 text-white gsap">
        <div class="container max-w-4xl mx-auto px-2 mt-8 md:mt-10 text-center">
            <h2 class="text-2xl md:text-3xl font-bold mb-6">{{ $annual->h10 ?? 'Looking Ahead to 2024' }}</h2>
            <p class="text-sm md:text-lg mb-8">{{ $annual->sh2 ?? 'Join us as we expand our initiatives to reach more communities and create greater environmental impact across Nepal.' }}</p>
            <a href="/get-involved" class="inline-block bg-white hover:bg-gray-100 text-green-600 px-6 py-2 rounded-md font-medium transition-colors">
                Join Our Mission
            </a>
        </div>
    </section>

    <!-- Additional Styles -->
    <style>
        .stat-card {
            transition: transform 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
    </style>
@endsection