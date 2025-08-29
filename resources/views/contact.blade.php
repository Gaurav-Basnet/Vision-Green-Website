@extends("master")
@section('title', 'Contact Us')
@section('content')

    <!-- Hero Section -->
    <section class="min-h-[200px] md:min-h-[500px] bg-cover bg-center py-8 md:py-24 text-white relative flex items-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1483728642387-6c3bdd6c93e5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1776&q=80');">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-2xl md:text-5xl font-bold mb-2 md:mb-4">{{ $contact->h1 }}</h1>
            <p class="text-base md:text-xl max-w-2xl mx-auto">{{ $contact->sh1 }}</p>
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
    <section  class="gsap py-8 md:py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                <!-- Phone Card -->
                <div
                    id="phone" class="gsap-card bg-white p-4 md:p-6 rounded-lg shadow-sm md:shadow-md hover:shadow-md md:hover:shadow-lg transition-shadow flex flex-row items-start space-x-4 md:flex-col md:items-start md:space-x-0 md:space-y-4">
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
                        <h3 class="text-lg md:text-xl font-semibold mb-1 md:mb-2">{{ $contact->sh2 }}</h3>
                        <p class="text-sm md:text-base text-gray-600 mb-1 md:mb-2">{{ $contact->sh3 }}</p>
                        <p class="text-sm md:text-base text-gray-600">{{ old('sh4', $contact->sh4) }}</p>
                        <p class="text-xs md:text-sm text-gray-500 mt-2 md:mt-3">{{ old('sh5', $contact->sh5) }}</p>
                    </div>
                </div>

                <!-- Email Card -->
                <div
                     id="email" class="gsap-card bg-white p-4 md:p-6 rounded-lg shadow-sm md:shadow-md hover:shadow-md md:hover:shadow-lg transition-shadow flex flex-row items-start space-x-4 md:flex-col md:items-start md:space-x-0 md:space-y-4">
                    <div class="bg-green-100 w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center">
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-green-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl font-semibold mb-1 md:mb-2">{{ old('sh6', $contact->sh6) }}</h3>
                        <p class="text-sm md:text-base text-gray-600 mb-1 md:mb-2">{{ old('sh7', $contact->sh7) }}</p>
                        <p class="text-sm md:text-base text-gray-600">{{ old('sh8', $contact->sh8) }}</p>
                        <p class="text-xs md:text-sm text-gray-500 mt-2 md:mt-3">{{ old('sh9', $contact->sh9) }}</p>
                    </div>
                </div>

                <!-- Address Card -->
                <div
                    id="address" class="gsap-card bg-white p-4 md:p-6 rounded-lg shadow-sm md:shadow-md hover:shadow-md md:hover:shadow-lg transition-shadow flex flex-row items-start space-x-4 md:flex-col md:items-start md:space-x-0 md:space-y-4">
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
                        <h3 class="text-lg md:text-xl font-semibold mb-1 md:mb-2">{{ old('sh10', $contact->sh10) }}</h3>
                        <p class="text-sm md:text-base text-gray-600">{{ old('sh11', $contact->sh11) }}</p>
                        <p class="text-sm md:text-base text-gray-600">{{ old('sh12', $contact->sh12) }}</p>
                        <p class="text-sm md:text-base text-gray-600">{{ old('sh13', $contact->sh13) }}</p>
                        <p class="text-xs md:text-sm text-gray-500 mt-2 md:mt-3">{{ old('sh14', $contact->sh14) }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="contact-form" class="gsap py-8 md:py-16 bg-white">
        <div class="container ">
            <div class="text-center mb-8 md:mb-12">
                <h2 class="text-xl md:text-3xl font-bold text-gray-800">Send Us a Message</h2>
                <p class="text-sm md:text-base text-gray-600 mt-1 md:mt-2 max-w-2xl mx-auto">Have questions or want to get
                    involved? Fill out the form below and we'll get back to you as soon as possible.</p>
            </div>

            <div class="max-w-4xl mx-auto bg-white rounded-lg md:rounded-xl shadow-md md:shadow-lg overflow-hidden">
                <div class="md:flex gsap-card">
                    <div class="md:w-1/2 bg-green-600 text-white p-6 md:p-12">
                        <h2 class="text-xl md:text-3xl font-bold mb-3 md:mb-4">Contact Information</h2>
                        <p class="text-base md:text-xl mb-4 md:mb-6">We're here to help and answer any questions you might
                            have about our programs and initiatives.</p>

                        <div class="space-y-4 md:space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-green-700 rounded-full p-1 md:p-2">
                                    <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-2 md:ml-3">
                                    <p class="text-sm md:text-base font-medium">Phone</p>
                                    <p class="text-sm md:text-base">+977 1-1234567</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-green-700 rounded-full p-1 md:p-2">
                                    <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-2 md:ml-3">
                                    <p class="text-sm md:text-base font-medium">Email</p>
                                    <p class="text-sm md:text-base">info@sustainablenepal.org</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-green-700 rounded-full p-1 md:p-2">
                                    <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-2 md:ml-3">
                                    <p class="text-sm md:text-base font-medium">Address</p>
                                    <p class="text-sm md:text-base">Lazimpat, Kathmandu 44600</p>
                                    <p class="text-sm md:text-base">Nepal</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 md:mt-8">
                            <h3 class="font-medium text-sm md:text-base mb-2 md:mb-3">Follow Us</h3>
                            <div class="flex space-x-3 md:space-x-4">
                                <a href="#" class="text-white hover:text-green-200 transition-colors">
                                    <svg class="w-5 h-5 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#" class="text-white hover:text-green-200 transition-colors">
                                    <svg class="w-5 h-5 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#" class="text-white hover:text-green-200 transition-colors">
                                    <svg class="w-5 h-5 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#" class="text-white hover:text-green-200 transition-colors">
                                    <svg class="w-5 h-5 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/2 p-6 md:p-12">
                        <form class="space-y-3 md:space-y-4">
                            <div>
                                <label for="name" class="block text-sm md:text-base font-medium text-gray-700 mb-1">Full Name
                                    *</label>
                                <input type="text" id="name" required
                                    class="w-full px-3 py-2 md:px-4 md:py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent text-sm md:text-base">
                            </div>

                            <div>
                                <label for="email" class="block text-sm md:text-base font-medium text-gray-700 mb-1">Email
                                    Address *</label>
                                <input type="email" id="email" required
                                    class="w-full px-3 py-2 md:px-4 md:py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent text-sm md:text-base">
                            </div>

                            <div>
                                <label for="subject" class="block text-sm md:text-base font-medium text-gray-700 mb-1">Subject
                                    *</label>
                                <select id="subject"
                                    class="w-full px-3 py-2 md:px-4 md:py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent text-sm md:text-base">
                                    <option value="">Select a subject</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="partnership">Partnership Opportunity</option>
                                    <option value="volunteer">Volunteer Inquiry</option>
                                    <option value="donation">Donation Question</option>
                                    <option value="media">Media Inquiry</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div>
                                <label for="message" class="block text-sm md:text-base font-medium text-gray-700 mb-1">Message
                                    *</label>
                                <textarea id="message" rows="4" md:rows="5" required
                                    class="w-full px-3 py-2 md:px-4 md:py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent text-sm md:text-base"></textarea>
                            </div>

                            <div class="flex items-center">
                                <input id="consent" type="checkbox" required
                                    class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                                <label for="consent" class="ml-2 block text-sm md:text-base text-gray-700">
                                    I consent to Sustainable Nepal collecting my details through this form.
                                </label>
                            </div>

                            <button type="submit"
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-2 md:py-3 px-4 rounded-md transition-colors flex items-center justify-center text-sm md:text-base">
                                <svg class="w-4 h-4 md:w-5 md:h-5 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Contact -->
    <sectio id="team-info" class="gsap py-8 md:py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8 md:mb-12">
                <h2 class="text-xl md:text-3xl font-bold text-gray-800">Contact Our Team Directly</h2>
                <p class="text-base md:text-base text-gray-600 mt-1 md:mt-2 max-w-2xl mx-auto">Reach out to specific
                    departments or team members for specialized inquiries.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <!-- Team Member 1 -->
                <div
                    class="gsap-card bg-white p-4 md:p-6 rounded-lg shadow-sm md:shadow-md hover:shadow-md md:hover:shadow-lg transition-shadow text-center">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 mx-auto rounded-full overflow-hidden mb-3 md:mb-4 border-4 border-green-100">
                        <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Team Member"
                            class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold mb-1 md:mb-1">Sarita Shrestha</h3>
                    <p class="text-green-600 text-base md:text-lg font-medium mb-1 md:mb-2">Program Director</p>
                    <p class="text-gray-600 text-sm md:text-base mb-2 md:mb-4">Oversees all sustainability programs and
                        initiatives</p>
                    <a href="mailto:sarita@sustainablenepal.org"
                        class="text-green-600 hover:text-green-700 text-sm md:text-base font-medium">sarita@sustainablenepal.org</a>
                </div>

                <!-- Team Member 2 -->
                <div
                    class="gsap-card bg-white p-4 md:p-6 rounded-lg shadow-sm md:shadow-md hover:shadow-md md:hover:shadow-lg transition-shadow text-center">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 mx-auto rounded-full overflow-hidden mb-3 md:mb-4 border-4 border-green-100">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Team Member"
                            class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold mb-1 md:mb-1">Rajiv Gurung</h3>
                    <p class="text-green-600 text-base md:text-lg font-medium mb-1 md:mb-2">Volunteer Coordinator</p>
                    <p class="text-gray-600 text-sm md:text-base mb-2 md:mb-4">Manages volunteer programs and community
                        engagement</p>
                    <a href="mailto:rajiv@sustainablenepal.org"
                        class="text-green-600 hover:text-green-700 text-sm md:text-base font-medium">rajiv@sustainablenepal.org</a>
                </div>

                <!-- Team Member 3 -->
                <div
                    class="gsap-card bg-white p-4 md:p-6 rounded-lg shadow-sm md:shadow-md hover:shadow-md md:hover:shadow-lg transition-shadow text-center">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 mx-auto rounded-full overflow-hidden mb-3 md:mb-4 border-4 border-green-100">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Team Member"
                            class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold mb-1 md:mb-1">Anjali Thapa</h3>
                    <p class="text-green-600 text-base md:text-lg font-medium mb-1 md:mb-2">Partnership Manager</p>
                    <p class="text-gray-600 text-sm md:text-base mb-2 md:mb-4">Handles corporate and organizational
                        partnerships</p>
                    <a href="mailto:anjali@sustainablenepal.org"
                        class="text-green-600 hover:text-green-700 text-sm md:text-base font-medium">anjali@sustainablenepal.org</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section id="map" class="gsap bg-white">
        <div class="container mx-auto px-4 py-8 md:py-12">
            <div class="rounded-lg md:rounded-xl overflow-hidden shadow-md md:shadow-lg border border-gray-200">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.456205029937!2d85.3204703150621!3d27.70520238279396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190a74aa1f23%3A0x74ebef82ad0e5c15!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1620000000000!5m2!1sen!2snp"
                    width="100%" height="300" class="h-[250px] md:h-[450px]" style="border:0;" allowfullscreen=""
                    loading="lazy"></iframe>
            </div>
            <div class="mt-4 md:mt-6 grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">
                <div>
                    <h3 class="text-base md:text-xl font-semibold mb-2 md:mb-3">{{ $contact->h5 }}</h3>
                    <ul class="space-y-1 md:space-y-2 text-base md:text-lg">
                        <li class="flex justify-between">
                            <span class="text-gray-600">{{ old('sh30', $contact->sh30) }}</span>
                            <span class="font-medium">{{ old('sh31', $contact->sh31) }}</span>
                        </li>
                        <li class="flex justify-between">
                            <span class="text-gray-600"{{ old('sh32', $contact->sh32) }}</span>
                            <span class="font-medium">{{ old('sh33', $contact->sh33) }}</span>
                        </li>
                        <li class="flex justify-between">
                            <span class="text-gray-600">{{ old('sh34', $contact->sh34) }}</span>
                            <span class="font-medium">{{ old('sh35', $contact->sh35) }}</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg md:text-xl font-semibold mb-2 md:mb-3">{{ old('h6', $contact->h6) }}</h3>
                    <p class="text-gray-600 text-sm md:text-base mb-2 md:mb-3">{{ old('sh36', $contact->sh36) }}</p>
                    <div class="bg-green-50 p-3 md:p-4 rounded-lg">
                        <h4 class="font-medium text-green-700 text-base md:text-lg mb-1 md:mb-2">{{ old('sh37', $contact->sh37) }}
                        </h4>
                        <ul class="text-sm md:text-lg text-gray-700 space-y-1">
                            <li>{{ old('sh38', $contact->sh38) }}</li>
                            <li>{{ old('sh39', $contact->sh39) }}</li>
                            <li>{{ old('sh40', $contact->sh40) }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-12 md:py-16 bg-white gsap">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800">{{ old('h7', $contact->h7) }}</h2>
                    <p class="text-gray-600 mt-2">{{ old('sh41', $contact->sh41) }}</p>
                </div>

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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open" x-collapse x-transition
                            class="px-6 py-4 bg-white text-gray-600 border-t border-gray-200">
                            <p class="md:text-base text-sm">We welcome volunteers in various capacities across our programs.
                                Current opportunities include:</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1 md:text-base text-sm">
                                <li>Field volunteers for our community projects</li>
                                <li>Office support for administrative tasks</li>
                                <li>Event volunteers for our awareness campaigns</li>
                                <li>Skilled volunteers (graphic design, translation, etc.)</li>
                            </ul>
                            <p class="mt-3  md:text-base text-sm">Please visit our Volunteer page to see current
                                opportunities and fill out the application form. We review applications monthly and will
                                contact suitable candidates.</p>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open" x-collapse x-transition
                            class="px-6 py-4 bg-white text-gray-600 border-t border-gray-200">
                            <p class="md:text-base text-sm">Your donations directly support our field projects, community
                                programs, and research initiatives. Here's the breakdown of how we allocate funds:</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1 md:text-base text-sm">
                                <li><strong>75%</strong> goes directly to program implementation</li>
                                <li><strong>15%</strong> covers administrative costs</li>
                                <li><strong>10%</strong> is invested in fundraising and awareness</li>
                            </ul>
                            <p class="mt-3 md:text-base text-sm">We maintain full transparency in our financial reporting.
                                Our annual reports with detailed financial statements are available on our website.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div x-data="{ open: false }"
                        class="border border-gray-200 rounded-lg overflow-hidden transition-all duration-200">
                        <button @click="open = !open"
                            class="flex justify-between items-center w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 focus:outline-none">
                            <span class="font-medium text-gray-800 md:text-xl text-sm">How can my organization partner with
                                you?</span>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200"
                                :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open" x-collapse x-transition
                            class="px-6 py-4 bg-white text-gray-600 border-t border-gray-200">
                            <p class="md:text-base text-sm">We collaborate with various organizations through different
                                partnership models:</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1 md:text-base text-sm">
                                <li><strong>Corporate Partnerships:</strong> Sponsorships, employee engagement, CSR
                                    initiatives</li>
                                <li><strong>NGO Collaborations:</strong> Joint programs, knowledge sharing, resource pooling
                                </li>
                                <li><strong>Academic Partnerships:</strong> Research collaborations, student internships
                                </li>
                                <li><strong>Government Engagement:</strong> Policy advocacy, community program
                                    implementation</li>
                            </ul>
                            <p class="mt-3 md:text-base text-sm">Please contact our Partnerships team through the contact
                                form above or email <a href="mailto:partnerships@visiongreen.org.np"
                                    class="text-green-600 hover:underline">partnerships@visiongreen.org.np</a> with details
                                about your organization and proposed collaboration.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div x-data="{ open: false }"
                        class="border border-gray-200 rounded-lg overflow-hidden transition-all duration-200">
                        <button @click="open = !open"
                            class="flex justify-between items-center w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 focus:outline-none">
                            <span class="font-medium text-gray-800 md:text-xl text-sm">Do you offer internships or research
                                opportunities?</span>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200"
                                :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open" x-collapse x-transition
                            class="px-6 py-4 bg-white text-gray-600 border-t border-gray-200">
                            <p class="md:text-base text-sm">Yes, we offer several opportunities for students and
                                researchers:</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1 md:text-base text-sm">
                                <li><strong>Academic Internships:</strong> 3-6 month placements for undergraduate and
                                    graduate students</li>
                                <li><strong>Research Fellowships:</strong> For postgraduate students and early-career
                                    researchers</li>
                                <li><strong>Field Research:</strong> Opportunities to contribute to our ongoing
                                    environmental studies</li>
                                <li><strong>Summer Programs:</strong> Intensive 8-week programs during university breaks
                                </li>
                            </ul>
                            <p class="mt-3 md:text-base text-sm">Check our Careers page for current openings or contact our
                                Research Coordinator at <a href="mailto:research@visiongreen.org.np"
                                    class="text-green-600 hover:underline">research@visiongreen.org.np</a>. Most
                                opportunities are announced in March and September each year.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div x-data="{ open: false }"
                        class="border border-gray-200 rounded-lg overflow-hidden transition-all duration-200">
                        <button @click="open = !open"
                            class="flex justify-between items-center w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 focus:outline-none">
                            <span class="font-medium text-gray-800 md:text-xl text-sm">How can I stay updated on your
                                work?</span>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200"
                                :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open" x-collapse x-transition
                            class="px-6 py-4 bg-white text-gray-600 border-t border-gray-200">
                            <p class="md:text-base text-sm">There are several ways to stay connected with our work:</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1 md:text-base text-sm">
                                <li>Subscribe to our monthly newsletter</li>
                                <li>Follow us on social media (links in footer)</li>
                                <li>Attend our public events and webinars</li>
                                <li>Check our website's news section regularly</li>
                            </ul>
                            <p class="mt-3 md:text-base text-sm">For major updates, we also send out annual reports and
                                impact assessments to our registered supporters.</p>
                        </div>
                    </div>
                </div>

                <!-- View All Button -->
                <div class="text-center mt-6  md:mt-10">
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
    <section class="gsap py-12 md:py-16 bg-green-800 text-white">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold mb-4">{{ old('h8', $contact->h8) }}</h2>
                <p class="text-sm md:text-xl mb-8">{{ old('sh42', $contact->sh42) }}.</p>

                <form class="max-w-xl mx-auto flex flex-col sm:flex-row gap-3">
                    <input type="email" placeholder="Your email address"
                        class="bg-white hover:bg-gray-50 border border-green-600 text-green-700 px-6 py-3 rounded-md font-medium transition-colors text-sm md:text-base">
                    <!-- <button type="submit"
                        class="bg-green-600 hover:bg-green-700 px-6 py-3 rounded-md font-medium transition-colors whitespace-nowrap">
                        Subscribe Now
                    </button> -->
                  <a href="#" class="bg-transparent border border-white md:border-2 hover:bg-white/10 font-medium px-4 py-2 md:px-6 md:py-3 rounded-lg transition-colors text-sm md:text-base">
                Subscribe Now
            </a>
                </form>

                <p class="text-xs text-green-200 mt-4">{{ old('sh43', $contact->sh43) }}</p>

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

@endsection