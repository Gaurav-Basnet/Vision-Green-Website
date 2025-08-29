@extends("master")
@section('title', 'Newsletters')
@section('content')

    <!-- Hero Section -->
    <section class="min-h-[300px] md:min-h-[500px] bg-cover bg-center py-12 md:py-24 text-white relative flex items-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1772&q=80');">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 md:mb-6">Our Newsletters</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto mb-6 md:mb-8">Stay informed with our latest updates, stories, and
                sustainability insights</p>
            <div class="mt-4 md:mt-6">
                <a href="#subscribe"
                    class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 md:px-8 md:py-4 rounded-lg text-base md:text-lg font-medium transition-colors duration-300 transform hover:-translate-y-1">
                    Subscribe Now
                </a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12 md:py-16">
        <!-- Latest Newsletter -->
        @if($latest)
            <div
                class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden md:flex mb-16 transition-all duration-300 hover:shadow-xl">
                <div class="md:w-2/5 h-64 md:h-auto">
                    <img src="{{ asset('storage/' . $latest->image) }}" alt="{{ $latest->title }}"
                        class="w-full h-full object-cover">
                </div>
                <div class="md:w-3/5 p-6 md:p-8">
                    <div class="flex items-center text-sm text-green-600 font-medium mb-3">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        {{ \Carbon\Carbon::parse($latest->published_at)->format('F Y') }}
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4 leading-tight">{{ $latest->title }}</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">{{ $latest->subtitle }}</p>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('newsletters.show', $latest->id) }}"
                            class="flex-1 text-center bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-300 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2 15.5v-11a2 2 0 012-2h16a2 2 0 012 2v11a2 2 0 01-2 2H4a2 2 0 01-2-2z"></path>
                            </svg>
                            Read Online
                        </a>
                        @if($latest->pdf)
                            <a href="{{ asset('storage/' . $latest->pdf) }}" target="_blank"
                                class="flex-1 text-center bg-white hover:bg-gray-50 border border-gray-300 text-gray-700 font-medium py-3 px-4 rounded-lg transition-colors duration-300 flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                                Download PDF
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endif

        <!-- Archive Section -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 pb-2 border-b border-gray-200">Newsletter Archive</h2>

            @forelse($archive as $year => $newsletters)

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($newsletters as $newsletter)
                            <div
                                class="bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                                <div class="flex items-start">
                                    <div class="bg-green-100 text-green-800 rounded-lg p-3 mr-4 flex-shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-grow">
                                        <h4 class="font-semibold text-gray-800 mb-1 text-lg">
                                            {{ \Carbon\Carbon::parse($newsletter->published_at)->format('F Y') }}
                                        </h4>
                                        <p class="text-gray-600 mb-3 text-sm">{{ $newsletter->subtitle }}</p>
                                        <div class="flex space-x-4">
                                            <a href="{{ route('newsletters.show', $newsletter->id) }}"
                                                class="text-green-600 hover:text-green-700 font-medium text-sm flex items-center">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M2 15.5v-11a2 2 0 012-2h16a2 2 0 012 2v11a2 2 0 01-2 2H4a2 2 0 01-2-2z">
                                                    </path>
                                                </svg>
                                                Read
                                            </a>
                                            @if($newsletter->pdf)
                                                <a href="{{ asset('storage/' . $newsletter->pdf) }}" target="_blank"
                                                    class="text-green-600 hover:text-green-700 font-medium text-sm flex items-center">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                        </path>
                                                    </svg>
                                                    Download
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @empty
            <div class="text-center py-12 bg-gray-50 rounded-xl">
                <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                </svg>
                <p class="text-gray-600 text-lg">No past newsletters available.</p>
            </div>
        @endforelse
    </div>

    </div>

    <!-- Newsletter Benefits -->
    <section id="newsletter-benefits" class="py-16 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Why Subscribe?</h2>
                <div class="w-24 h-1 bg-green-600 mx-auto mb-4"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto text-lg">What you'll receive in our monthly newsletter</p>
            </div>

            <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 md:gap-10">
                <!-- Benefit 1 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm text-center transition-all duration-300 hover:shadow-md hover:transform hover:-translate-y-1">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Exclusive Updates</h3>
                    <p class="text-gray-600 leading-relaxed">Be the first to know about our projects, events, and impact
                        stories</p>
                </div>

                <!-- Benefit 2 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm text-center transition-all duration-300 hover:shadow-md hover:transform hover:-translate-y-1">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Expert Insights</h3>
                    <p class="text-gray-600 leading-relaxed">Learn from our team's sustainability expertise and research</p>
                </div>

                <!-- Benefit 3 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm text-center transition-all duration-300 hover:shadow-md hover:transform hover:-translate-y-1">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Community Spotlights</h3>
                    <p class="text-gray-600 leading-relaxed">Discover inspiring stories from the communities we serve</p>
                </div>
            </div>
        </div>
    </section>

<!-- Subscribe Form -->
<section id="subscribe" class="py-10 md:py-10 bg-green-700 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-3">
                <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Stay Connected</h2>
                <div class="w-24 h-1 bg-green-400 mx-auto mb-4 rounded-full"></div>
                <p class="text-green-100 max-w-2xl mx-auto text-lg">Subscribe to receive our monthly newsletter directly to your inbox</p>
            </div>

            <!-- Form -->
            <form action="{{ route('subscribe.store') }}" method="POST" class="bg-white rounded-2xl shadow-xl p-8 md:p-10 space-y-6">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                    <input type="email" name="email" id="email" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent text-gray-700 transition-all duration-300 hover:shadow-sm">
                </div>

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                    <input type="text" name="name" id="name"
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent text-gray-700 transition-all duration-300 hover:shadow-sm">
                </div>

                <!-- Interests -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-4">Interests (Select all that apply)</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <input type="checkbox" name="interests[]" value="Environmental Conservation"
                                id="interest-environment" class="h-5 w-5 text-green-600 focus:ring-green-500 border-gray-300 rounded transition duration-200">
                            <label for="interest-environment" class="ml-3 text-gray-700 text-sm font-medium">Environmental Conservation</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="interests[]" value="Renewable Energy" id="interest-energy"
                                class="h-5 w-5 text-green-600 focus:ring-green-500 border-gray-300 rounded transition duration-200">
                            <label for="interest-energy" class="ml-3 text-gray-700 text-sm font-medium">Renewable Energy</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="interests[]" value="Education Programs" id="interest-education"
                                class="h-5 w-5 text-green-600 focus:ring-green-500 border-gray-300 rounded transition duration-200">
                            <label for="interest-education" class="ml-3 text-gray-700 text-sm font-medium">Education Programs</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="interests[]" value="Events & Volunteering" id="interest-events"
                                class="h-5 w-5 text-green-600 focus:ring-green-500 border-gray-300 rounded transition duration-200">
                            <label for="interest-events" class="ml-3 text-gray-700 text-sm font-medium">Events & Volunteering</label>
                        </div>
                    </div>
                </div>

                <!-- Consent -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="consent" type="checkbox" name="consent" required
                            class="h-5 w-5 text-green-600 focus:ring-green-500 border-gray-300 rounded transition duration-200">
                    </div>
                    <label for="consent" class="ml-3 text-gray-700 text-sm font-medium">I agree to receive emails from Sustainable Nepal (you can unsubscribe anytime)</label>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center gap-2 transform hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    Subscribe
                </button>

                <p class="text-xs text-gray-500 mt-2 text-center">We respect your privacy. Unsubscribe at any time.</p>
            </form>
        </div>
    </div>
</section>



@endsection