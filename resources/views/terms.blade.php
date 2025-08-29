@extends("master")
@section('title', 'Terms & Conditions')
@section('content')

    <!-- Hero Section -->
    <section class="min-h-[300px] md:min-h-[400px] bg-cover bg-center py-12 md:py-20 text-white relative flex items-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80');">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">{{ $terms->h1 }}</h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto">{{ $terms->sh1 }}</p>
            <div class="mt-6">
                <a href="#terms-content" class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md font-medium transition-colors">
                    Read Terms
                </a>
            </div>
        </div>
    </section>

    <!-- Terms Content Section -->
    <section id="terms-content" class="gsap py-12 md:py-16 bg-white">
        <div class="container max-w-4xl mx-auto px-4">
            <div class="bg-gray-50 p-6 md:p-8 rounded-xl border border-green-100 shadow-sm">
                <!-- Introduction -->
                <div class="mb-8">
                    <h2 class="text-xl md:text-2xl font-bold mb-4 text-gray-800">{{ $terms->h2 }}</h2>
                    <p class="text-gray-700 text-sm">
                        {{ $terms->sh2 }}
                    </p>
                </div>

                <!-- User Responsibilities -->
                <div class="mb-8">
                    <h2 class="text-xl md:text-2xl font-bold mb-4 text-gray-800">{{ $terms->h3 }}</h2>
                    
                    <div class="space-y-4">
                        <!-- Responsibility 1 -->
                        <div class="flex items-start">
                            <div class="bg-green-600 text-white p-1 rounded-full mr-3 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">{{ $terms->sh3 }}</h3>
                                <p class="text-gray-600 text-sm">{{ $terms->sh4 }}</p>
                            </div>
                        </div>

                        <!-- Responsibility 2 -->
                        <div class="flex items-start">
                            <div class="bg-green-600 text-white p-1 rounded-full mr-3 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">{{ $terms->sh5 }}</h3>
                                <p class="text-gray-600 text-sm">{{ $terms->sh6 }}</p>
                            </div>
                        </div>

                        <!-- Responsibility 3 -->
                        <div class="flex items-start">
                            <div class="bg-green-600 text-white p-1 rounded-full mr-3 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">{{ $terms->sh7 }}</h3>
                                <p class="text-gray-600 text-sm">{{ $terms->sh8 }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Intellectual Property -->
                <div class="mb-8">
                    <h2 class="text-xl md:text-2xl font-bold mb-4 text-gray-800">{{ $terms->h4 }}</h2>
                    <p class="text-gray-700 text-sm">
                        {{ $terms->sh9 }}
                    </p>
                </div>

                <!-- Donations & Payments -->
                <div class="mb-8">
                    <h2 class="text-xl md:text-2xl font-bold mb-4 text-gray-800">{{ $terms->h5 }}</h2>
                    
                    <div class="space-y-3">
                        <div class="flex">
                            <span class="text-green-600 mr-2">•</span>
                            <p class="text-gray-700">{{ $terms->sh10 }}</p>
                        </div>

                        <div class="flex">
                            <span class="text-green-600 mr-2">•</span>
                            <p class="text-gray-700">{{ $terms->sh11 }}</p>
                        </div>

                        <div class="flex">
                            <span class="text-green-600 mr-2">•</span>
                            <p class="text-gray-700">{{ $terms->sh12 }}</p>
                        </div>

                        <div class="flex">
                            <span class="text-green-600 mr-2">•</span>
                            <p class="text-gray-700">{{ $terms->sh13 }}</p>
                        </div>
                    </div>
                </div>

                <!-- Event Participation -->
                <div class="mb-8">
                    <h2 class="text-xl md:text-2xl font-bold mb-4 text-gray-800">{{ $terms->h6 }}</h2>
                    
                    <div class="space-y-4">
                        <!-- Event 1 -->
                        <div class="flex items-start">
                            <div class="bg-green-600 text-white p-1 rounded-full mr-3 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">{{ $terms->sh14 }}</h3>
                                <p class="text-gray-600">{{ $terms->sh15 }}</p>
                            </div>
                        </div>

                        <!-- Event 2 -->
                        <div class="flex items-start">
                            <div class="bg-green-600 text-white p-1 rounded-full mr-3 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">{{ $terms->sh16 }}</h3>
                                <p class="text-gray-600">{{ $terms->sh17 }}</p>
                            </div>
                        </div>

                        <!-- Event 3 -->
                        <div class="flex items-start">
                            <div class="bg-green-600 text-white p-1 rounded-full mr-3 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">{{ $terms->sh18 }}</h3>
                                <p class="text-gray-600">{{ $terms->sh19 }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Limitation of Liability -->
                <div class="mb-8">
                    <h2 class="text-xl md:text-2xl font-bold mb-4 text-gray-800">{{ $terms->h7 }}</h2>
                    <p class="text-gray-700 text-sm">
                        {{ $terms->sh20 }}
                    </p>
                </div>

                <!-- Governing Law -->
                <div class="mb-8">
                    <h2 class="text-xl md:text-2xl font-bold mb-4 text-gray-800">{{ $terms->h8 }}</h2>
                    <p class="text-gray-700 text-sm">
                        {{ $terms->sh21 }}
                    </p>
                </div>

                <!-- Changes to Terms -->
                <div class="mb-8">
                    <h2 class="text-xl md:text-2xl font-bold mb-4 text-gray-800">{{ $terms->h9 }}</h2>
                    <p class="text-gray-700 text-sm">
                        {{ $terms->sh22 }}
                    </p>
                </div>

                <!-- Contact Us -->
                <div>
                    <h2 class="text-xl md:text-2xl font-bold mb-4 text-gray-800">{{ $terms->h10 }}</h2>
                    <p class="text-gray-700 mb-2">
                        {{ $terms->sh23 }}
                    </p>
                    <div class="text-gray-800 space-y-2">
                        <div>
                            <strong>Email:</strong> {{ $terms->sh24 }}
                        </div>
                        <div>
                            <strong>Phone:</strong> {{ $terms->sh25 }}
                        </div>
                        <div>
                            <strong>Address:</strong> {{ $terms->sh26 }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Last Updated -->
    <div class="bg-gray-50 py-6">
        <div class="container max-w-4xl mx-auto px-4 text-center text-gray-500 text-sm">
            <p>{{ $terms->sh27 }}</p>
        </div>
    </div>

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