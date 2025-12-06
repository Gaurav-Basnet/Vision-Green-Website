<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $notice->title }} - Notice Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        }
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
            min-height: 100vh;
        }

        .notice-card {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .notice-card:hover {
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
            transform: translateY(-5px);
        }

        .tag {
            transition: all 0.2s ease;
        }

        .tag:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .back-btn {
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            transform: translateX(-5px);
        }

        .action-btn {
            transition: all 0.2s ease;
        }

        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .fade-in {
            animation: fadeIn 0.6s ease-in-out;
        }

        .slide-in {
            animation: slideIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Print styles */
        @media print {
            .no-print {
                display: none !important;
            }

            body {
                background: white !important;
            }

            .notice-card {
                box-shadow: none !important;
                border: 1px solid #ddd !important;
            }
        }
    </style>
</head>

<body class="min-h-screen flex flex-col">




    <!-- Breadcrumb -->
    <div class="bg-primary-50 py-4 no-print">
        <div class="container mx-auto px-4">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="/" class="text-primary-600 hover:underline">Home</a>
                <span class="text-gray-400"><i class="fas fa-chevron-right"></i></span>
                <a href="/notice" class="text-primary-600 hover:underline">Notices</a>
                <span class="text-gray-400"><i class="fas fa-chevron-right"></i></span>
                <span class="text-gray-600">Notice Details</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-grow py-12">
        <div class="container mx-auto px-4 max-w-4xl">


            <!-- Notice Card -->
            <div class="notice-card bg-white rounded-2xl p-8 fade-in">
                <!-- Title -->
                <h1 class="text-3xl md:text-4xl font-bold mb-6 text-gray-800">
                    {{ $notice->title }}
                </h1>

                <!-- Meta Information -->
                <div class="flex flex-wrap gap-3 mb-8">
                    @if($notice->type && $notice->type !== 'UpcomingEvents')
                        <span class="px-4 py-2 rounded-full text-sm font-medium
                                @if($notice->type == 'Alerts') bg-yellow-100 text-yellow-700 
                                @elseif($notice->type == 'Achievements') bg-blue-100 text-blue-700 
                                @else bg-gray-100 text-gray-700 @endif">
                            <i class="fas 
                                    @if($notice->type == 'Alerts') fa-exclamation-circle 
                                    @elseif($notice->type == 'Achievements') fa-trophy 
                                    @else fa-info-circle @endif
                                mr-2"></i>
                            {{ $notice->type }}
                        </span>
                    @endif

                    @if($notice->event_date)
                        <span class="px-4 py-2 rounded-full bg-green-100 text-green-700 text-sm font-medium">
                            <i class="far fa-calendar-alt mr-2"></i>
                            Event: {{ \Carbon\Carbon::parse($notice->event_date)->format('F j, Y') }}
                        </span>
                    @endif

                    <span class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-sm font-medium">
                        <i class="far fa-clock mr-2"></i>
                        Posted: {{ $notice->created_at->format('M j, Y') }}
                    </span>
                </div>

                <!-- Description -->
                <div class="prose max-w-none mb-8 text-gray-700">
                    <div class="p-4 bg-gray-50 rounded-lg border-l-4 border-primary-500">
                        {!! nl2br(e($notice->description)) !!}
                    </div>
                </div>

                <!-- Additional Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- Location -->
                    @if($notice->location)
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="font-semibold text-gray-700 mb-2 flex items-center">
                                <i class="fas fa-map-marker-alt text-primary-600 mr-2"></i> Location
                            </h3>
                            <p class="text-gray-700">{{ $notice->location }}</p>
                        </div>
                    @endif

                    <!-- Status -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-700 mb-2 flex items-center">
                            <i class="fas fa-info-circle text-primary-600 mr-2"></i> Status
                        </h3>
                        <p class="text-gray-700">
                            @if($notice->event_date)
                                @if($notice->event_date > now())
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm">Upcoming</span>
                                @else
                                    <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Completed</span>
                                @endif
                            @else
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">Published</span>
                            @endif
                        </p>
                    </div>
                </div>

                <!-- Tags -->
                @if($notice->tags)
                    <div class="mb-8">
                        <h3 class="font-semibold text-gray-700 mb-3 flex items-center">
                            <i class="fas fa-tags text-primary-600 mr-2"></i> Tags
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach(explode(',', $notice->tags) as $tag)
                                <span class="tag inline-block bg-primary-100 text-primary-700 text-sm px-3 py-1 rounded-full">
                                    #{{ trim($tag) }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Action Buttons -->
                <div class="flex flex-wrap justify-between items-center gap-4 pt-6 border-t border-gray-200 no-print">
                    <div class="flex items-center space-x-2 text-gray-500">
                        <button class="p-2 rounded-full hover:bg-gray-100" onclick="window.print()">
                            <i class="fas fa-print"></i>
                        </button>
                        <button class="p-2 rounded-full hover:bg-gray-100" onclick="shareNotice()">
                            <i class="fas fa-share-alt"></i>
                        </button>

                    </div>

                    <div class="flex space-x-4">
                        <a href="/notice"
                            class="action-btn px-5 py-2.5 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 font-medium">
                            <i class="fas fa-list mr-2"></i> All Notices
                        </a>
                
                    </div>
                </div>
            </div>

        </div>
    </main>


    <script>
        // Interactive functionality
        function shareNotice() {
            if (navigator.share) {
                navigator.share({
                    title: '{{ $notice->title }}',
                    text: 'Check out this notice from VisionGreen',
                    url: window.location.href
                })
                    .then(() => console.log('Shared successfully'))
                    .catch((error) => console.log('Sharing failed', error));
            } else {
                alert('Web Share API not supported in your browser. You can manually copy the URL to share.');
            }
        }

        function toggleBookmark() {
            const icon = document.getElementById('bookmark-icon');
            if (icon.classList.contains('far')) {
                icon.classList.remove('far');
                icon.classList.add('fas');
                showNotification('Notice bookmarked!');
            } else {
                icon.classList.remove('fas');
                icon.classList.add('far');
                showNotification('Bookmark removed');
            }
        }

        function showNotification(message) {
            // Create notification element
            const notification = document.createElement('div');
            notification.className = 'fixed bottom-4 right-4 bg-gray-800 text-white px-4 py-2 rounded-lg shadow-lg';
            notification.textContent = message;
            document.body.appendChild(notification);

            // Remove after 3 seconds
            setTimeout(() => {
                notification.remove();
            }, 3000);
        }

        // Add animation on scroll
        document.addEventListener('DOMContentLoaded', function () {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.notice-card, .tag, .action-btn').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>

</html>