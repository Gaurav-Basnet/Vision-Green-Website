@extends("master")
@section('title', 'Notices')
@section('content')

<!-- Hero Section -->
<section class="min-h-[300px] md:min-h-[500px] bg-cover bg-center py-12 md:py-24 text-white relative flex items-center"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1466611653911-95081537e5b7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80');">
    <div class="absolute inset-0 bg-black/30"></div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-5xl font-bold mb-4">Announcements & Notices</h1>
        <p class="text-lg md:text-xl max-w-2xl mx-auto">Stay updated with our latest news, events, and important updates</p>
    </div>
</section>

<!-- Notices Section -->
<section id="notice-event" class="gsap py-12 bg-gray-50">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Main Notices -->
            <div class="md:w-2/3">
                <h2 class="text-2xl font-bold text-green-800 mb-6 pb-2 border-b border-green-200">Recent Notices</h2>
                
                <!-- Notice 1 -->
                <div id="notice-1" class=" gsap-card bg-white rounded-lg shadow-md overflow-hidden mb-6 hover:shadow-lg transition-shadow">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">Event</span>
                            <span class="text-gray-500 text-sm ">June 15, 2023</span>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-gray-800 mb-2">Community Tree Planting Day</h3>
                        <p class="text-gray-600 text-sm md:text-base mb-4">Join us for our annual tree planting event in Kathmandu Valley on July 10th. Volunteers will plant native species to help restore local ecosystems.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">Volunteer Opportunity</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">Kathmandu</span>
                        </div>
                        <a href="#" class="text-green-600 hover:text-green-800 font-medium text-sm inline-flex items-center">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Notice 2 -->
                <div id="notice-2" class="gsap-card bg-white rounded-lg shadow-md overflow-hidden mb-6 hover:shadow-lg transition-shadow">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">Announcement</span>
                            <span class="text-gray-500 text-sm">June 5, 2023</span>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-gray-800 mb-2">New Office Opening in Pokhara</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">We're excited to announce the opening of our new regional office in Pokhara to better serve conservation efforts in the Western Development Region.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">Expansion</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">Pokhara</span>
                        </div>
                        <a href="#" class="text-green-600 hover:text-green-800 font-medium text-sm inline-flex items-center">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Notice 3 -->
                <div id="notice-3" class="gsap-card bg-white rounded-lg shadow-md overflow-hidden mb-6 hover:shadow-lg transition-shadow">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded">Alert</span>
                            <span class="text-gray-500 text-sm">May 28, 2023</span>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-gray-800 mb-2">Monsoon Preparedness Workshop</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">Learn how to protect your community from monsoon-related environmental hazards in our free workshop series starting June 20th.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">Workshop</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">Multiple Locations</span>
                        </div>
                        <a href="#" class="text-green-600 hover:text-green-800 font-medium text-sm inline-flex items-center">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                   <div class="text-center mt-8 md:mt-10">
                <a href="/project"
                    class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium text-sm md:text-base px-5 py-2.5 rounded-lg transition-colors shadow-md hover:shadow-lg">
                    More Notification 
                </a>
            </div>
            </div>
            
            <!-- Sidebar -->
            <div class="md:w-1/3">
                <!-- Categories -->
                <div id="notice-categories" class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                    <div class="bg-green-600 px-4 py-3">
                        <h3 class="text-lg font-semibold text-white">Categories</h3>
                    </div>
                    <div class="p-4 gsap-card ">
                        <ul class="space-y-2">
                            <li>
                                <a href="#" class="flex items-center text-gray-700 hover:text-green-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Upcoming Events
                                    <span class="ml-auto bg-green-100 text-green-800 text-xs font-semibold px-2 py-0.5 rounded">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center text-gray-700 hover:text-green-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z" clip-rule="evenodd" />
                                    </svg>
                                    Important Alerts
                                    <span class="ml-auto bg-green-100 text-green-800 text-xs font-semibold px-2 py-0.5 rounded">5</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center text-gray-700 hover:text-green-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z" clip-rule="evenodd" />
                                    </svg>
                                    Volunteer Opportunities
                                    <span class="ml-auto bg-green-100 text-green-800 text-xs font-semibold px-2 py-0.5 rounded">8</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center text-gray-700 hover:text-green-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                    </svg>
                                    Annual Reports
                                    <span class="ml-auto bg-green-100 text-green-800 text-xs font-semibold px-2 py-0.5 rounded">3</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Archive -->
                <div id="notice-archive" class="gsap-card bg-white rounded-lg shadow-md overflow-hidden mb-6">
                    <div class="bg-green-600 px-4 py-3">
                        <h3 class="text-lg font-semibold text-white">Archive</h3>
                    </div>
                    <div class="p-4">
                        <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                            <option>Select Month</option>
                            <option>June 2023</option>
                            <option>May 2023</option>
                            <option>April 2023</option>
                            <option>March 2023</option>
                            <option>February 2023</option>
                            <option>January 2023</option>
                        </select>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div id="notice-links" class="gsap-card bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-green-600 px-4 py-3">
                        <h3 class="text-lg font-semibold text-white">Quick Links</h3>
                    </div>
                    <div class="p-4">
                        <ul class="space-y-3">
                            <li>
                                <a href="#" class="flex items-center text-gray-700 hover:text-green-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                    </svg>
                                    View Our Annual Report
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center text-gray-700 hover:text-green-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                        <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                                    </svg>
                                    Volunteer Application Form
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center text-gray-700 hover:text-green-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                    Contact Our Team
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section id="notice-newsletter" class="gsap-card py-12 bg-green-700 text-white">
    <div class="container mx-auto px-4 max-w-4xl text-center">
        <h2 class="text-2xl md:text-3xl font-bold mb-4">Stay Updated</h2>
        <p class="text-green-100 mb-6 max-w-2xl mx-auto">Subscribe to our newsletter to receive the latest notices and updates directly to your inbox.</p>
        
        <form class="flex flex-col sm:flex-row gap-2 max-w-md mx-auto">
            <input type="email" placeholder="Your email address" class="flex-grow px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-green-300 text-gray-900">
            <button type="submit" class="bg-green-800 hover:bg-green-900 px-6 py-2 rounded-md font-medium transition-colors">Subscribe</button>
        </form>
        
        <p class="text-green-200 text-xs mt-3">We respect your privacy. Unsubscribe at any time.</p>
    </div>
</section>

 <script>
        document.addEventListener("DOMContentLoaded", function () {
            if (window.location.hash) {
                const target = document.querySelector(window.location.hash);
                if (target) {
                    target.scrollIntoView({ behavior: "smooth" });
                }
            }
        });
    </script>
@endsection