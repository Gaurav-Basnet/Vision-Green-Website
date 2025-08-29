<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision Green Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'vision-green': {
                            '50': '#f0fdf4',
                            '100': '#dcfce7',
                            '200': '#bbf7d0',
                            '300': '#86efac',
                            '400': '#4ade80',
                            '500': '#22c55e',
                            '600': '#16a34a',
                            '700': '#15803d',
                            '800': '#166534',
                            '900': '#14532d',
                        }
                    },
                    transitionProperty: {
                        'width': 'width',
                        'height': 'height',
                        'transform': 'transform'
                    },
                    transitionDuration: {
                        '300': '300ms',
                        '500': '500ms'
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom CSS to hide scrollbar but keep functionality */
        .sidebar-scroll {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .sidebar-scroll::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari and Opera */
        }

        .rotate-90 {
            transform: rotate(90deg);
        }

        .submenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .submenu.open {
            max-height: 500px;
            transition: max-height 0.5s ease-in;
        }

        /* Animation classes */
        .animate-fade-in {
            animation: fadeIn 0.2s ease-out forwards;
        }

        .animate-fade-out {
            animation: fadeOut 0.2s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px) scale(0.95);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
                transform: translateY(0) scale(1);
            }

            to {
                opacity: 0;
                transform: translateY(-10px) scale(0.95);
            }
        }

        /* Prevent transitions during initial load */
        .preload * {
            transition: none !important;
        }
        
        /* Custom styles for notifications */
        .notification {
            position: fixed;
            top: 20px;
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

<body class="bg-vision-green-50 font-sans preload">
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

    <div class="flex h-screen overflow-hidden ">
        <!-- Desktop Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-[300px] bg-vision-green-800 transition-all duration-300 ease-in-out">
                <div class="flex items-center h-16 px-4 bg-vision-green-900">
                    <img src="assests/logo.png" alt="Vision Green Logo" class="h-10 w-auto mx-4">
                </div>
                <div class="flex flex-col flex-grow px-4 py-4 overflow-y-auto sidebar-scroll">
                    <nav class="flex-1 space-y-1">
                        <a href="/layout"
                            class="flex items-center px-4 py-2 text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md group transition-all duration-200">
                            <i class="fas fa-leaf mr-3 transition-transform duration-200 group-hover:scale-110"></i>
                            Dashboard
                        </a>
                        <!-- Uploading Management -->
                        <div class="relative">
                            <button
                                class="w-full flex items-center justify-between px-4 py-2 text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md group transition-all duration-200 sidebar-dropdown">
                                <div class="flex items-center">
                                    <i
                                        class="fa fa-upload mr-3 transition-transform duration-200 group-hover:scale-110"></i>
                                    <span>Page Uploading</span>
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-200 transform"></i>
                            </button>
                            <div class="submenu ml-8 pl-2 border-l-2 border-vision-green-600">
                                <a href="/homeuploading"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">Home</a>
                                <a href="/aboutuploading"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">About</a>
                                <div class="relative">
                                    <button
                                        class="w-full flex items-center justify-between px-3 py-2 text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md group transition-all duration-200 sidebar-dropdown">
                                        <div class="flex items-center">
                                            <i
                                                class="transition-transform text-sm duration-200 group-hover:scale-110"></i>
                                            <a href="/publicationuploading" class="text-sm">Publication</a>
                                            <!-- <span class="text-sm">Publication</span> -->
                                        </div>
                                        <i
                                            class="fas fa-chevron-down text-sm transition-transform duration-200 transform"></i>
                                    </button>
                                    <div class="submenu ml-8 pl-2 border-l-2 border-vision-green-600">
                                        <a href="newsuploading"
                                            class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">
                                            Newsletter</a>
                                        <a href="privacyuploading"
                                            class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">
                                            Privacy & Policies</a>
                                        <a href="/termsuploading"
                                            class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">
                                            Teams & Condition</a>
                                        <a href="/impactsuploading"
                                            class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">
                                            Impact Report</a>
                                        <a href="/annualuploading"
                                            class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">
                                            Annual Report</a>
                                    </div>
                                </div>
                                <a href="/contactuploading"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">Contact</a>
                                <a href="/vacancyuploading"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">Vacancy</a>
                            </div>
                        </div>

                        <!-- Uploading  -->
                        <div class="relative">
                            <button
                                class="w-full flex items-center justify-between px-4 py-2 text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md group transition-all duration-200 sidebar-dropdown">
                                <div class="flex items-center">
                                    <i
                                        class="fa fa-upload mr-3 transition-transform duration-200 group-hover:scale-110"></i>
                                    <span> Uploading</span>
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-200 transform"></i>
                            </button>
                            <div class="submenu ml-8 pl-2 border-l-2 border-vision-green-600">
                                <a href="/team"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">Team
                                    Uploading</a>
                                <a href="/partneruploading"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">Patner
                                    Uploading</a>
                                <div class="relative">
                                    <a href="/newsletteruploading"
                                        class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">NewsLetter
                                        Uploading</a>
                                    <a href="/vacancyuploading"
                                        class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">Education
                                        Resource</a>
                                    <a href="/vacancyuploading"
                                        class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">Publication
                                        Archive</a>
                                </div>
                            </div>
                            <!-- Project Management -->
                            <div class="relative">
                                <button
                                    class="w-full flex items-center justify-between px-4 py-2 text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md group transition-all duration-200 sidebar-dropdown">
                                    <div class="flex items-center">
                                        <i
                                            class="fas fa-seedling mr-3 transition-transform duration-200 group-hover:scale-110"></i>
                                        <span>Projects</span>
                                    </div>
                                    <i
                                        class="fas fa-chevron-down text-xs transition-transform duration-200 transform"></i>
                                </button>
                                <div class="submenu ml-8 pl-2 border-l-2 border-vision-green-600">
                                    <a href="#"
                                        class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">Active
                                        Projects</a>
                                    <a href="#"
                                        class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">Completed
                                        Projects</a>
                                    <a href="#"
                                        class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">Upcoming
                                        Initiatives</a>
                                </div>
                            </div>

                            <!-- Sustainability Metrics -->
                            <a href="#"
                                class="flex items-center px-4 py-2 text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md group transition-all duration-200">
                                <i
                                    class="fas fa-chart-line mr-3 transition-transform duration-200 group-hover:scale-110"></i>
                                Sustainability Metrics
                            </a>

                            <!-- Community Engagement -->
                            <div class="relative">
                                <button
                                    class="w-full flex items-center justify-between px-4 py-2 text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md group transition-all duration-200 sidebar-dropdown">
                                    <div class="flex items-center">
                                        <i
                                            class="fas fa-users mr-3 transition-transform duration-200 group-hover:scale-110"></i>
                                        <span>Community</span>
                                    </div>
                                    <i
                                        class="fas fa-chevron-down text-xs transition-transform duration-200 transform"></i>
                                </button>
                                <div class="submenu ml-8 pl-2 border-l-2 border-vision-green-600">
                                    <a href="#"
                                        class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">Volunteers</a>
                                    <a href="#"
                                        class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">Partners</a>
                                    <a href="#"
                                        class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">Events</a>
                                </div>
                            </div>

                            <!-- Settings -->
                            <div class="relative">
                                <button
                                    class="w-full flex items-center justify-between px-4 py-2 text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md group transition-all duration-200 sidebar-dropdown">
                                    <div class="flex items-center">
                                        <i
                                            class="fas fa-cog mr-3 transition-transform duration-200 group-hover:scale-110"></i>
                                        <span>Settings</span>
                                    </div>
                                    <i
                                        class="fas fa-chevron-down text-xs transition-transform duration-200 transform"></i>
                                </button>
                                <div class="submenu ml-8 pl-2 border-l-2 border-vision-green-600">
                                    <a href="#"
                                        class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">User
                                        Settings</a>
                                    <a href="#"
                                        class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">System
                                        Settings</a>
                                    <a href="#"
                                        class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md transition-colors duration-150">Permissions</a>
                                </div>
                            </div>
                    </nav>
                </div>
                <div class="p-4 border-t border-vision-green-700">
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full transition-transform duration-200 hover:scale-105"
                            src="https://www.iconpacks.net/icons/2/free-user-icon-3296-thumb.png" alt="User avatar">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-white">Eco Manager</p>
                            <p class="text-xs font-medium text-vision-green-300">Admin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile sidebar -->
        <!-- Mobile sidebar -->
        <div class="md:hidden fixed inset-0 z-40 hidden" id="mobile-sidebar">
            <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity duration-300 ease-in-out"
                id="sidebar-overlay"></div>
            <div class="relative flex flex-col w-72 bg-vision-green-800 h-full transform transition-transform duration-300 ease-in-out -translate-x-full"
                id="sidebar-content">
                <div class="flex items-center h-16 px-4 bg-vision-green-900">
                    <img src="assests/logo.png" alt="Vision Green Logo" class="h-10 w-auto mx-4">

                    <button type="button"
                        class="ml-auto p-2 rounded-md text-vision-green-200 hover:text-white hover:bg-vision-green-700 focus:outline-none transition-colors duration-200"
                        id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="flex flex-col flex-grow px-4 py-4 overflow-y-auto sidebar-scroll">
                    <nav class="flex-1 space-y-1">
                        <a href="/layout"
                            class="flex items-center px-4 py-2 text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md group transition-all duration-200">
                            <i class="fas fa-leaf mr-3 transition-transform duration-200 group-hover:scale-110"></i>
                            Dashboard
                        </a>

                        <!-- Page Uploading -->
                        <div class="relative">
                            <button
                                class="w-full flex items-center justify-between px-4 py-2 text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md group transition-all duration-200 mobile-sidebar-dropdown">
                                <div class="flex items-center">
                                    <i
                                        class="fa fa-upload mr-3 transition-transform duration-200 group-hover:scale-110"></i>
                                    <span>Page Uploading</span>
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-200 transform"></i>
                            </button>
                            <div class="submenu ml-8 pl-2 border-l-2 border-vision-green-600">
                                <a href="/homeuploading"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md">Home</a>
                                <a href="/aboutuploading"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md">About</a>
                                <div class="relative">
                                    <button
                                        class="w-full flex items-center justify-between px-3 py-2 text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md group transition-all duration-200 mobile-sidebar-dropdown">
                                        <div class="flex items-center">
                                            <a href="/publicationuploading" class="text-sm">Publication</a>
                                        </div>
                                        <i
                                            class="fas fa-chevron-down text-sm transition-transform duration-200 transform"></i>
                                    </button>
                                    <div class="submenu ml-8 pl-2 border-l-2 border-vision-green-600">
                                        <a href="/newsuploading"
                                            class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Newsletter</a>
                                        <a href="/privacyuploading"
                                            class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Privacy
                                            & Policies</a>
                                        <a href="/termsuploading"
                                            class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Teams
                                            & Condition</a>
                                        <a href="/impactsuploading"
                                            class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Impact
                                            Report</a>
                                        <a href="/annualuploading"
                                            class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Annual
                                            Report</a>
                                    </div>
                                </div>
                                <a href="/contactuploading"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Contact</a>
                                <a href="/vacancyuploading"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Vacancy</a>
                            </div>
                        </div>

                        <!-- Uploading -->
                        <div class="relative">
                            <button
                                class="w-full flex items-center justify-between px-4 py-2 text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md group transition-all duration-200 mobile-sidebar-dropdown">
                                <div class="flex items-center">
                                    <i
                                        class="fa fa-upload mr-3 transition-transform duration-200 group-hover:scale-110"></i>
                                    <span>Uploading</span>
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-200 transform"></i>
                            </button>
                            <div class="submenu ml-8 pl-2 border-l-2 border-vision-green-600">
                                <a href="/team"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Team
                                    Uploading</a>
                                <a href="/partneruploading"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Partner
                                    Uploading</a>
                                <a href="/newsletteruploading"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">NewsLetter
                                    Uploading</a>
                                <a href="/vacancyuploading"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Education
                                    Resource</a>
                                <a href="/vacancyuploading"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Publication
                                    Archive</a>
                            </div>
                        </div>

                        <!-- Projects -->
                        <div class="relative">
                            <button
                                class="w-full flex items-center justify-between px-4 py-2 text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md group transition-all duration-200 mobile-sidebar-dropdown">
                                <div class="flex items-center">
                                    <i
                                        class="fas fa-seedling mr-3 transition-transform duration-200 group-hover:scale-110"></i>
                                    <span>Projects</span>
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-200 transform"></i>
                            </button>
                            <div class="submenu ml-8 pl-2 border-l-2 border-vision-green-600">
                                <a href="#"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Active
                                    Projects</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Completed
                                    Projects</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Upcoming
                                    Initiatives</a>
                            </div>
                        </div>

                        <!-- Sustainability Metrics -->
                        <a href="#"
                            class="flex items-center px-4 py-2 text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md group transition-all duration-200">
                            <i
                                class="fas fa-chart-line mr-3 transition-transform duration-200 group-hover:scale-110"></i>
                            Sustainability Metrics
                        </a>

                        <!-- Community -->
                        <div class="relative">
                            <button
                                class="w-full flex items-center justify-between px-4 py-2 text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md group transition-all duration-200 mobile-sidebar-dropdown">
                                <div class="flex items-center">
                                    <i
                                        class="fas fa-users mr-3 transition-transform duration-200 group-hover:scale-110"></i>
                                    <span>Community</span>
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-200 transform"></i>
                            </button>
                            <div class="submenu ml-8 pl-2 border-l-2 border-vision-green-600">
                                <a href="#"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Volunteers</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Partners</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Events</a>
                            </div>
                        </div>

                        <!-- Settings -->
                        <div class="relative">
                            <button
                                class="w-full flex items-center justify-between px-4 py-2 text-vision-green-200 hover:bg-vision-green-700 hover:text-white rounded-md group transition-all duration-200 mobile-sidebar-dropdown">
                                <div class="flex items-center">
                                    <i
                                        class="fas fa-cog mr-3 transition-transform duration-200 group-hover:scale-110"></i>
                                    <span>Settings</span>
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-200 transform"></i>
                            </button>
                            <div class="submenu ml-8 pl-2 border-l-2 border-vision-green-600">
                                <a href="#"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">User
                                    Settings</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">System
                                    Settings</a>
                                <a href="#"
                                    class="block px-3 py-2 text-sm text-vision-green-200 hover:bg-vision-green-700 hover:text-white">Permissions</a>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="p-4 border-t border-vision-green-700">
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full transition-transform duration-200 hover:scale-105"
                            src="https://www.iconpacks.net/icons/2/free-user-icon-3296-thumb.png" alt="User avatar">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-white">Eco Manager</p>
                            <p class="text-xs font-medium text-vision-green-300">Admin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Inside the top navigation bar (header) -->
            <header
                class="flex items-center justify-between h-16 px-4 bg-white border-b border-vision-green-200 shadow-sm">
                <div class="flex items-center">
                    <button type="button"
                        class="p-2 text-vision-green-600 rounded-md md:hidden hover:text-vision-green-800 hover:bg-vision-green-100 focus:outline-none transition-colors duration-200"
                        id="open-sidebar">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h2 class="ml-2 text-lg font-semibold text-vision-green-800">Dashboard</h2>
                    <span class="px-2 hidden md:block lg:block text-vision-green-800">|</span>
                    <h2 class="text-lg font-semibold text-vision-green-800 hidden md:block lg:block">
                        <span class="font-medium text-sm"> Welcome Back,</span> <span
                            class="font-bold text-vision-green-600 italic">Eco Manager</span>
                    </h2>
                </div>
                <div class="flex items-center space-x-4">
                    <!-- Messages button and dropdown -->
                    <div class="relative">
                        <button type="button"
                            class="relative p-2 text-vision-green-600 rounded-full hover:text-vision-green-800 hover:bg-vision-green-100 focus:outline-none transition-colors duration-200"
                            id="messages-button">
                            <i class="fas fa-envelope"></i>
                            <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
                        </button>
                        <!-- Messages dropdown -->
                        <div class="hidden absolute right-0 mt-2 right-[-110px] w-72 bg-white rounded-md shadow-lg py-1 z-20"
                            id="messages-menu">
                            <div class="px-4 py-2 border-b border-vision-green-100">
                                <p class="text-sm font-medium text-vision-green-800">Messages</p>
                            </div>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-vision-green-700 hover:bg-vision-green-50 transition-colors duration-150 border-b border-vision-green-50">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 text-vision-green-600">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-medium">New message from Volunteer</p>
                                        <p class="text-xs text-vision-green-500">Just now</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-vision-green-700 hover:bg-vision-green-50 transition-colors duration-150 border-b border-vision-green-50">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 text-green-500">
                                        <i class="fas fa-user-tie"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-medium">Partner inquiry</p>
                                        <p class="text-xs text-vision-green-500">30 minutes ago</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-vision-green-700 hover:bg-vision-green-50 transition-colors duration-150">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 text-blue-500">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-medium">Community update</p>
                                        <p class="text-xs text-vision-green-500">2 hours ago</p>
                                    </div>
                                </div>
                            </a>
                            <div class="px-4 py-2 bg-vision-green-50">
                                <a href="#"
                                    class="text-xs font-medium text-vision-green-600 hover:text-vision-green-800">View
                                    all
                                    messages</a>
                            </div>
                        </div>
                    </div>

                    <!-- Notification button and dropdown -->
                    <div class="relative">
                        <button type="button"
                            class="relative p-2 text-vision-green-600 rounded-full hover:text-vision-green-800 hover:bg-vision-green-100 focus:outline-none transition-colors duration-200"
                            id="notification-button">
                            <i class="fas fa-bell"></i>
                            <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
                        </button>
                        <!-- Notification dropdown -->
                        <div class="hidden absolute right-[-50px] mt-2 w-72 bg-white rounded-md shadow-lg py-1 z-20"
                            id="notification-menu">
                            <div class="px-4 py-2 border-b border-vision-green-100">
                                <p class="text-sm font-medium text-vision-green-800">Notifications</p>
                            </div>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-vision-green-700 hover:bg-vision-green-50 transition-colors duration-150 border-b border-vision-green-50">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 text-vision-green-600">
                                        <i class="fas fa-tree"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-medium">New trees planted</p>
                                        <p class="text-xs text-vision-green-500">2 minutes ago</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-vision-green-700 hover:bg-vision-green-50 transition-colors duration-150 border-b border-vision-green-50">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 text-green-500">
                                        <i class="fas fa-recycle"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-medium">Recycling milestone</p>
                                        <p class="text-xs text-vision-green-500">1 hour ago</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-vision-green-700 hover:bg-vision-green-50 transition-colors duration-150">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 text-blue-500">
                                        <i class="fas fa-calendar-check"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-medium">Upcoming cleanup event</p>
                                        <p class="text-xs text-vision-green-500">3 hours ago</p>
                                    </div>
                                </div>
                            </a>
                            <div class="px-4 py-2 bg-vision-green-50">
                                <a href="#"
                                    class="text-xs font-medium text-vision-green-600 hover:text-vision-green-800">View
                                    all
                                    notifications</a>
                            </div>
                        </div>
                    </div>

                    <!-- Profile dropdown -->
                    <div class="relative">
                        <button type="button" class="flex items-center space-x-2 focus:outline-none"
                            id="user-menu-button">
                            <span class="text-sm font-medium text-vision-green-700 hidden md:block lg:block">Eco
                                Manager</span>
                            <img class="w-8 h-8 rounded-full transition-transform duration-200 hover:scale-105"
                                src="https://www.iconpacks.net/icons/2/free-user-icon-3296-thumb.png" alt="User avatar">
                        </button>
                        <!-- Profile dropdown menu -->
                        <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10"
                            id="user-menu">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-vision-green-700 hover:bg-vision-green-50 transition-colors duration-150">Your
                                Profile</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-vision-green-700 hover:bg-vision-green-50 transition-colors duration-150">Settings</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="block w-full text-left px-4 py-2 text-sm text-vision-green-700 hover:bg-vision-green-50 transition-colors duration-150">
                                    Sign out
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </header>
            <!-- Main content area -->
            <main class="flex-1 overflow-y-auto md:p-0 py-2 px-0">
                @yield('content')
            </main>

        </div>

        <script>

            // Wait for DOM to be fully loaded
            document.addEventListener('DOMContentLoaded', function () {
                // Remove preload class to enable transitions
                document.body.classList.remove('preload');

                // Initialize UI components
                initMobileSidebar();
                initDropdowns();
                initSidebarDropdowns();

                const successMsg = document.getElementById('successMessage');
                if (successMsg) {
                    // Show message
                    setTimeout(() => {
                        successMsg.classList.add('show');
                    }, 100);

                    // Hide message after 4 seconds
                    setTimeout(() => {
                        successMsg.classList.remove('show');

                        // Remove from DOM after animation completes
                        setTimeout(() => {
                            successMsg.remove();
                        }, 500);
                    }, 4000);
                }

                // Handle error message
                const errorMsg = document.getElementById('errorMessage');
                if (errorMsg) {
                    // Show message
                    setTimeout(() => {
                        errorMsg.classList.add('show');
                    }, 100);

                    // Hide message after 4 seconds
                    setTimeout(() => {
                        errorMsg.classList.remove('show');

                        // Remove from DOM after animation completes
                        setTimeout(() => {
                            errorMsg.remove();
                        }, 500);
                    }, 4000);
                }

            });


            
            function disablebtn() {
                let btn = document.getElementById('send');
                btn.disabled = true;
                btn.innerText = "Submitting..."; // optional
            }

            // Mobile sidebar functionality
            function initMobileSidebar() {
                const openSidebar = document.getElementById('open-sidebar');
                const closeSidebar = document.getElementById('close-sidebar');
                const mobileSidebar = document.getElementById('mobile-sidebar');
                const sidebarOverlay = document.getElementById('sidebar-overlay');
                const sidebarContent = document.getElementById('sidebar-content');

                let isSidebarOpen = false;
                let isAnimating = false;

                function openMobileSidebar() {
                    if (isSidebarOpen || isAnimating) return;

                    isAnimating = true;
                    mobileSidebar.classList.remove('hidden');

                    // Force reflow to ensure animation plays
                    void mobileSidebar.offsetWidth;

                    sidebarOverlay.classList.add('opacity-100');
                    sidebarOverlay.classList.remove('opacity-0');
                    sidebarContent.classList.add('translate-x-0');
                    sidebarContent.classList.remove('-translate-x-full');

                    setTimeout(() => {
                        isSidebarOpen = true;
                        isAnimating = false;
                    }, 300);
                }

                function closeMobileSidebar() {
                    if (!isSidebarOpen || isAnimating) return;

                    isAnimating = true;
                    sidebarOverlay.classList.add('opacity-0');
                    sidebarOverlay.classList.remove('opacity-100');
                    sidebarContent.classList.add('-translate-x-full');
                    sidebarContent.classList.remove('translate-x-0');

                    setTimeout(() => {
                        mobileSidebar.classList.add('hidden');
                        isSidebarOpen = false;
                        isAnimating = false;
                    }, 300);
                }

                // Debounced click handlers
                openSidebar.addEventListener('click', debounce(openMobileSidebar, 300));
                closeSidebar.addEventListener('click', debounce(closeMobileSidebar, 300));
                sidebarOverlay.addEventListener('click', debounce(closeMobileSidebar, 300));

                // Close on escape key
                document.addEventListener('keydown', function (event) {
                    if (event.key === 'Escape' && isSidebarOpen) {
                        closeMobileSidebar();
                    }
                });
            }

            // Header dropdown functionality (messages, notifications, profile)
            function initDropdowns() {
                const messagesButton = document.getElementById('messages-button');
                const messagesMenu = document.getElementById('messages-menu');
                const notificationButton = document.getElementById('notification-button');
                const notificationMenu = document.getElementById('notification-menu');
                const userMenuButton = document.getElementById('user-menu-button');
                const userMenu = document.getElementById('user-menu');

                let activeDropdown = null;

                function toggleDropdown(dropdown, button) {
                    // If clicking the same button, toggle the dropdown
                    if (activeDropdown === dropdown) {
                        hideDropdown(dropdown);
                        activeDropdown = null;
                    }
                    // If another dropdown is open, close it first then open new one
                    else if (activeDropdown) {
                        hideDropdown(activeDropdown);
                        activeDropdown = dropdown;
                        showDropdown(dropdown);
                    }
                    // No dropdowns open, just open this one
                    else {
                        activeDropdown = dropdown;
                        showDropdown(dropdown);
                    }
                }

                function showDropdown(dropdown) {
                    dropdown.classList.remove('hidden');
                    dropdown.classList.add('animate-fade-in');

                    // Remove animation class after animation completes
                    setTimeout(() => {
                        dropdown.classList.remove('animate-fade-in');
                    }, 200);
                }

                function hideDropdown(dropdown) {
                    dropdown.classList.add('animate-fade-out');

                    // Hide after animation completes
                    setTimeout(() => {
                        dropdown.classList.remove('animate-fade-out');
                        dropdown.classList.add('hidden');
                    }, 200);
                }

                // Add event listeners with debouncing
                messagesButton.addEventListener('click', debounce(() => {
                    toggleDropdown(messagesMenu, messagesButton);
                }, 100));

                notificationButton.addEventListener('click', debounce(() => {
                    toggleDropdown(notificationMenu, notificationButton);
                }, 100));

                userMenuButton.addEventListener('click', debounce(() => {
                    toggleDropdown(userMenu, userMenuButton);
                }, 100));

                // Close dropdowns when clicking outside
                document.addEventListener('click', function (event) {
                    if (!activeDropdown) return;

                    const isClickInside =
                        (messagesButton.contains(event.target)) ||
                        (notificationButton.contains(event.target)) ||
                        (userMenuButton.contains(event.target)) ||
                        (activeDropdown.contains(event.target));

                    if (!isClickInside) {
                        hideDropdown(activeDropdown);
                        activeDropdown = null;
                    }
                });

                // Close on escape key
                document.addEventListener('keydown', function (event) {
                    if (event.key === 'Escape' && activeDropdown) {
                        hideDropdown(activeDropdown);
                        activeDropdown = null;
                    }
                });
            }

            // Sidebar dropdown functionality
            function initSidebarDropdowns() {
                const dropdownButtons = document.querySelectorAll('.sidebar-dropdown, .mobile-sidebar-dropdown');

                dropdownButtons.forEach(button => {
                    button.addEventListener('click', function () {
                        const submenu = this.nextElementSibling;
                        const icon = this.querySelector('.fa-chevron-down');

                        // Toggle submenu
                        submenu.classList.toggle('open');

                        // Rotate icon
                        icon.classList.toggle('rotate-90');
                    });
                });
            }

            // Debounce function to limit rapid firing of events
            function debounce(func, wait) {
                let timeout;
                return function () {
                    const context = this;
                    const args = arguments;
                    clearTimeout(timeout);
                    timeout = setTimeout(() => {
                        func.apply(context, args);
                    }, wait);
                };
            }
        </script>
</body>

</html>