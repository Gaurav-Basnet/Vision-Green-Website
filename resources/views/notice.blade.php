@extends("master")
@section('title', 'Notices')
@section('content')

    <!-- Hero Section -->
    <section class="min-h-[300px] md:min-h-[500px] bg-cover bg-center py-12 md:py-24 text-white relative flex items-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1466611653911-95081537e5b7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80');">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">Announcements & Notices</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">Stay updated with our latest news, events, and important updates
            </p>
        </div>
    </section>

    <!-- Search Section -->
    <section class="py-8 bg-white shadow-sm">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-search mr-2 text-green-500"></i> Find Notices
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                    <!-- Search Box -->
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input 
                            type="text" 
                            id="searchBox" 
                            placeholder="Search notices..." 
                            class="pl-10 pr-4 py-3 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                        >
                    </div>

                    <!-- Type Filter -->
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-tag text-gray-400"></i>
                        </div>
                        <select 
                            id="typeFilter" 
                            class="pl-10 pr-8 py-3 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 appearance-none bg-white cursor-pointer transition-colors"
                        >
                            <option value="">All Types</option>
                            <option value="UpcomingEvents">Upcoming Events</option>
                            <option value="Alerts">Alerts</option>
                            <option value="Achievements">Achievements</option>
                            <option value="PastEvents">Past Events</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                            <i class="fas fa-chevron-down text-gray-400"></i>
                        </div>
                    </div>

                    <!-- Year Filter -->
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-calendar text-gray-400"></i>
                        </div>
                        <select 
                            id="yearFilter" 
                            class="pl-10 pr-8 py-3 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 appearance-none bg-white cursor-pointer transition-colors"
                        >
                            <option value="">All Years</option>
                            @php
                                $currentYear = date('Y');
                                for ($year = $currentYear; $year >= 2023; $year--) {
                                    echo "<option value='$year'>$year</option>";
                                }
                            @endphp
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                            <i class="fas fa-chevron-down text-gray-400"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Search Results -->
                <div id="searchResults" class="mt-4 border-t border-gray-200 pt-4 max-h-72 overflow-y-auto hidden">
                    <div class="text-center py-4 text-gray-500">
                        <i class="fas fa-search fa-lg mb-2"></i>
                        <p>Search results will appear here</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Notices Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4 max-w-6xl">
            <!-- Event Status Tabs -->
            @if(request()->get('type') === 'UpcomingEvents' || request()->get('event_status'))
                <div class="mb-8 bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-filter mr-2 text-green-500"></i> Filter Events by Status
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        <a href="/notice?type=UpcomingEvents&event_status=upcoming" class="px-4 py-2 rounded-full text-sm font-medium transition-colors
                                                              {{ request()->get('event_status') === 'upcoming' ?
                                'bg-green-600 text-white' :
                                'bg-gray-100 text-gray-700 hover:bg-green-100 hover:text-green-800' }}">
                            Upcoming Events
                        </a>
                        <a href="/notice?type=UpcomingEvents&event_status=finished" class="px-4 py-2 rounded-full text-sm font-medium transition-colors
                                                              {{ request()->get('event_status') === 'finished' ?
                                'bg-green-600 text-white' :
                                'bg-gray-100 text-gray-700 hover:bg-green-100 hover:text-green-800' }}">
                            Past Events
                        </a>
                        <a href="/notice?type=UpcomingEvents" class="px-4 py-2 rounded-full text-sm font-medium transition-colors
                                                              {{ !request()->get('event_status') ?
                                'bg-green-600 text-white' :
                                'bg-gray-100 text-gray-700 hover:bg-green-100 hover:text-green-800' }}">
                            All Events
                        </a>
                    </div>
                </div>
            @endif

            <div class="flex flex-col md:flex-row gap-8">
                <!-- Main Notices -->
                <div class="md:w-2/3">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200 flex items-center">
                        @if(request()->get('type') === 'UpcomingEvents' && request()->get('event_status') === 'upcoming')
                            <i class="fas fa-calendar-day mr-2 text-green-500"></i> Upcoming Events
                        @elseif(request()->get('type') === 'UpcomingEvents' && request()->get('event_status') === 'finished')
                            <i class="fas fa-history mr-2 text-green-500"></i> Past Events
                        @else
                            <i class="fas fa-bullhorn mr-2 text-green-500"></i> Recent Notices
                        @endif
                    </h2>

                    <!-- Notices will be loaded here -->
                    <div id="notices-container">
                        @if(count($notices) > 0)
                            @foreach($notices as $notice)
                                <div id="notice-{{ $notice->id }}" class="bg-white rounded-xl shadow-md overflow-hidden mb-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                                    <div class="p-6">
                                        <div class="flex justify-between items-start mb-3">
                                            <div class="flex items-center">
                                                @if($notice->type !== 'UpcomingEvents')
                                                    <span class="text-xs font-semibold px-3 py-1 rounded-full 
                                                        @if($notice->type == 'Alerts') bg-yellow-100 text-yellow-800 
                                                        @elseif($notice->type == 'Achievements') bg-green-100 text-green-800 
                                                        @else bg-gray-100 text-gray-800 @endif">
                                                        {{ $notice->type ?? 'Notice' }}
                                                    </span>
                                                @endif
                                                @if($notice->type == 'UpcomingEvents')
                                                    @if($notice->event_date && $notice->event_date >= now())
                                                        <span class="ml-2 bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Upcoming</span>
                                                    @elseif($notice->event_date && $notice->event_date < now())
                                                        <span class="ml-2 bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Past</span>
                                                    @endif
                                                @endif
                                            </div>
                                            <span class="text-gray-500 text-sm">{{ \Carbon\Carbon::parse($notice->created_at)->format('M d, Y') }}</span>
                                        </div>
                                        
                                        <h3 class="text-xl font-bold text-gray-800 mb-3">{{ $notice->title }}</h3>

                                        <!-- Event Date Display -->
                                        @if($notice->event_date)
                                            <div class="flex items-center text-sm text-gray-600 mb-3">
                                                <i class="far fa-calendar-alt mr-2 text-green-500"></i>
                                                Event Date: {{ \Carbon\Carbon::parse($notice->event_date)->format('M d, Y') }}
                                            </div>
                                        @endif

                                        <p class="text-gray-600 mb-4">
                                            {{ Str::limit($notice->description, 150) }}
                                        </p>

                                        @if($notice->location || $notice->tags)
                                            <div class="flex flex-wrap gap-2 mb-4">
                                                @if($notice->location)
                                                    <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full flex items-center">
                                                        <i class="fas fa-map-marker-alt mr-1 text-green-500"></i>
                                                        {{ $notice->location }}
                                                    </span>
                                                @endif

                                                @if($notice->tags)
                                                    @foreach(explode(',', $notice->tags) as $tag)
                                                        <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">
                                                            #{{ trim($tag) }}
                                                        </span>
                                                    @endforeach
                                                @endif
                                            </div>
                                        @endif

                                        <a href="/notices/{{ $notice->id }}" class="inline-flex items-center text-green-600 hover:text-green-800 font-medium transition-colors">
                                            Read More
                                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="bg-white rounded-xl shadow-md p-8 text-center">
                                <i class="fas fa-inbox text-4xl text-gray-300 mb-4"></i>
                                <h3 class="text-lg font-medium text-gray-900 mb-2">No notices available</h3>
                                <p class="text-gray-500">Check back later for new announcements and updates.</p>
                            </div>
                        @endif
                    </div>

                    <!-- Load More Button (for pagination) -->
                    @if($notices->hasMorePages())
                        <div class="text-center mt-8">
                            <button id="load-more-btn" class="bg-green-600 hover:bg-green-700 text-white font-medium px-6 py-3 rounded-lg transition-colors shadow-md hover:shadow-lg flex items-center justify-center mx-auto"
                                data-next-page="{{ $notices->currentPage() + 1 }}" data-type="{{ request()->get('type') }}"
                                data-event-status="{{ request()->get('event_status') }}">
                                <i class="fas fa-plus-circle mr-2"></i> Load More Notices
                            </button>
                            <div id="loading-spinner" class="hidden mt-4">
                                <div class="flex justify-center items-center">
                                    <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-green-600"></div>
                                    <span class="ml-2 text-gray-600">Loading...</span>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Pagination Links (fallback for non-JS users) -->
                    @if($notices->hasPages())
                        <div class="mt-6 hidden md:block">
                            {{ $notices->links() }}
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="md:w-1/3">
                    @php
                        $currentType = request()->query('type');
                    @endphp

                    <!-- Categories -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
                        <div class="bg-green-600 px-4 py-3">
                            <h3 class="text-lg font-semibold text-white flex items-center">
                                <i class="fas fa-folder mr-2"></i> Categories
                            </h3>
                        </div>
                        <div class="p-4">
                            <ul class="space-y-2">
                                <li>
                                    <a href="/notice?type=UpcomingEvents" class="flex items-center px-3 py-2 rounded-lg transition-colors
                                        {{ $currentType === 'UpcomingEvents' ? 'bg-green-50 text-green-800 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">
                                        <i class="fas fa-calendar-day mr-3 text-green-500"></i>
                                        Upcoming Events
                                        <span class="ml-auto bg-green-100 text-green-800 text-xs font-semibold px-2 py-0.5 rounded-full">{{ $eventCount ?? 0 }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/notice?type=Alerts" class="flex items-center px-3 py-2 rounded-lg transition-colors
                                        {{ $currentType === 'Alerts' ? 'bg-green-50 text-green-800 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">
                                        <i class="fas fa-exclamation-triangle mr-3 text-yellow-500"></i>
                                        Important Alerts
                                        <span class="ml-auto bg-green-100 text-green-800 text-xs font-semibold px-2 py-0.5 rounded-full">{{ $alertCount ?? 0 }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/notice?type=Achievements" class="flex items-center px-3 py-2 rounded-lg transition-colors
                                        {{ $currentType === 'Achievements' ? 'bg-green-50 text-green-800 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">
                                        <i class="fas fa-trophy mr-3 text-green-500"></i>
                                        Achievements
                                        <span class="ml-auto bg-green-100 text-green-800 text-xs font-semibold px-2 py-0.5 rounded-full">{{ $achievementCount ?? 0 }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Upcoming Events -->
                    @if(count($upcomingEvents) > 0)
                        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
                            <div class="bg-green-600 px-4 py-3">
                                <h3 class="text-lg font-semibold text-white flex items-center">
                                    <i class="fas fa-calendar-check mr-2"></i> Upcoming Events
                                </h3>
                            </div>
                            <div class="p-4">
                                <ul class="space-y-3">
                                    @foreach($upcomingEvents as $event)
                                        <li>
                                            <a href="/notices/{{ $event->id }}" class="flex items-start text-gray-700 hover:text-green-600 transition-colors">
                                                <i class="fas fa-calendar-alt mt-1 mr-3 text-green-500"></i>
                                                <div>
                                                    <span class="text-sm font-medium block">{{ Str::limit($event->title, 40) }}</span>
                                                    <span class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</span>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <!-- Past Events -->
                    @if(count($pastEvents) > 0)
                        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
                            <div class="bg-green-600 px-4 py-3">
                                <h3 class="text-lg font-semibold text-white flex items-center">
                                    <i class="fas fa-history mr-2"></i> Past Events
                                </h3>
                            </div>
                            <div class="p-4">
                                <ul class="space-y-3">
                                    @foreach($pastEvents as $event)
                                        <li>
                                            <a href="/notices/{{ $event->id }}" class="flex items-start text-gray-700 hover:text-green-600 transition-colors">
                                                <i class="fas fa-calendar-alt mt-1 mr-3 text-green-500"></i>
                                                <div>
                                                    <span class="text-sm font-medium block">{{ Str::limit($event->title, 40) }}</span>
                                                    <span class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</span>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <!-- Recent Notices -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
                        <div class="bg-green-600 px-4 py-3">
                            <h3 class="text-lg font-semibold text-white flex items-center">
                                <i class="fas fa-clock mr-2"></i> Recent Updates
                            </h3>
                        </div>
                        <div class="p-4">
                            @if(count($recentNotices) > 0)
                                <ul class="space-y-3">
                                    @foreach($recentNotices as $recent)
                                        <li>
                                            <a href="/notices/{{ $recent->id }}" class="flex items-start text-gray-700 hover:text-green-600 transition-colors">
                                                <i class="fas fa-file-alt mt-1 mr-3 text-green-500"></i>
                                                <span class="text-sm">{{ Str::limit($recent->title, 40) }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-gray-500 text-sm">No recent notices</p>
                            @endif
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <div class="bg-green-600 px-4 py-3">
                            <h3 class="text-lg font-semibold text-white flex items-center">
                                <i class="fas fa-link mr-2"></i> Quick Links
                            </h3>
                        </div>
                        <div class="p-4">
                            <ul class="space-y-3">
                                <li>
                                    <a href="/project" class="flex items-center text-gray-700 hover:text-green-600 transition-colors">
                                        <i class="fas fa-project-diagram mr-3 text-green-500"></i>
                                        Our Projects
                                    </a>
                                </li>
                                <li>
                                    <a href="/volunteer" class="flex items-center text-gray-700 hover:text-green-600 transition-colors">
                                        <i class="fas fa-hands-helping mr-3 text-green-500"></i>
                                        Volunteer Application
                                    </a>
                                </li>
                                <li>
                                    <a href="/contact" class="flex items-center text-gray-700 hover:text-green-600 transition-colors">
                                        <i class="fas fa-envelope mr-3 text-green-500"></i>
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
    <section class="py-12 bg-green-700 text-white">
        <div class="container mx-auto px-4 max-w-4xl text-center">
            <h2 class="text-2xl md:text-3xl font-bold mb-4">Stay Updated</h2>
            <p class="text-green-100 mb-6 max-w-2xl mx-auto">Subscribe to our newsletter to receive the latest notices and updates directly to your inbox.</p>

            <form class="flex flex-col sm:flex-row gap-2 max-w-md mx-auto" action="{{ route('subscribe.store') }}" method="POST" onsubmit="disablebtn()">
                @csrf
                <input type="email" name="email" placeholder="Your email address" required class="flex-grow px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300 text-gray-900">
                <button type="submit" id="send" class="bg-green-800 hover:bg-green-900 px-6 py-3 rounded-lg font-medium transition-colors flex items-center">
                    <i class="fas fa-paper-plane mr-2"></i> Subscribe
                </button>
            </form>

            <p class="text-green-200 text-xs mt-3">We respect your privacy. Unsubscribe at any time.</p>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Handle hash links
            if (window.location.hash) {
                const target = document.querySelector(window.location.hash);
                if (target) {
                    target.scrollIntoView({ behavior: "smooth" });
                }
            }

            // Search functionality
            const searchBox = document.getElementById('searchBox');
            const typeFilter = document.getElementById('typeFilter');
            const yearFilter = document.getElementById('yearFilter');
            const searchResults = document.getElementById('searchResults');
            
            let searchTimeout;
            
            [searchBox, typeFilter, yearFilter].forEach(element => {
                element.addEventListener('input', function() {
                    clearTimeout(searchTimeout);
                    searchTimeout = setTimeout(performSearch, 300);
                });
            });
            
            function performSearch() {
                const query = searchBox.value.trim();
                const type = typeFilter.value;
                const year = yearFilter.value;
                
                if (query.length === 0 && type === '' && year === '') {
                    searchResults.classList.add('hidden');
                    return;
                }
                
                searchResults.classList.remove('hidden');
                searchResults.innerHTML = `
                    <div class="flex justify-center items-center py-4">
                        <div class="animate-spin rounded-full h-6 w-6 border-b-2 border-green-500"></div>
                        <span class="ml-2 text-gray-500">Searching...</span>
                    </div>
                `;
                
                // In a real application, you would fetch from your server
                fetch(`/notice/search?search=${query}&type=${type}&year=${year}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.length === 0) {
                            searchResults.innerHTML = `
                                <div class="text-center py-4 text-gray-500">
                                    <i class="fas fa-inbox fa-lg mb-2"></i>
                                    <p>No notices found matching your criteria</p>
                                </div>
                            `;
                            return;
                        }
                        
                        let resultsHTML = '';
                        data.forEach(notice => {
                            resultsHTML += `
                                <a href="/notices/${notice.id}">
                                    <div class="p-3 border-b border-gray-100 hover:bg-gray-50 transition-colors">
                                        <div class="flex justify-between items-start">
                                            <h3 class="font-medium text-gray-800">${notice.title}</h3>
                                            <span class="text-xs px-2 py-1 rounded-full 
                                                ${notice.type === 'UpcomingEvents' ? 'bg-green-100 text-green-800' : 
                                                  notice.type === 'Alerts' ? 'bg-yellow-100 text-yellow-800' : 
                                                  notice.type === 'Achievements' ? 'bg-green-100 text-green-800' : 
                                                  'bg-gray-100 text-gray-800'}">
                                                ${notice.type}
                                            </span>
                                        </div>
                                        <p class="text-sm text-gray-600 mt-1">${notice.description.substring(0, 80)}...</p>
                                        <div class="flex items-center mt-2 text-xs text-gray-500">
                                            <i class="far fa-calendar-alt mr-1"></i>
                                            ${new Date(notice.created_at).toLocaleDateString()}
                                        </div>
                                    </div>
                                </a>
                            `;
                        });
                        
                        searchResults.innerHTML = resultsHTML;
                    })
                    .catch(error => {
                        console.error('Search error:', error);
                        searchResults.innerHTML = `
                            <div class="text-center py-4 text-gray-500">
                                <i class="fas fa-exclamation-triangle fa-lg mb-2"></i>
                                <p>Error performing search. Please try again.</p>
                            </div>
                        `;
                    });
            }

            // Load More functionality
            const loadMoreBtn = document.getElementById('load-more-btn');
            if (loadMoreBtn) {
                loadMoreBtn.addEventListener('click', function() {
                    const nextPage = this.getAttribute('data-next-page');
                    const type = this.getAttribute('data-type');
                    const eventStatus = this.getAttribute('data-event-status');

                    // Show loading spinner
                    document.getElementById('loading-spinner').classList.remove('hidden');
                    this.disabled = true;

                    // Build the URL with query parameters
                    let url = `/notices/load-more?page=${nextPage}`;
                    if (type) url += `&type=${type}`;
                    if (eventStatus) url += `&event_status=${eventStatus}`;

                    // Fetch more notices
                    fetch(url)
                        .then(response => response.json())
                        .then(data => {
                            if (data.notices && data.notices.data && data.notices.data.length > 0) {
                                // Append new notices
                                const noticesContainer = document.getElementById('notices-container');

                                data.notices.data.forEach(notice => {
                                    const noticeHtml = `
                                        <div id="notice-${notice.id}" class="bg-white rounded-xl shadow-md overflow-hidden mb-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                                            <div class="p-6">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div class="flex items-center">
                                                        ${notice.type !== 'UpcomingEvents' ? `
                                                            <span class="text-xs font-semibold px-3 py-1 rounded-full 
                                                                ${notice.type === 'Alerts' ? 'bg-yellow-100 text-yellow-800' : 
                                                                  notice.type === 'Achievements' ? 'bg-green-100 text-green-800' : 
                                                                  'bg-gray-100 text-gray-800'}">
                                                                ${notice.type}
                                                            </span>
                                                        ` : ''}
                                                        ${notice.type === 'UpcomingEvents' ? `
                                                            ${notice.event_date && notice.event_date >= new Date().toISOString() ? `
                                                                <span class="ml-2 bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Upcoming</span>
                                                            ` : ''}
                                                            ${notice.event_date && notice.event_date < new Date().toISOString() ? `
                                                                <span class="ml-2 bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Past</span>
                                                            ` : ''}
                                                        ` : ''}
                                                    </div>
                                                    <span class="text-gray-500 text-sm">${new Date(notice.created_at).toLocaleDateString()}</span>
                                                </div>
                                                
                                                <h3 class="text-xl font-bold text-gray-800 mb-3">${notice.title}</h3>

                                                ${notice.event_date ? `
                                                    <div class="flex items-center text-sm text-gray-600 mb-3">
                                                        <i class="far fa-calendar-alt mr-2 text-green-500"></i>
                                                        Event Date: ${new Date(notice.event_date).toLocaleDateString()}
                                                    </div>
                                                ` : ''}

                                                <p class="text-gray-600 mb-4">
                                                    ${notice.description.length > 150 ? notice.description.substring(0, 150) + '...' : notice.description}
                                                </p>

                                                ${notice.location || notice.tags ? `
                                                    <div class="flex flex-wrap gap-2 mb-4">
                                                        ${notice.location ? `
                                                            <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full flex items-center">
                                                                <i class="fas fa-map-marker-alt mr-1 text-green-500"></i>
                                                                ${notice.location}
                                                            </span>
                                                        ` : ''}
                                                        ${notice.tags ? `
                                                            ${notice.tags.split(',').map(tag => `
                                                                <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">
                                                                    #${tag.trim()}
                                                                </span>
                                                            `).join('')}
                                                        ` : ''}
                                                    </div>
                                                ` : ''}

                                                <a href="/notices/${notice.id}" class="inline-flex items-center text-green-600 hover:text-green-800 font-medium transition-colors">
                                                    Read More
                                                    <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                                </a>
                                            </div>
                                        </div>
                                    `;

                                    noticesContainer.insertAdjacentHTML('beforeend', noticeHtml);
                                });

                                // Update the load more button
                                if (data.notices.next_page_url) {
                                    loadMoreBtn.setAttribute('data-next-page', parseInt(nextPage) + 1);
                                    loadMoreBtn.disabled = false;
                                } else {
                                    loadMoreBtn.remove();
                                }
                            } else {
                                // No more notices to load
                                loadMoreBtn.remove();
                            }

                            // Hide loading spinner
                            document.getElementById('loading-spinner').classList.add('hidden');
                        })
                        .catch(error => {
                            console.error('Error loading more notices:', error);
                            document.getElementById('loading-spinner').classList.add('hidden');
                            loadMoreBtn.disabled = false;
                        });
                });
            }
        });
    </script>
@endsection