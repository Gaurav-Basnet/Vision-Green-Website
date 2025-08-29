<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $job->title }} - Job Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
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
            background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
            min-height: 100vh;
        }

        .job-card {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .job-card:hover {
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

        .apply-btn {
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        }

        .apply-btn:hover {
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(37, 99, 235, 0.3);
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

        .highlight-box {
            background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
            border-left: 4px solid #3b82f6;
        }

        .detail-item {
            transition: all 0.2s ease;
        }

        .detail-item:hover {
            background-color: #f8fafc;
            transform: translateX(5px);
        }

        /* Print styles */
        @media print {
            .no-print {
                display: none !important;
            }

            body {
                background: white !important;
            }

            .job-card {
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
                <a href="/vacancy" class="text-primary-600 hover:underline">Careers</a>
                <span class="text-gray-400"><i class="fas fa-chevron-right"></i></span>
                <span class="text-gray-600">Job Details</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-grow py-12">
        <div class="container mx-auto px-4 max-w-4xl">
     

            <!-- Job Card -->
            <div class="job-card bg-white rounded-2xl p-8 fade-in">
                <!-- Title -->
                <h1 class="text-3xl md:text-4xl font-bold mb-6 text-gray-800">
                    {{ $job->title }}
                </h1>

                <!-- Meta Information -->
                <div class="flex flex-wrap gap-3 mb-8">
                    <span class="px-4 py-2 rounded-full text-sm font-medium bg-green-100 text-green-700">
                        <i class="fas fa-briefcase mr-2"></i>
                        {{ $job->employment_type }}
                    </span>

                    @if($job->location)
                    <span class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-sm font-medium">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        {{ $job->location }}
                    </span>
                    @endif

                    @if($job->category)
                    <span class="px-4 py-2 rounded-full bg-green-100 text-green-700 text-sm font-medium">
                        <i class="fas fa-tag mr-2"></i>
                        {{ $job->category }}
                    </span>
                    @endif

                    <span class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-sm font-medium">
                        <i class="far fa-clock mr-2"></i>
                        Posted: {{ $job->created_at->format('M j, Y') }}
                    </span>
                </div>

                <!-- Application Info Box -->
                <div class="highlight-box p-6 rounded-xl mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-paper-plane mr-2 text-primary-600"></i> How to Apply
                    </h3>
                    <p class="text-gray-700 mb-4">Send your resume and cover letter to our hiring team:</p>
                    <div class="flex items-center">
                        <i class="fas fa-envelope text-primary-600 text-xl mr-3"></i>
                        <a href="mailto:visiongreen@example.com?subject=Application for {{ $job->title }}"
                            class="text-lg font-medium text-primary-700 hover:underline">
                            visiongreen@example.com
                        </a>
                    </div>
                    <p class="text-sm text-gray-600 mt-3">Please include the job title in the subject line of your email.</p>
                    
                    @if($job->deadline)
                    <div class="mt-4 p-3 bg-white rounded-lg border-l-4 border-red-500">
                        <p class="text-sm font-medium text-red-700 flex items-center">
                            <i class="fas fa-hourglass-end mr-2"></i>
                            Application deadline: {{ \Carbon\Carbon::parse($job->deadline)->format('F j, Y') }}
                        </p>
                    </div>
                    @endif
                </div>

                <!-- Job Description -->
                <div class="prose max-w-none mb-8 text-gray-700">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-file-alt mr-2 text-primary-600"></i> Job Description
                    </h3>
                    <div class="p-4 bg-gray-50 rounded-lg border-l-4 border-primary-500">
                        {!! nl2br(e($job->description)) !!}
                    </div>
                </div>

                <!-- Requirements and Details -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- Requirements -->
                    <div class="bg-gray-50 p-5 rounded-xl">
                        <h3 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-list-check mr-2 text-primary-600"></i> Requirements
                        </h3>
                        <div class="space-y-3">
                            <div class="detail-item p-3 rounded-lg flex items-start">
                                <i class="fas fa-graduation-cap text-primary-600 mt-1 mr-3"></i>
                                <div>
                                    <p class="font-medium text-gray-800">Education</p>
                                    <p class="text-sm text-gray-600">{{ $job->education ?? 'Not specified' }}</p>
                                </div>
                            </div>
                            <div class="detail-item p-3 rounded-lg flex items-start">
                                <i class="fas fa-chart-line text-primary-600 mt-1 mr-3"></i>
                                <div>
                                    <p class="font-medium text-gray-800">Experience</p>
                                    <p class="text-sm text-gray-600">{{ $job->experience ?? 'Not specified' }}</p>
                                </div>
                            </div>
                            <div class="detail-item p-3 rounded-lg flex items-start">
                                <i class="fas fa-tools text-primary-600 mt-1 mr-3"></i>
                                <div>
                                    <p class="font-medium text-gray-800">Skills</p>
                                    <p class="text-sm text-gray-600">{{ $job->skills ?? 'Not specified' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Job Details -->
                    <div class="bg-gray-50 p-5 rounded-xl">
                        <h3 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-info-circle mr-2 text-primary-600"></i> Job Details
                        </h3>
                        <div class="space-y-3">
                            @if($job->salary_range)
                            <div class="detail-item p-3 rounded-lg flex items-start">
                                <i class="fas fa-money-bill-wave text-primary-600 mt-1 mr-3"></i>
                                <div>
                                    <p class="font-medium text-gray-800">Salary Range</p>
                                    <p class="text-sm text-gray-600">{{ $job->salary_range }}</p>
                                </div>
                            </div>
                            @endif
                            <div class="detail-item p-3 rounded-lg flex items-start">
                                <i class="fas fa-clock text-primary-600 mt-1 mr-3"></i>
                                <div>
                                    <p class="font-medium text-gray-800">Employment Type</p>
                                    <p class="text-sm text-gray-600">{{ $job->employment_type }}</p>
                                </div>
                            </div>
                            @if($job->location)
                            <div class="detail-item p-3 rounded-lg flex items-start">
                                <i class="fas fa-map-marker-alt text-primary-600 mt-1 mr-3"></i>
                                <div>
                                    <p class="font-medium text-gray-800">Location</p>
                                    <p class="text-sm text-gray-600">{{ $job->location }}</p>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-wrap justify-between items-center gap-4 pt-6 border-t border-gray-200 no-print">
                    <div class="flex items-center space-x-2 text-gray-500">
                        <button class="p-2 rounded-full hover:bg-gray-100" onclick="window.print()">
                            <i class="fas fa-print"></i>
                        </button>
                        <button class="p-2 rounded-full hover:bg-gray-100" onclick="shareJob()">
                            <i class="fas fa-share-alt"></i>
                        </button>
                     
                    </div>

                    <div class="flex space-x-4">
                        <a href="/jobs" class="action-btn px-5 py-2.5 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 font-medium">
                            <i class="fas fa-list mr-2"></i> All Jobs
                        </a>
                        <a href="mailto:careers@example.com?subject=Application for {{ $job->title }}"
                            class="apply-btn px-6 py-2.5 text-white rounded-lg font-medium inline-flex items-center">
                            <i class="fas fa-paper-plane mr-2"></i> Apply Now
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </main>



    <script>
        // Interactive functionality
        function shareJob() {
            if (navigator.share) {
                navigator.share({
                    title: '{{ $job->title }}',
                    text: 'Check out this job opportunity at VisionGreen',
                    url: window.location.href
                })
                .then(() => console.log('Shared successfully'))
                .catch((error) => console.log('Sharing failed', error));
            } else {
                alert('Web Share API not supported in your browser. You can manually copy the URL to share.');
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
        document.addEventListener('DOMContentLoaded', function() {
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
            
            document.querySelectorAll('.job-card, .tag, .action-btn').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>

</html>