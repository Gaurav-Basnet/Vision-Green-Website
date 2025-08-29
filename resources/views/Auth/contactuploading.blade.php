@extends('Auth.dashboard')
@section('title', 'Contact Page Editor')
@section('content')

    @if(session('success'))
        <div class="text-green-600">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact-uploading.update') }}" method="POST">
              @csrf

        <!-- Hero Section -->
        <section
            class="min-h-[200px] md:min-h-[500px] bg-cover bg-center py-8 md:py-24 text-white relative flex items-center"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1483728642387-6c3bdd6c93e5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1776&q=80');">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="container mx-auto px-4 text-center relative z-10">
                <input type="text" name="h1" value="{{ old('h1', $contact->h1) }}" placeholder="Main Heading"
                    class="text-2xl md:text-5xl font-bold mb-2 md:mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">

                <textarea name="sh1" placeholder="Subheading Text"
                    class="text-base md:text-xl max-w-2xl mx-auto w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('sh1', $contact->sh1) }}</textarea>

                <div class="mt-4 md:mt-6 flex flex-col sm:flex-row justify-center gap-2 md:gap-4">
                    <a href="#contact-form"
                        class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 md:px-6 md:py-3 rounded-md text-sm md:text-base font-medium transition-colors">
                        Contact Us
                    </a>
                    <a href="#faq"
                        class="bg-white hover:bg-gray-100 text-green-700 px-4 py-2 md:px-6 md:py-3 rounded-md text-sm md:text-base font-medium transition-colors">
                        View FAQs
                    </a>
                </div>
            </div>
        </section>

        <!-- Contact Info Cards -->
        <section class="py-8 md:py-12 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                    <!-- Phone Card -->
                    <div
                        class="bg-white p-4 md:p-6 rounded-lg shadow-sm md:shadow-md hover:shadow-md md:hover:shadow-lg transition-shadow flex flex-row items-start space-x-4 md:flex-col md:items-start md:space-x-0 md:space-y-4">
                        <!-- Icon -->
                        <div class="bg-green-100 w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <!-- Content -->
                        <div>
                            <input type="text" name="sh2" value="{{ old('sh2', $contact->sh2) }}" placeholder="Card Title"
                                class="text-lg md:text-xl font-semibold mb-1 md:mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">

                            <input type="text" name="sh3" value="{{ old('sh3', $contact->sh3) }}" placeholder="Phone Line 1"
                                class="text-sm md:text-base text-gray-600 mb-1 md:mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">

                            <input type="text" name="sh4" value="{{ old('sh4', $contact->sh4) }}" placeholder="Phone Line 2"
                                class="text-sm md:text-base text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">

                            <input type="text" name="sh5" value="{{ old('sh5', $contact->sh5) }}" placeholder="Hours Info"
                                class="text-xs md:text-sm text-gray-500 mt-2 md:mt-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div
                        class="bg-white p-4 md:p-6 rounded-lg shadow-sm md:shadow-md hover:shadow-md md:hover:shadow-lg transition-shadow flex flex-row items-start space-x-4 md:flex-col md:items-start md:space-x-0 md:space-y-4">
                        <div class="bg-green-100 w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <input type="text" name="sh6" value="{{ old('sh6', $contact->sh6) }}" placeholder="Card Title"
                                class="text-lg md:text-xl font-semibold mb-1 md:mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">

                            <input type="text" name="sh7" value="{{ old('sh7', $contact->sh7) }}" placeholder="Email Line 1"
                                class="text-sm md:text-base text-gray-600 mb-1 md:mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">

                            <input type="text" name="sh8" value="{{ old('sh8', $contact->sh8) }}" placeholder="Email Line 2"
                                class="text-sm md:text-base text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">

                            <input type="text" name="sh9" value="{{ old('sh9', $contact->sh9) }}"
                                placeholder="Response Time"
                                class="text-xs md:text-sm text-gray-500 mt-2 md:mt-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">
                        </div>
                    </div>

                    <!-- Address Card -->
                    <div
                        class="bg-white p-4 md:p-6 rounded-lg shadow-sm md:shadow-md hover:shadow-md md:hover:shadow-lg transition-shadow flex flex-row items-start space-x-4 md:flex-col md:items-start md:space-x-0 md:space-y-4">
                        <div class="bg-green-100 w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <input type="text" name="sh10" value="{{ old('sh10', $contact->sh10) }}"
                                placeholder="Card Title"
                                class="text-lg md:text-xl font-semibold mb-1 md:mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">

                            <input type="text" name="sh11" value="{{ old('sh11', $contact->sh11) }}"
                                placeholder="Address Line 1"
                                class="text-sm md:text-base text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">

                            <input type="text" name="sh12" value="{{ old('sh12', $contact->sh12) }}"
                                placeholder="Address Line 2"
                                class="text-sm md:text-base text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">

                            <input type="text" name="sh13" value="{{ old('sh13', $contact->sh13) }}"
                                placeholder="Address Line 3"
                                class="text-sm md:text-base text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">

                            <input type="text" name="sh14" value="{{ old('sh14', $contact->sh14) }}"
                                placeholder="Visit Info"
                                class="text-xs md:text-sm text-gray-500 mt-2 md:mt-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Map Section -->
        <section class="bg-white">
            <div class="container mx-auto px-4 py-8 md:py-12">
                <div class="rounded-lg md:rounded-xl overflow-hidden shadow-md md:shadow-lg border border-gray-200">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.456205029937!2d85.3204703150621!3d27.70520238279396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190a74aa1f23%3A0x74ebef82ad0e5c15!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1620000000000!5m2!1sen!2snp"
                        width="100%" height="300" class="h-[250px] md:h-[450px]" style="border:0;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
                <div class="mt-4 md:mt-6 grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">
                    <div>
                        <input type="text" name="h5" value="{{ old('h5', $contact->h5) }}"
                            placeholder="Office Hours Heading"
                            class="text-base md:text-xl font-semibold mb-2 md:mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">

                        <ul class="space-y-1 md:space-y-2 text-base md:text-lg">
                            <li class="flex justify-between">
                                <input type="text" name="sh30" value="{{ old('sh30', $contact->sh30) }}"
                                    placeholder="Day Range"
                                    class="text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">

                                <input type="text" name="sh31" value="{{ old('sh31', $contact->sh31) }}" placeholder="Hours"
                                    class="font-medium w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">
                            </li>
                            <li class="flex justify-between">
                                <input type="text" name="sh32" value="{{ old('sh32', $contact->sh32) }}"
                                    placeholder="Day Range"
                                    class="text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">

                                <input type="text" name="sh33" value="{{ old('sh33', $contact->sh33) }}" placeholder="Hours"
                                    class="font-medium w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">
                            </li>
                            <li class="flex justify-between">
                                <input type="text" name="sh34" value="{{ old('sh34', $contact->sh34) }}"
                                    placeholder="Day Range"
                                    class="text-gray-600 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">

                                <input type="text" name="sh35" value="{{ old('sh35', $contact->sh35) }}" placeholder="Hours"
                                    class="font-medium w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">
                            </li>
                        </ul>
                    </div>
                    <div>
                        <input type="text" name="h6" value="{{ old('h6', $contact->h6) }}"
                            placeholder="Getting Here Heading"
                            class="text-lg md:text-xl font-semibold mb-2 md:mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">

                        <textarea name="sh36" placeholder="Getting Here Description"
                            class="text-gray-600 text-sm md:text-base mb-2 md:mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">{{ old('sh36', $contact->sh36) }}</textarea>

                        <div class="bg-green-50 p-3 md:p-4 rounded-lg">
                            <input type="text" name="sh37" value="{{ old('sh37', $contact->sh37) }}"
                                placeholder="Transport Options Heading"
                                class="font-medium text-green-700 text-base md:text-lg mb-1 md:mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">

                            <ul class="text-sm md:text-lg text-gray-700 space-y-1">
                                <li>
                                    <input type="text" name="sh38" value="{{ old('sh38', $contact->sh38) }}"
                                        placeholder="Transport Option 1"
                                        class="w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">
                                </li>
                                <li>
                                    <input type="text" name="sh39" value="{{ old('sh39', $contact->sh39) }}"
                                        placeholder="Transport Option 2"
                                        class="w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">
                                </li>
                                <li>
                                    <input type="text" name="sh40" value="{{ old('sh40', $contact->sh40) }}"
                                        placeholder="Transport Option 3"
                                        class="w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


      <!-- FAQ Section -->
        <section id="faq" class="py-12 md:py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-12">
                        <input type="text" name="h7" value="{{ old('h7', $contact->h7) }}" placeholder="FAQ Section Heading"
                            class="text-2xl md:text-3xl font-bold text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg text-center">

                        <input type="text" name="sh41" value="{{ old('sh41', $contact->sh41) }}"
                            placeholder="FAQ Section Subheading"
                            class="text-gray-600 mt-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-1 rounded text-center">
                    </div>

                    <!-- FAQ Items (non-editable) -->
                    <div class="space-y-4">
                        <!-- FAQ Item 1 -->
                        <div x-data="{ open: false }"
                            class="border border-gray-200 rounded-lg overflow-hidden transition-all duration-200">
                            <button @click="open = !open"
                                class="flex justify-between items-center w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 focus:outline-none">
                                <span class="font-medium text-gray-800 md:text-xl text-sm">How can I volunteer with your
                                    organization?</span>
                                <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </button>
                            <div x-show="open" x-collapse x-transition
                                class="px-6 py-4 bg-white text-gray-600 border-t border-gray-200">
                                <p class="md:text-base text-sm">We welcome volunteers in various capacities across our
                                    programs.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div x-data="{ open: false }"
                            class="border border-gray-200 rounded-lg overflow-hidden transition-all duration-200">
                            <button @click="open = !open"
                                class="flex justify-between items-center w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 focus:outline-none">
                                <span class="font-medium text-gray-800 md:text-xl text-sm">Where does my donation go?</span>
                                <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </button>
                            <div x-show="open" x-collapse x-transition
                                class="px-6 py-4 bg-white text-gray-600 border-t border-gray-200">
                                <p class="md:text-base text-sm">Your donations directly support our field projects and
                                    community programs.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div x-data="{ open: false }"
                            class="border border-gray-200 rounded-lg overflow-hidden transition-all duration-200">
                            <button @click="open = !open"
                                class="flex justify-between items-center w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 focus:outline-none">
                                <span class="font-medium text-gray-800 md:text-xl text-sm">How can my organization partner
                                    with you?</span>
                                <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </button>
                            <div x-show="open" x-collapse x-transition
                                class="px-6 py-4 bg-white text-gray-600 border-t border-gray-200">
                                <p class="md:text-base text-sm">We collaborate with various organizations through different
                                    partnership models.</p>
                            </div>
                        </div>
                    </div>

                    <!-- View All Button (non-editable) -->
                    <div class="text-center mt-6 md:mt-10">
                        <p class="text-gray-600 py-3">Didn't find what you were looking for?</p>
                        <a href="#"
                            class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium text-xs md:text-sm px-4 py-2 md:px-5 md:py-2.5 rounded-lg transition-colors shadow-sm md:shadow-md hover:shadow-md">
                            Contact Us Directly
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-12 md:py-16 bg-green-800 text-white">
            <div class="container mx-auto px-4 text-center">
                <div class="max-w-3xl mx-auto">
                    <input type="text" name="h8" value="{{ old('h8', $contact->h8) }}" placeholder="CTA Heading"
                        class="text-2xl md:text-3xl font-bold mb-4 w-full bg-transparent border-2 border-dashed border-white focus:outline-none focus:border-blue-300 p-1 rounded-lg text-center">

                    <textarea name="sh42" placeholder="CTA Description"
                        class="text-sm md:text-xl mb-8 w-full bg-transparent border-2 border-dashed border-white focus:outline-none focus:border-blue-300 p-1 rounded-lg text-center">{{ old('sh42', $contact->sh42) }}</textarea>

                    <!-- Form (non-editable) -->
                    <form class="max-w-xl mx-auto flex flex-col sm:flex-row gap-3">
                        <input type="email" placeholder="Your email address"
                            class="bg-white hover:bg-gray-50 border border-green-600 text-green-700 px-6 py-3 rounded-md font-medium transition-colors text-sm md:text-base">
                        <a href="#"
                            class="bg-transparent border border-white md:border-2 hover:bg-white/10 font-medium px-4 py-2 md:px-6 md:py-3 rounded-lg transition-colors text-sm md:text-base">
                            Subscribe Now
                        </a>
                    </form>

                    <input type="text" name="sh43" value="{{ old('sh43', $contact->sh43) }}" placeholder="Privacy Text"
                        class="text-xs text-green-200 mt-4 w-full bg-transparent border-2 border-dashed border-white focus:outline-none focus:border-blue-300 p-1 rounded text-center">

                    <!-- Social Media (non-editable) -->
                    <div class="mt-8 flex justify-center space-x-6">
                        <a href="#" class="text-white hover:text-green-200 transition-colors">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-green-200 transition-colors">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 3.807.058h.468c2.456 0 2.784-.011 3.807-.058.975-.045 1.504-.207 1.857-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-3.807v-.468c0-2.456-.011-2.784-.058-3.807-.045-.975-.207-1.504-.344-1.857a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-green-200 transition-colors">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-green-200 transition-colors">
                            <span class="sr-only">YouTube</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- ✅ Submit Button at the very bottom inside the form -->
        <div class="container mx-auto px-4 py-6 flex justify-end">
            <button type="submit"
                class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-6 rounded-lg shadow-md transition-colors duration-200">
                Save Changes
            </button>
        </div>
    </form>

        <style>
        /* Make sure inputs and textareas take full width */
        input[type="text"],
        textarea {
            width: 100%;
        }

        /* Style for stat cards to maintain visual hierarchy */
        .bg-green-50 input,
        .bg-green-50 textarea {
            background-color: rgba(240, 253, 244, 0.7);
        }

        /* Style for white background sections */
        .bg-white input,
        .bg-white textarea {
            background-color: rgba(255, 255, 255, 0.7);
        }

        /* Style for green background section */
        .bg-green-600 input,
        .bg-green-600 textarea,
        .bg-green-800 input,
        .bg-green-800 textarea {
            background-color: rgba(22, 163, 74, 0.3);
            color: white;
        }

        /* Placeholder color for green section */
        .bg-green-600 input::placeholder,
        .bg-green-600 textarea::placeholder,
        .bg-green-800 input::placeholder,
        .bg-green-800 textarea::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
    </style>

@endsection
