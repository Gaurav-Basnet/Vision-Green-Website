<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1, user-scalable=no">
    <!-- <link rel="icon" type="image/png" href="assests\images\icon.jpg"> -->

    <title>Vision Green Organization Nepal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-green': '#69ad0ad8',
                        'light-green': '#81c784',
                        'dark-green': '#0a2a1d  ',
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes pulseSlow {

            0%,
            100% {
                opacity: 0.1;
            }

            50% {
                opacity: 0.15;
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        .animate-pulse-slow {
            animation: pulseSlow 6s infinite;
        }

        .animate-delay-100 {
            animation-delay: 100ms;
        }

        .animate-delay-300 {
            animation-delay: 300ms;
        }

        .animate-delay-500 {
            animation-delay: 500ms;
        }

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

        /* Custom styles for notifications */
        .notification {
            position: fixed;
            top: 100px;
            right: 20px;
            padding: 16px 24px;
            border-radius: 8px;
            color: white;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            display: flex;
            align-items: center;
            gap: 12px;
            transform: translateX(100%);
            transition: transform 0.5s ease;
            max-width: 400px;
        }

        .notification.show {
            transform: translateX(0);
        }

        .notification-success {
            background-color: #10B981;
            border-left: 4px solid #059669;
        }

        .notification-error {
            background-color: #EF4444;
            border-left: 4px solid #DC2626;
        }

        .notification-icon {
            font-size: 20px;
        }
    </style>

</head>

<body class="bg-gray-50">
    <!-- Success Message -->
    @if(session('success'))
        <div id="successMessage" class="notification notification-success">
            <span class="notification-icon">✓</span>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <!-- Error Message -->
    @if(session('error'))
        <div id="errorMessage" class="notification notification-error">
            <span class="notification-icon">✕</span>
            <span>{{ session('error') }}</span>
        </div>
    @endif

    <!-- Top Contact Bar -->
    <div class="bg-black text-gray-200 py-2 px-4 text-sm border-b border-gray-800 z-51">
        <div class="container mx-auto flex flex-row justify-between items-center gap-2">
            <!-- Left side - Phone (visible on all screens) -->
            <div class="flex items-center gap-2 md:hidden group">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 text-blue-400 group-hover:text-blue-300 transition-colors" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <a href="tel:+9779800000000" class="hover:text-blue-300 transition-colors text-xs">+977-98XXXXXXXX</a>
            </div>

            <!-- Center - Search (mobile only with expand animation) -->
            <!-- <div class="flex items-center md:hidden mx-auto relative">
                <div class="relative transition-all duration-300 ease-in-out" id="search-container">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input type="text" placeholder="Search..."
                        class="bg-gray-900 text-white pl-10 pr-4 py-1.5 rounded-full text-xs w-32 focus:w-48 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300 ease-in-out"
                        id="mobile-search">
                </div>
            </div> -->

            <!-- Mobile Language Toggle -->
            <div class=" md:hidden relative group" id="language-toggle-container">
                <button
                    class="flex items-center gap-1 px-2 py-1 text-xs rounded hover:bg-gray-900 transition-colors duration-200"
                    id="language-button">
                    <span id="current-language" class="font-medium">EN</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-3 w-3 text-gray-400 group-hover:text-gray-300 transition-transform duration-200 group-hover:rotate-180"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div class="hidden group-hover:block absolute right-0 mt-1 w-32 bg-black border border-gray-800 rounded-md shadow-lg z-10 transition-all duration-200 origin-top"
                    id="language-dropdown">
                    <a href="#"
                        class="language-option block px-3 py-2 hover:bg-gray-900 text-sm flex items-center gap-2 transition-colors duration-150"
                        data-lang="en">
                        <span class="w-5">🇬🇧</span>
                        <span>English</span>
                    </a>
                    <a href="#"
                        class="language-option block px-3 py-2 hover:bg-gray-900 text-sm flex items-center gap-2 transition-colors duration-150"
                        data-lang="ne">
                        <span class="w-5">🇳🇵</span>
                        <span>नेपाली</span>
                    </a>
                </div>
            </div>

            <!-- Desktop layout (hidden on mobile) -->
            <div class="hidden md:flex flex-row flex-wrap justify-between items-center w-full gap-4">
                <div class="flex items-center gap-6">
                    <div class="flex items-center gap-2 group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 text-blue-400 group-hover:text-blue-300 transition-colors" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="tel:+9779800000000" class="hover:text-blue-300 transition-colors">+977-98XXXXXXXX</a>
                    </div>
                    <div class="flex items-center gap-2 group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 text-blue-400 group-hover:text-blue-300 transition-colors" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:info@visiongreen.org.np"
                            class="hover:text-blue-300 transition-colors">info@visiongreen.org.np</a>
                    </div>
                </div>

                <div class="flex items-center gap-6">
                    <!-- Language Toggle -->
                    <div class="relative group">
                        <button class="flex items-center gap-1 hover:text-blue-300 transition-colors cursor-pointer">
                            <div class="flex items-center gap-1">
                                <span class="font-medium">English</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-3 w-3 text-gray-400 group-hover:text-gray-300 transition-transform duration-200 group-hover:rotate-180"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>

                        <!-- Dropdown Menu -->
                        <div
                            class="hidden group-hover:block absolute top-full left-0 mt-1 w-40 bg-black border border-gray-800 rounded-md shadow-lg z-10 transition-all duration-200 origin-top">
                            <a href="#"
                                class="language-option flex items-center gap-2 px-3 py-2 hover:bg-gray-900 text-sm transition-colors duration-150"
                                data-lang="en">
                                <span class="w-5">🇬🇧</span>
                                <span>English</span>
                            </a>
                            <a href="#"
                                class="language-option flex items-center gap-2 px-3 py-2 hover:bg-gray-900 text-sm transition-colors duration-150"
                                data-lang="ne">
                                <span class="w-5">🇳🇵</span>
                                <span>नेपाली</span>
                            </a>
                        </div>
                    </div>

                    <!-- Hidden on mobile, visible from md breakpoint up -->
                    <div class="hidden md:flex items-center relative">
                        <div class="relative transition-all duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            <input type="text" placeholder="Search..."
                                class="bg-gray-900 text-white pl-10 pr-4 py-1.5 rounded-full text-xs w-40 focus:w-56 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300 ease-in-out"
                                id="desktop-search">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="bg-white py-0 px-1 shadow-md sticky top-0 z-50">
        <div class="max-w-full px-4 sm:px-4 lg:px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <img src="assests/logo.png" class="w-auto h-10" alt="Logo">

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/"
                        class="text-gray-800 px-3 py-4 transition-colors hover:text-[#2e7d32] font-medium">Home</a>
                    <a href="/about"
                        class="text-gray-800 px-3 py-4 transition-colors hover:text-[#2e7d32] font-medium">About</a>

                    <!-- About Dropdown -->
                    <div class="relative group">
                        <button
                            class="text-gray-800 hover:text-[#2e7d32] px-3 py-4 transition-colors flex items-center font-medium">
                            <a href="/publication"
                                class="text-gray-800 px-3 py-4 transition-colors hover:text-[#2e7d32] font-medium">Publication</a>
                            <svg class="w-4 h-4 ml-1 text-[#689f38]" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div
                            class="absolute left-0 mt-0 w-48 bg-[#e8f5e9] shadow-lg rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 border border-gray-100">
                            <a href="/newsletter"
                                class="block px-4 py-2 text-gray-700 hover:bg-[#c8e6c9] hover:text-[#1b5e20]">Newsletter</a>
                            <a href="/privacy"
                                class="block px-4 py-2 text-gray-700 hover:bg-[#c8e6c9] hover:text-[#1b5e20]">Privacy &
                                Policies</a>
                            <a href="/terms"
                                class="block px-4 py-2 text-gray-700 hover:bg-[#c8e6c9] hover:text-[#1b5e20]">Terms &
                                Condition</a>

                            <a href="/impact"
                                class="block px-4 py-2 text-gray-700 hover:bg-[#c8e6c9] hover:text-[#1b5e20]">Impact
                                Report</a>
                            <a href="/annual"
                                class="block px-4 py-2 text-gray-700 hover:bg-[#c8e6c9] hover:text-[#1b5e20]">Annual
                                Report</a>

                        </div>
                    </div>


                    <a href="/notice"
                        class="text-gray-800 hover:text-[#2e7d32] px-3 py-4 transition-colors font-medium">Notice</a>
                    <a href="/vacancy"
                        class="text-gray-800 hover:text-[#2e7d32] px-3 py-4 transition-colors font-medium">Vacancy</a>
                    <a href="/contact"
                        class="text-gray-800 hover:text-[#2e7d32] px-3 py-4 transition-colors font-medium">Contact</a>

                    <!-- Login Button - Desktop -->
                    <a href="/login"
                        class="ml-4 bg-[#2e7d32] text-white px-4 py-2 rounded-md hover:bg-[#1b5e20] transition-colors font-medium shadow-md hover:shadow-lg">
                        Login
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center gap-4">
                    <button id="mobileMenuButton" class="text-gray-800 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden bg-[#2e7d32] overflow-hidden transition-all duration-300 max-h-0">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/" class="block px-3 py-2 text-white hover:bg-[#1b5e20] rounded-md">Home</a>
                <a href="/about" class="block px-3 py-2 text-white hover:bg-[#1b5e20] rounded-md">About Us</a>

                <!-- Mobile About Dropdown -->
                <div class="relative">
                    <button id="aboutMobileDropdownButton"
                        class="w-full text-left px-3 py-2 text-white hover:bg-[#1b5e20] rounded-md flex justify-between items-center">
                        Publication
                        <svg id="aboutMobileDropdownIcon" class="w-4 h-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="aboutMobileDropdown"
                        class="pl-4 mt-1 space-y-1 max-h-0 overflow-hidden transition-all duration-300">
                        <a href="/newsletter"
                            class="block px-3 py-2 text-[#e8f5e9] hover:bg-[#1b5e20] rounded-md">Newsletter</a>
                        <a href="/privacy" class="block px-3 py-2 text-[#e8f5e9] hover:bg-[#1b5e20] rounded-md">Privacy
                            & Policy</a>
                        <a href="/terms" class="block px-3 py-2 text-[#e8f5e9] hover:bg-[#1b5e20] rounded-md">Terms &
                            Condition</a>

                        <a href="/impact" class="block px-3 py-2 text-[#e8f5e9] hover:bg-[#1b5e20] rounded-md">Impact
                            Report</a>
                        <a href="/annual" class="block px-3 py-2 text-[#e8f5e9] hover:bg-[#1b5e20] rounded-md">Annual
                            Report</a>

                    </div>
                </div>



                <a href="notice" class="block px-3 py-2 text-white hover:bg-[#1b5e20] rounded-md">Notice</a>
                <a href="/vacancy" class="block px-3 py-2 text-white hover:bg-[#1b5e20] rounded-md">Vacancy</a>
                <a href="/contact" class="block px-3 py-2 text-white hover:bg-[#1b5e20] rounded-md">Contact Us</a>

                <!-- Login Button - Mobile (inside menu) -->
                <a href="/login"
                    class="block w-full text-center bg-white text-[#2e7d32] px-3 py-2 rounded-md hover:bg-[#e8f5e9] transition-colors mt-2 font-medium">
                    Login
                </a>
            </div>
        </div>
    </nav>

    <section>
        @yield('content')

    </section>

    <footer class="bg-[#0a2a1d] text-gray-300 pt-16 pb-8">
        <div class="container px-5 max-w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Organization Info -->
                <div class="space-y-6">
                    <div class="flex items-center ">
                        <img src="assests/logo.png" alt="Vision Green Logo" class="md:h-auto md:w-auto h-20 w-auto">
                    </div>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        Protecting Nepal's natural heritage and empowering communities for a sustainable future through
                        environmental conservation.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-500 hover:text-[#4ade80] transition-colors duration-200 text-lg">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-[#4ade80] transition-colors duration-200 text-lg">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-[#4ade80] transition-colors duration-200 text-lg">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-[#4ade80] transition-colors duration-200 text-lg">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4
                        class="text-base font-medium mb-6 text-white uppercase tracking-wider border-b border-[#1e3d2d] pb-2">
                        Explore</h4>
                    <ul class="space-y-3">
                        <li><a href="/"
                                class="text-gray-400 hover:text-[#4ade80] transition-colors duration-200 flex items-center text-sm">
                                <span class="w-2 h-2 bg-[#4ade80] rounded-full mr-3"></span> Home</a></li>
                        <li><a href="/about"
                                class="text-gray-400 hover:text-[#4ade80] transition-colors duration-200 flex items-center text-sm">
                                <span class="w-2 h-2 bg-[#4ade80] rounded-full mr-3"></span> About</a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-[#4ade80] transition-colors duration-200 flex items-center text-sm">
                                <span class="w-2 h-2 bg-[#4ade80] rounded-full mr-3"></span> Our Projects</a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-[#4ade80] transition-colors duration-200 flex items-center text-sm">
                                <span class="w-2 h-2 bg-[#4ade80] rounded-full mr-3"></span> Get Involved</a></li>
                        <li><a href="/contact"
                                class="text-gray-400 hover:text-[#4ade80] transition-colors duration-200 flex items-center text-sm">
                                <span class="w-2 h-2 bg-[#4ade80] rounded-full mr-3"></span> Contact</a></li>
                        <li><a href="/blog"
                                class="text-gray-400 hover:text-[#4ade80] transition-colors duration-200 flex items-center text-sm">
                                <span class="w-2 h-2 bg-[#4ade80] rounded-full mr-3"></span> blog</a></li>
                        <li><a href="/gallery"
                                class="text-gray-400 hover:text-[#4ade80] transition-colors duration-200 flex items-center text-sm">
                                <span class="w-2 h-2 bg-[#4ade80] rounded-full mr-3"></span> gallery</a></li>
                    </ul>
                </div>

                <!-- Programs -->
                <div>
                    <h4
                        class="text-base font-medium mb-6 text-white uppercase tracking-wider border-b border-[#1e3d2d] pb-2">
                        Programs</h4>
                    <ul class="space-y-3">
                        <li><a href="#"
                                class="text-gray-400 hover:text-[#4ade80] transition-colors duration-200 flex items-center text-sm">
                                <span class="w-2 h-2 bg-[#4ade80] rounded-full mr-3"></span> Habitat Restoration</a>
                        </li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-[#4ade80] transition-colors duration-200 flex items-center text-sm">
                                <span class="w-2 h-2 bg-[#4ade80] rounded-full mr-3"></span> Biodiversity</a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-[#4ade80] transition-colors duration-200 flex items-center text-sm">
                                <span class="w-2 h-2 bg-[#4ade80] rounded-full mr-3"></span> Youth Empowerment</a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-[#4ade80] transition-colors duration-200 flex items-center text-sm">
                                <span class="w-2 h-2 bg-[#4ade80] rounded-full mr-3"></span> Research</a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-[#4ade80] transition-colors duration-200 flex items-center text-sm">
                                <span class="w-2 h-2 bg-[#4ade80] rounded-full mr-3"></span> Advocacy</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4
                        class="text-base font-medium mb-6 text-white uppercase tracking-wider border-b border-[#1e3d2d] pb-2">
                        Contact</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-0.5 mr-3 text-[#4ade80] text-sm"></i>
                            <span class="text-gray-400 text-sm">Kathmandu, Nepal</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone mt-0.5 mr-3 text-[#4ade80] text-sm"></i>
                            <span class="text-gray-400 text-sm">
                                <a href="tel:+9771234567890"
                                    class="hover:text-[#4ade80] transition-colors">+977-1234567890</a>
                            </span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-0.5 mr-3 text-[#4ade80] text-sm"></i>
                            <span class="text-gray-400 text-sm">
                                <a href="mailto:info@visiongreen.org.np"
                                    class="hover:text-[#4ade80] transition-colors">info@visiongreen.org.np</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-[#1e3d2d] my-10"></div>

            <!-- Copyright -->
            <div class="flex flex-col md:flex-row justify-between items-center text-xs text-gray-500">
                <p>&copy; 2023 Vision Green Organization. All rights reserved.</p>
                <div class="mt-4 md:mt-0 flex space-x-4">
                    <a href="/privacy" class="hover:text-[#4ade80] transition-colors">Privacy Policy</a>
                    <span>•</span>
                    <a href="/terms" class="hover:text-[#4ade80] transition-colors">Terms of Service</a>
                    <span>•</span>
                    <a href="/sitemap" class="hover:text-[#4ade80] transition-colors">Sitemap</a>
                </div>
            </div>
        </div> <br class="block md:hidden"><br class="block md:hidden"><br class="block md:hidden">
    </footer>



    <!-- Mobile Bottom Menu Bar - Compact Version -->
    <div
        class="md:hidden fixed py-3 rounded-t-xl bottom-0 left-1 right-1 bg-white shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.1)] z-50">
        <div class="flex justify-around items-center py-1">
            <!-- Home Button -->
            <a href="/" class="flex flex-col items-center px-1 group transition-all duration-200">
                <div
                    class="p-1 rounded-full group-hover:bg-green-50 group-[.active]:bg-green-100 transition-all duration-300 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 text-gray-500 group-hover:text-green-600 group-[.active]:text-green-600 transition-colors duration-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </div>
                <span
                    class="text-[11px] mt-0.5 text-gray-500 group-[.active]:text-green-600 font-medium transition-colors duration-300">Home</span>
            </a>

            <!-- Search Button -->
            <a href="/search" class="flex flex-col items-center px-1 group transition-all duration-200">
                <div
                    class="p-1 rounded-full group-hover:bg-green-50 group-[.active]:bg-green-100 transition-all duration-300 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 text-gray-500 group-hover:text-green-600 group-[.active]:text-green-600 transition-colors duration-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <span
                    class="text-[11px] mt-0.5 text-gray-500 group-[.active]:text-green-600 font-medium transition-colors duration-300">Search</span>
            </a>

            <!-- Projects Button -->
            <a href="/project" class="flex flex-col items-center px-1 group transition-all duration-200">
                <div
                    class="p-1 rounded-full group-hover:bg-green-50 group-[.active]:bg-green-100 transition-all duration-300 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 text-gray-500 group-hover:text-green-600 group-[.active]:text-green-600 transition-colors duration-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </div>
                <span
                    class="text-[11px] mt-0.5 text-gray-500 group-[.active]:text-green-600 font-medium transition-colors duration-300">Projects</span>
            </a>

            <!-- WhatsApp Button -->
            <a href="https://wa.me/1234567890"
                class="flex flex-col items-center px-1 group transition-all duration-200">
                <div
                    class="p-1 rounded-full group-hover:bg-green-50 group-[.active]:bg-green-100 transition-all duration-300 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 text-gray-500 group-hover:text-green-600 group-[.active]:text-green-600 transition-colors duration-300"
                        viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                    </svg>
                </div>
                <span
                    class="text-[11px] mt-0.5 text-gray-500 group-[.active]:text-green-600 font-medium transition-colors duration-300">WhatsApp</span>
            </a>
        </div>
    </div>


    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script src="js/index.js"></script>

</body>

</html>