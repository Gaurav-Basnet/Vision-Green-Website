@extends("master")
@section('title', 'Search - Vision Green')
@section('content')



    <div class="mobile-search-container bg-gray-50 min-h-screen">
        <!-- Search Header -->
        <div class="search-header bg-white sticky top-0 z-10 shadow-sm">
            <div class="search-bar-container px-4 py-3">
                <form action="/search" method="GET" class="relative flex items-center">
                    <button type="submit" class="search-icon absolute left-3 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                    <input type="text" name="q" placeholder="Search for organic products..."
                        class="search-input w-full pl-10 pr-10 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                        autofocus>
                    <button type="button" class="clear-search absolute right-3 text-gray-500 hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- Search Content - Shows when no search is performed yet -->
        <div class="search-content px-4 py-4" id="initialSearchContent">
            <!-- Recent Searches -->
            <div class="search-section mb-6">
                <div class="section-header flex justify-between items-center mb-3">
                    <h3 class="text-lg font-semibold text-gray-800">List Search</h3>
                </div>
                <div class="links-list space-y-2">
                    <a href="/"
                        class="block p-3 bg-white rounded-lg shadow-sm hover:bg-gray-50 transition-colors duration-200">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-3" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg>
                            <span class="text-gray-800 font-medium">Home</span>
                        </div>
                    </a>
                    <a href="/about"
                        class="block p-3 bg-white rounded-lg shadow-sm hover:bg-gray-50 transition-colors duration-200">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-3" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-800 font-medium">About</span>
                        </div>
                    </a>
                    <a href="/contact"
                        class="block p-3 bg-white rounded-lg shadow-sm hover:bg-gray-50 transition-colors duration-200">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-3" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            <span class="text-gray-800 font-medium">Contact</span>
                        </div>
                    </a>
                    <a href="/notice"
                        class="block p-3 bg-white rounded-lg shadow-sm hover:bg-gray-50 transition-colors duration-200">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-3" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-800 font-medium">Notice</span>
                        </div>
                    </a>
                    <a href="/vacancy"
                        class="block p-3 bg-white rounded-lg shadow-sm hover:bg-gray-50 transition-colors duration-200">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-3" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                            </svg>
                            <span class="text-gray-800 font-medium">Vacancy</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Popular Searches -->
        <div class="search-section mb-6 px-4 py-4">
            <div class="section-header mb-3">
                <h3 class="text-lg font-semibold text-gray-800">Popular Searches</h3>
            </div>
            <div class="popular-searches flex flex-wrap gap-2">
                <button class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200">Project</button>
                <button class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200">Volunter</button>
                <button class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200">Team</button>
                <button class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200">Contact</button>
                <button class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200">About</button>
                <button class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200"></button>
            </div>
        </div>
    </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.querySelector('.search-input');
            const clearSearchBtn = document.querySelector('.clear-search');
            const initialContent = document.getElementById('initialSearchContent');
            const resultsContent = document.getElementById('searchResultsContent'); // optional
            const searchQueryDisplay = document.getElementById('searchQueryDisplay'); // optional

            // Section maps for each page
            const pageSectionMaps = {
                '/': {
                    "mission": "mission-vision",
                    "vision": "mission-vision",
                    "team": "team-section",
                    "focus": "focus-area",
                    "area": "focus-area",
                    "impact": "impact",
                    "project": "project",
                    "volunteer": "involved-section",
                    "donate": "involved-section",
                    "advocate": "involved-section"
                },
                '/about': {
                    "values": "core-values",
                    "history": "our-history",
                    "milestone": "milestones",
                    "impact": "impact-stats",
                    "partners": "partners",
                    "join": "cta-section",
                    "story": "hero-section"
                },

                '/contact': {
                    "contact": "contact-form",
                    "location": "map",
                    "teaminformation": "team-info",
                    "email": "contact-info",
                    "phone": "contact-info",
                    "address": "contact-info",
                    "question": "faq"
                },
                '/notice': {
                    // Notice categories
                    "event": "notice-events",
                    "events": "notice-events",
                    "alert": "notice-alerts",
                    "alerts": "notice-alerts",
                    "volunteer": "notice-volunteer",
                    "volunteers": "notice-volunteer",
                    "report": "notice-reports",
                    "reports": "notice-reports",

                    // Specific notices
                    "tree planting": "notice-1",
                    "community event": "notice-1",
                    "pokhara": "notice-2",
                    "new office": "notice-2",
                    "monsoon": "notice-3",
                    "workshop": "notice-3",

                    // Sections
                    "categories": "notice-categories",
                    "archive": "notice-archive",
                    "links": "notice-links",
                    "subscribe": "notice-newsletter"
                },
                '/vacancy': {
                    // Job positions
                    "manager": "job-1",
                    "conservation": "job-1",
                    "project manager": "job-1",
                    "research": "job-2",
                    "environmental": "job-2",
                    "officer": "job-2",

                    // Job types
                    "full time": "job-types",
                    "contract": "job-types",
                    "part time": "job-types",

                    // Locations
                    "kathmandu": "job-locations",
                    "pokhara": "job-locations",

                    // Benefits section
                    "benefits": "work-benefits",
                    "why work": "work-benefits",
                    "perks": "work-benefits",

                    // Hiring process
                    "process": "hiring-process",
                    "apply": "hiring-process",
                    "interview": "hiring-process",
                    "screening": "hiring-process",

                    // General application
                    "general": "general-application",
                    "dream job": "general-application",
                    "spontaneous": "general-application",

                    // Equal opportunity
                    "equal": "equal-opportunity",
                    "diversity": "equal-opportunity",
                    "inclusion": "equal-opportunity"
                },
                "/publication": {
                    // Main sections
                    "reports": "reports",
                    "research": "reports",
                    "studies": "reports",
                    "resources": "resources",
                    "education": "resources",
                    "materials": "resources",
                    "policy": "policy-briefs",
                    "briefs": "policy-briefs",
                    "recommendations": "policy-briefs",
                    "archive": "publication-archive",
                    "collection": "publication-archive",

                    // Report types
                    "biodiversity": "featured-reports",
                    "climate": "featured-reports",
                    "agriculture": "featured-reports",
                    "himalayan": "featured-reports",

                    // Resource types
                    "guides": "educational-resources",
                    "toolkits": "educational-resources",
                    "handbooks": "educational-resources",
                    "activities": "educational-resources",
                    "children": "educational-resources",

                    // Content types
                    "pdf": "publication-archive",
                    "download": "publication-archive",
                    "subscribe": "cta-section",
                    "updates": "cta-section",
                    "notifications": "cta-section",

                    // Topics
                    "forest": "policy-briefs",
                    "energy": "policy-briefs",
                    "wildlife": "policy-briefs",
                    "tourism": "publication-archive",
                    "waste": "publication-archive",
                    "panda": "publication-archive"
                },
                "/newsletter": {
                    // Main sections
                    "latest": "latest-edition",
                    "current": "latest-edition",
                    "recent": "latest-edition",
                    "archive": "newsletter-archive",
                    "past": "newsletter-archive",
                    "previous": "newsletter-archive",
                    "testimonials": "testimonials",
                    "reviews": "testimonials",
                    "feedback": "testimonials",

                    // Benefits section
                    "benefits": "newsletter-benefits",
                    "why subscribe": "newsletter-benefits",
                    "advantages": "newsletter-benefits",
                    "features": "newsletter-benefits",

                    // Interest categories
                    "environment": "interest-environment",
                    "conservation": "interest-environment",
                    "energy": "interest-energy",
                    "renewable": "interest-energy",
                    "education": "interest-education",
                    "school": "interest-education",
                    "events": "interest-events",
                    "volunteering": "interest-events",

                },
                "/privacy": {
                    // Main policy sections
                    "privacy": "privacy-policy",
                    "data": "privacy-policy",
                    "gdpr": "privacy-policy",
                    "environment": "environmental-policy",
                    "green": "environmental-policy",
                    "sustainability": "environmental-policy",
                    "donor": "donor-policy",
                    "donation": "donor-policy",
                    "giving": "donor-policy",

                    // Key policy elements
                    "rights": "donor-rights",
                    "security": "data-security",
                    "harassment": "anti-harassment",
                    "report": "reporting-violations",
                    "updates": "policy-updates",
                    "changes": "policy-updates",
                    "revisions": "policy-updates",

                    // Contact
                    "questions": "cta-section",
                    "contact": "cta-section",
                    "compliance": "cta-section"
                },
                "/terms": {
                    "condition": "term-content",
                    "term": "term-content",
                    "terms": "term-content",
                    "agreement": "terms-content",
                    "legal": "terms-content",
                    "conditions": "term-content"
                },
                "/impact": {
                    // Main sections
                    "impact": "key-metrics",
                    "results": "key-metrics",
                    "metrics": "key-metrics",
                    "numbers": "key-metrics",
                    "achievements": "key-metrics",

                    // Content sections
                    "stories": "impact-stories",
                    "case": "impact-stories",
                    "examples": "impact-stories",
                    "geographic": "geographic-reach",
                    "regions": "geographic-reach",
                    "locations": "geographic-reach",
                    "report": "annual-report",
                    "financial": "annual-report",
                    "download": "annual-report",

                    // Action sections
                    "participate": "cta-section",
                    "donate": "cta-section",
                    "volunteer": "cta-section",
                    "join": "cta-section",
                    "support": "cta-section"
                },
                "/annual": {
                    // Main sections
                    "report": "download-report",
                    "annual": "download-report",
                    "financial": "report-highlight",
                    "finances": "report-highlight",
                    "projects": "report-highlight",
                    "initiatives": "report-highlight",
                    "download": "download-report",
                    "future": "looking-ahead",
                    "goals": "looking-ahead",
                    "2024": "looking-ahead",

                    // Report components
                    "highlights": "year-in-review",
                    "achievements": "year-in-review",
                    "stats": "year-in-review",
                    "numbers": "year-in-review",
                    "income":"report-highlight" ,
                    "expenses":"report-highlight" ,
                    "expenditure": "report-highlight"
                }
            };

            const currentPath = window.location.pathname;

            // Handle form submit
            document.querySelector('form').addEventListener('submit', function (e) {
                e.preventDefault();
                const query = searchInput.value.toLowerCase().trim();
                if (!query) return; // Do nothing if empty

                // 1. Try current page sections
                const currentPageMap = pageSectionMaps[currentPath] || {};
                for (const keyword in currentPageMap) {
                    if (query.includes(keyword)) {
                        const sectionId = currentPageMap[keyword];
                        const section = document.getElementById(sectionId);
                        if (section) {
                            section.scrollIntoView({ behavior: 'smooth' });
                            section.classList.add('highlight-section');
                            setTimeout(() => {
                                section.classList.remove('highlight-section');
                            }, 2000);
                            return;
                        }
                    }
                }

                // 2. Try other pages
                for (const path in pageSectionMaps) {
                    if (path !== currentPath) {
                        const pageMap = pageSectionMaps[path];
                        for (const keyword in pageMap) {
                            if (query.includes(keyword)) {
                                window.location.href = path + "#" + pageMap[keyword];
                                return;
                            }
                        }
                    }
                }

                // 3. Show local search results if container exists
                if (resultsContent && searchQueryDisplay) {
                    searchQueryDisplay.textContent = searchInput.value;
                    if (initialContent) initialContent.style.display = 'none';
                    resultsContent.style.display = 'block';
                } else {
                    // 4. Fallback: redirect to normal search
                    window.location.href = "/search?q=" + encodeURIComponent(query);
                }
            });

            // Show/hide clear button
            searchInput.addEventListener('input', function () {
                if (this.value.length > 0) {
                    clearSearchBtn.classList.remove('hidden');
                } else {
                    clearSearchBtn.classList.add('hidden');
                }
            });

            // Clear search input
            clearSearchBtn.addEventListener('click', function () {
                searchInput.value = '';
                this.classList.add('hidden');
                if (initialContent) initialContent.style.display = 'block';
                if (resultsContent) resultsContent.style.display = 'none';
            });

            // Popular search buttons
            document.querySelectorAll('.popular-searches button').forEach(btn => {
                btn.addEventListener('click', function () {
                    const searchTerm = this.textContent.trim();
                    if (!searchTerm) return;
                    searchInput.value = searchTerm;
                    document.querySelector('form').dispatchEvent(new Event('submit'));
                    clearSearchBtn.classList.remove('hidden');
                });
            });
        });
    </script> 
    <style>
        .highlight-section {
            animation: highlight 2s ease;
            box-shadow: 0 0 0 2px rgba(5, 150, 105, 0.5);
        }

        @keyframes highlight {
            0% {
                background-color: rgba(5, 150, 105, 0.1);
            }

            50% {
                background-color: rgba(5, 150, 105, 0.3);
            }

            100% {
                background-color: transparent;
            }
        }
    </style>
@endsection