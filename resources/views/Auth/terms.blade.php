@extends('Auth.dashboard')
@section('title', 'Terms Page Editor')
@section('content')

    @if(session('success'))
        <div class="text-green-600">{{ session('success') }}</div>
    @endif

    <form action="{{ route('terms-uploading.get') }}" method="POST">
        @csrf
   

        <!-- Hero Section -->
        <section class="min-h-[300px] md:min-h-[400px] bg-cover bg-center py-12 md:py-20 text-white relative flex items-center"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80');">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="container mx-auto px-4 text-center relative z-10">
                <input type="text" name="h1" value="{{ old('h1', $terms->h1) }}" 
                    placeholder="Enter Terms Heading"
                    class="text-3xl md:text-5xl font-bold mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">
                
                <textarea name="sh1" placeholder="Enter terms description"
                    class="text-lg md:text-xl max-w-3xl mx-auto w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">{{ old('sh1', $terms->sh1) }}</textarea>
                
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
                        <input type="text" name="h2" value="{{ old('h2', $terms->h2) }}" 
                            placeholder="Enter Section Heading"
                            class="text-xl md:text-2xl font-bold mb-4 text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                        
                        <textarea name="sh2" placeholder="Enter section content"
                            class="text-gray-700 text-sm w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('sh2', $terms->sh2) }}</textarea>
                    </div>

                    <!-- User Responsibilities -->
                    <div class="mb-8">
                        <input type="text" name="h3" value="{{ old('h3', $terms->h3) }}" 
                            placeholder="Enter Section Heading"
                            class="text-xl md:text-2xl font-bold mb-4 text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                        
                        <div class="space-y-4">
                            <!-- Responsibility 1 -->
                            <div class="flex items-start">
                                <div class="bg-green-600 text-white p-1 rounded-full mr-3 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <input type="text" name="sh3" value="{{ old('sh3', $terms->sh3) }}" 
                                        placeholder="Enter subheading"
                                        class="font-medium text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                                    
                                    <textarea name="sh4" placeholder="Enter description"
                                        class="text-gray-600 text-sm w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg mt-1">{{ old('sh4', $terms->sh4) }}</textarea>
                                </div>
                            </div>

                            <!-- Responsibility 2 -->
                            <div class="flex items-start">
                                <div class="bg-green-600 text-white p-1 rounded-full mr-3 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <input type="text" name="sh5" value="{{ old('sh5', $terms->sh5) }}" 
                                        placeholder="Enter subheading"
                                        class="font-medium text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                                    
                                    <textarea name="sh6" placeholder="Enter description"
                                        class="text-gray-600 text-sm w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg mt-1">{{ old('sh6', $terms->sh6) }}</textarea>
                                </div>
                            </div>

                            <!-- Responsibility 3 -->
                            <div class="flex items-start">
                                <div class="bg-green-600 text-white p-1 rounded-full mr-3 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <input type="text" name="sh7" value="{{ old('sh7', $terms->sh7) }}" 
                                        placeholder="Enter subheading"
                                        class="font-medium text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                                    
                                    <textarea name="sh8" placeholder="Enter description"
                                        class="text-gray-600 text-sm w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg mt-1">{{ old('sh8', $terms->sh8) }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Intellectual Property -->
                    <div class="mb-8">
                        <input type="text" name="h4" value="{{ old('h4', $terms->h4) }}" 
                            placeholder="Enter Section Heading"
                            class="text-xl md:text-2xl font-bold mb-4 text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                        
                        <textarea name="sh9" placeholder="Enter section content"
                            class="text-gray-700 text-sm w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('sh9', $terms->sh9) }}</textarea>
                    </div>

                    <!-- Donations & Payments -->
                    <div class="mb-8">
                        <input type="text" name="h5" value="{{ old('h5', $terms->h5) }}" 
                            placeholder="Enter Section Heading"
                            class="text-xl md:text-2xl font-bold mb-4 text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                        
                        <div class="space-y-3">
                            <!-- List Item 1 -->
                            <div class="flex items-center">
                                <span class="text-green-600 mr-2">•</span>
                                <input type="text" name="sh10" value="{{ old('sh10', $terms->sh10) }}" 
                                    placeholder="Enter list item"
                                    class="text-gray-700 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                            </div>

                            <!-- List Item 2 -->
                            <div class="flex items-center">
                                <span class="text-green-600 mr-2">•</span>
                                <input type="text" name="sh11" value="{{ old('sh11', $terms->sh11) }}" 
                                    placeholder="Enter list item"
                                    class="text-gray-700 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                            </div>

                            <!-- List Item 3 -->
                            <div class="flex items-center">
                                <span class="text-green-600 mr-2">•</span>
                                <input type="text" name="sh12" value="{{ old('sh12', $terms->sh12) }}" 
                                    placeholder="Enter list item"
                                    class="text-gray-700 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                            </div>

                            <!-- List Item 4 -->
                            <div class="flex items-center">
                                <span class="text-green-600 mr-2">•</span>
                                <input type="text" name="sh13" value="{{ old('sh13', $terms->sh13) }}" 
                                    placeholder="Enter list item"
                                    class="text-gray-700 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                            </div>
                        </div>
                    </div>

                    <!-- Event Participation -->
                    <div class="mb-8">
                        <input type="text" name="h6" value="{{ old('h6', $terms->h6) }}" 
                            placeholder="Enter Section Heading"
                            class="text-xl md:text-2xl font-bold mb-4 text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                        
                        <div class="space-y-4">
                            <!-- Event 1 -->
                            <div class="flex items-start">
                                <div class="bg-green-600 text-white p-1 rounded-full mr-3 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <input type="text" name="sh14" value="{{ old('sh14', $terms->sh14) }}" 
                                        placeholder="Enter subheading"
                                        class="font-medium text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                                    
                                    <textarea name="sh15" placeholder="Enter description"
                                        class="text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg mt-1">{{ old('sh15', $terms->sh15) }}</textarea>
                                </div>
                            </div>

                            <!-- Event 2 -->
                            <div class="flex items-start">
                                <div class="bg-green-600 text-white p-1 rounded-full mr-3 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <input type="text" name="sh16" value="{{ old('sh16', $terms->sh16) }}" 
                                        placeholder="Enter subheading"
                                        class="font-medium text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                                    
                                    <textarea name="sh17" placeholder="Enter description"
                                        class="text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg mt-1">{{ old('sh17', $terms->sh17) }}</textarea>
                                </div>
                            </div>

                            <!-- Event 3 -->
                            <div class="flex items-start">
                                <div class="bg-green-600 text-white p-1 rounded-full mr-3 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <input type="text" name="sh18" value="{{ old('sh18', $terms->sh18) }}" 
                                        placeholder="Enter subheading"
                                        class="font-medium text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                                    
                                    <textarea name="sh19" placeholder="Enter description"
                                        class="text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg mt-1">{{ old('sh19', $terms->sh19) }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Limitation of Liability -->
                    <div class="mb-8">
                        <input type="text" name="h7" value="{{ old('h7', $terms->h7) }}" 
                            placeholder="Enter Section Heading"
                            class="text-xl md:text-2xl font-bold mb-4 text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                        
                        <textarea name="sh20" placeholder="Enter section content"
                            class="text-gray-700 text-sm w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('sh20', $terms->sh20) }}</textarea>
                    </div>

                    <!-- Governing Law -->
                    <div class="mb-8">
                        <input type="text" name="h8" value="{{ old('h8', $terms->h8) }}" 
                            placeholder="Enter Section Heading"
                            class="text-xl md:text-2xl font-bold mb-4 text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                        
                        <textarea name="sh21" placeholder="Enter section content"
                            class="text-gray-700 text-sm w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('sh21', $terms->sh21) }}</textarea>
                    </div>

                    <!-- Changes to Terms -->
                    <div class="mb-8">
                        <input type="text" name="h9" value="{{ old('h9', $terms->h9) }}" 
                            placeholder="Enter Section Heading"
                            class="text-xl md:text-2xl font-bold mb-4 text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                        
                        <textarea name="sh22" placeholder="Enter section content"
                            class="text-gray-700 text-sm w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('sh22', $terms->sh22) }}</textarea>
                    </div>

                    <!-- Contact Us -->
                    <div>
                        <input type="text" name="h10" value="{{ old('h10', $terms->h10) }}" 
                            placeholder="Enter Section Heading"
                            class="text-xl md:text-2xl font-bold mb-4 text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                        
                        <textarea name="sh23" placeholder="Enter introduction text"
                            class="text-gray-700 mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('sh23', $terms->sh23) }}</textarea>
                        
                        <div class="text-gray-800 space-y-2">
                            <div>
                                <strong>Email:</strong> 
                                <input type="text" name="sh24" value="{{ old('sh24', $terms->sh24) }}" 
                                    placeholder="Enter email"
                                    class="bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">
                            </div>
                            <div>
                                <strong>Phone:</strong> 
                                <input type="text" name="sh25" value="{{ old('sh25', $terms->sh25) }}" 
                                    placeholder="Enter phone"
                                    class="bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">
                            </div>
                            <div>
                                <strong>Address:</strong> 
                                <input type="text" name="sh26" value="{{ old('sh26', $terms->sh26) }}" 
                                    placeholder="Enter address"
                                    class="bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Last Updated -->
        <div class="bg-gray-50 py-6">
            <div class="container max-w-4xl mx-auto px-4 text-center">
                <input type="text" name="sh27" value="{{ old('sh27', $terms->sh27) }}" 
                    placeholder="Last Updated: June 15, 2023"
                    class="text-gray-500 text-sm bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
            </div>
        </div>

        <div class="flex justify-end mt-4">
            <button type="submit" 
                class="px-4 py-2 bg-blue-500 hover:bg-blue-600 active:bg-blue-700 text-white rounded transition-colors duration-200">
                Save Changes
            </button>
        </div>
    </form>

    <style>
        /* List textarea styling */
        .list-textarea {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3E%3Ccircle cx='4' cy='4' r='1.5' fill='%234b5563'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: 0.75rem 0.75rem;
            line-height: 1.75rem;
            padding-left: 2rem;
            white-space: pre-wrap;
        }

        .list-textarea:focus {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3E%3Ccircle cx='4' cy='4' r='1.5' fill='%233b82f6'/%3E%3C/svg%3E");
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
@endsection