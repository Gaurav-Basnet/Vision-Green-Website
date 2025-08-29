@extends('Auth.dashboard')
@section('title', 'Impacts Page Editor')
@section('content')

    @if(session('success'))
        <div class="text-green-600">{{ session('success') }}</div>
    @endif

    <form action="{{ route('impacts-uploading.update') }}" method="POST">
        @csrf
  

        <!-- Hero Section -->
        <section class="min-h-[200px] md:min-h-[500px] bg-cover bg-center py-8 md:py-24 text-white relative flex items-center"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1466611653911-95081537e5b7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80');">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="container mx-auto px-4 text-center relative z-10">
                <input type="text" name="h1" value="{{ old('h1', $impacts->h1) }}" 
                    placeholder="Enter Impact Heading"
                    class="text-2xl md:text-5xl font-bold mb-2 md:mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">
                
                <textarea name="sh1" placeholder="Enter impact description"
                    class="text-base md:text-xl max-w-2xl mx-auto w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">{{ old('sh1', $impacts->sh1) }}</textarea>
                
                <div class="mt-4 md:mt-6">
                    <a href="#key-metrics" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 md:px-6 md:py-3 rounded-md text-sm md:text-base font-medium transition-colors">
                        View Results
                    </a>
                </div>
            </div>
        </section>

        <!-- Key Metrics -->
        <section id="key-metrics" class="gsap py-12 md:py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <input type="text" name="h2" value="{{ old('h2', $impacts->h2) }}" 
                        placeholder="Enter Section Heading"
                        class="text-2xl md:text-3xl font-bold text-gray-800 mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">
                    
                    <div class="w-20 h-1 bg-green-600 mx-auto"></div>
                    
                    <textarea name="sh2" placeholder="Enter section description"
                        class="text-gray-600 mt-4 max-w-2xl mx-auto w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">{{ old('sh2', $impacts->sh2) }}</textarea>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8">
                    <!-- Metric 1 -->
                    <div class="bg-green-50 p-4 md:p-6 rounded-xl text-center">
                        <input type="text" name="sh3" value="{{ old('sh3', $impacts->sh3) }}" 
                            placeholder="Enter metric value"
                            class="text-2xl md:text-4xl font-bold text-green-700 mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">
                        
                        <input type="text" name="sh4" value="{{ old('sh4', $impacts->sh4) }}" 
                            placeholder="Enter metric label"
                            class="text-sm md:text-base text-gray-700 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">
                        
                        <div class="mt-2">
                            <svg class="w-8 h-8 mx-auto text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Metric 2 -->
                    <div class="bg-green-50 p-4 md:p-6 rounded-xl text-center">
                        <input type="text" name="sh5" value="{{ old('sh5', $impacts->sh5) }}" 
                            placeholder="Enter metric value"
                            class="text-2xl md:text-4xl font-bold text-green-700 mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">
                        
                        <input type="text" name="sh6" value="{{ old('sh6', $impacts->sh6) }}" 
                            placeholder="Enter metric label"
                            class="text-sm md:text-base text-gray-700 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">
                        
                        <div class="mt-2">
                            <svg class="w-8 h-8 mx-auto text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Metric 3 -->
                    <div class="bg-green-50 p-4 md:p-6 rounded-xl text-center">
                        <input type="text" name="sh7" value="{{ old('sh7', $impacts->sh7) }}" 
                            placeholder="Enter metric value"
                            class="text-2xl md:text-4xl font-bold text-green-700 mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">
                        
                        <input type="text" name="sh8" value="{{ old('sh8', $impacts->sh8) }}" 
                            placeholder="Enter metric label"
                            class="text-sm md:text-base text-gray-700 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">
                        
                        <div class="mt-2">
                            <svg class="w-8 h-8 mx-auto text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Metric 4 -->
                    <div class="bg-green-50 p-4 md:p-6 rounded-xl text-center">
                        <input type="text" name="sh9" value="{{ old('sh9', $impacts->sh9) }}" 
                            placeholder="Enter metric value"
                            class="text-2xl md:text-4xl font-bold text-green-700 mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">
                        
                        <input type="text" name="sh10" value="{{ old('sh10', $impacts->sh10) }}" 
                            placeholder="Enter metric label"
                            class="text-sm md:text-base text-gray-700 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">
                        
                        <div class="mt-2">
                            <svg class="w-8 h-8 mx-auto text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
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
                    <input type="text" name="h3" value="{{ old('h3', $impacts->h3) }}" 
                        placeholder="Enter Section Heading"
                        class="text-2xl md:text-3xl font-bold text-gray-800 mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">
                    
                    <div class="w-20 h-1 bg-green-600 mx-auto"></div>
                    
                    <textarea name="sh11" placeholder="Enter section description"
                        class="text-gray-600 mt-4 max-w-2xl mx-auto w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">{{ old('sh11', $impacts->sh11) }}</textarea>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center gsap-card">
                    <div>
                        <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1771&q=80" 
                             alt="Nepal map with project locations" 
                             class="rounded-xl shadow-md w-full h-auto">
                    </div>
                    <div>
                        <div class="space-y-6">
                            <!-- Region 1 -->
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-10 w-10 rounded-md bg-green-600 text-white">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4 w-full">
                                    <input type="text" name="sh12" value="{{ old('sh12', $impacts->sh12) }}" 
                                        placeholder="Enter region name"
                                        class="text-lg font-medium text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                                    
                                    <textarea name="sh13" placeholder="Enter region description"
                                        class="mt-1 text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('sh13', $impacts->sh13) }}</textarea>
                                </div>
                            </div>
                            
                            <!-- Region 2 -->
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-10 w-10 rounded-md bg-green-600 text-white">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4 w-full">
                                    <input type="text" name="sh14" value="{{ old('sh14', $impacts->sh14) }}" 
                                        placeholder="Enter region name"
                                        class="text-lg font-medium text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                                    
                                    <textarea name="sh15" placeholder="Enter region description"
                                        class="mt-1 text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('sh15', $impacts->sh15) }}</textarea>
                                </div>
                            </div>
                            
                            <!-- Region 3 -->
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-10 w-10 rounded-md bg-green-600 text-white">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4 w-full">
                                    <input type="text" name="sh16" value="{{ old('sh16', $impacts->sh16) }}" 
                                        placeholder="Enter region name"
                                        class="text-lg font-medium text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                                    
                                    <textarea name="sh17" placeholder="Enter region description"
                                        class="mt-1 text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('sh17', $impacts->sh17) }}</textarea>
                                </div>
                            </div>
                            
                            <!-- Region 4 -->
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-10 w-10 rounded-md bg-green-600 text-white">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4 w-full">
                                    <input type="text" name="sh18" value="{{ old('sh18', $impacts->sh18) }}" 
                                        placeholder="Enter region name"
                                        class="text-lg font-medium text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                                    
                                    <textarea name="sh19" placeholder="Enter region description"
                                        class="mt-1 text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('sh19', $impacts->sh19) }}</textarea>
                                </div>
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
                    <input type="text" name="h5" value="{{ old('h5', $impacts->h5) }}" 
                        placeholder="Enter CTA heading"
                        class="text-2xl md:text-3xl font-bold mb-4 w-full bg-transparent border-2 border-dashed border-gray-300 focus:outline-none focus:border-blue-300 p-2 rounded-lg text-center">
                    
                    <textarea name="sh28" placeholder="Enter CTA description"
                        class="text-sm md:text-xl mb-8 w-full bg-transparent border-2 border-dashed border-gray-300 focus:outline-none focus:border-blue-300 p-2 rounded-lg text-center">{{ old('sh28', $impacts->sh28) }}</textarea>
                    
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="#" class="bg-white hover:bg-gray-100 text-green-800 font-medium px-4 py-2 md:px-6 md:py-3 rounded-lg transition-colors text-sm md:text-base">
                            Donate Now
                        </a>
                     
                         <a href="#" class="bg-transparent border border-white md:border-2 hover:bg-white/10 font-medium px-4 py-2 md:px-6 md:py-3 rounded-lg transition-colors text-sm md:text-base">
                        Volunteer
                    </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="flex justify-end mt-4">
            <button type="submit" 
                class="px-4 py-2 bg-blue-500 hover:bg-blue-600 active:bg-blue-700 text-white rounded transition-colors duration-200">
                Save Changes
            </button>
        </div>
    </form>

    <style>
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
@endsection