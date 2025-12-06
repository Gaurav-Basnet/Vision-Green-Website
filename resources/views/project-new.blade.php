<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->name }} - Project Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
            min-height: 100vh;
        }

        .project-card {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .project-card:hover {
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
            transform: translateY(-5px);
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

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @media print {
            .no-print { display: none !important; }
            body { background: white !important; }
            .project-card { box-shadow: none !important; border: 1px solid #ddd !important; }
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
                <a href="/project" class="text-primary-600 hover:underline">Projects</a>
                <span class="text-gray-400"><i class="fas fa-chevron-right"></i></span>
                <span class="text-gray-600">Project Details</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-grow py-12">
        <div class="container mx-auto px-4 max-w-4xl">

            <!-- Project Card -->
            <div class="project-card bg-white rounded-2xl p-8 fade-in">
                <!-- Image -->
                @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" 
                         alt="{{ $project->name }}" 
                         class="w-full h-64 object-cover rounded-lg mb-6">
                @endif

                <!-- Title -->
                <h1 class="text-3xl md:text-4xl font-bold mb-6 text-gray-800">
                    {{ $project->name }}
                </h1>

                <!-- Meta Information -->
                <div class="flex flex-wrap gap-3 mb-8">
                    <span class="px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-medium">
                        <i class="fas fa-layer-group mr-2"></i>
                        {{ $project->category }}
                    </span>

                    <span class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-sm font-medium">
                        <i class="fas fa-info-circle mr-2"></i>
                        Status: {{ $project->status }}
                    </span>

                    @if($project->start_date)
                        <span class="px-4 py-2 rounded-full bg-green-100 text-green-700 text-sm font-medium">
                            <i class="far fa-calendar-alt mr-2"></i>
                            Starts: {{ \Carbon\Carbon::parse($project->start_date)->format('F j, Y') }}
                        </span>
                    @endif

                    @if($project->end_date)
                        <span class="px-4 py-2 rounded-full bg-red-100 text-red-700 text-sm font-medium">
                            <i class="far fa-calendar-check mr-2"></i>
                            Ends: {{ \Carbon\Carbon::parse($project->end_date)->format('F j, Y') }}
                        </span>
                    @endif
                </div>

                <!-- Description -->
                <div class="prose max-w-none mb-8 text-gray-700">
                    <div class="p-4 bg-gray-50 rounded-lg border-l-4 border-primary-500">
                        {!! nl2br(e($project->description)) !!}
                    </div>
                </div>

                <!-- Additional Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- Location -->
                    @if($project->location)
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="font-semibold text-gray-700 mb-2 flex items-center">
                                <i class="fas fa-map-marker-alt text-primary-600 mr-2"></i> Location
                            </h3>
                            <p class="text-gray-700">{{ $project->location }}</p>
                        </div>
                    @endif

                    <!-- Progress Status -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-700 mb-2 flex items-center">
                            <i class="fas fa-tasks text-primary-600 mr-2"></i> Progress
                        </h3>
                        <p class="text-gray-700">
                            @if($project->start_date && $project->end_date)
                                @if(now()->lt($project->start_date))
                                    <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-sm">Upcoming</span>
                                @elseif(now()->between($project->start_date, $project->end_date))
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm">Ongoing</span>
                                @else
                                    <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Completed</span>
                                @endif
                            @else
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">Active</span>
                            @endif
                        </p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-wrap justify-between items-center gap-4 pt-6 border-t border-gray-200 no-print">
                    <div class="flex items-center space-x-2 text-gray-500">
                        <button class="p-2 rounded-full hover:bg-gray-100" onclick="window.print()">
                            <i class="fas fa-print"></i>
                        </button>
                        <button class="p-2 rounded-full hover:bg-gray-100" onclick="shareProject()">
                            <i class="fas fa-share-alt"></i>
                        </button>
                    </div>

                    <div class="flex space-x-4">
                        <a href="/projects"
                           class="action-btn px-5 py-2.5 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 font-medium">
                            <i class="fas fa-list mr-2"></i> All Projects
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script>
        function shareProject() {
            if (navigator.share) {
                navigator.share({
                    title: '{{ $project->name }}',
                    text: 'Check out this project from VisionGreen',
                    url: window.location.href
                })
                .then(() => console.log('Shared successfully'))
                .catch((error) => console.log('Sharing failed', error));
            } else {
                alert('Web Share API not supported in your browser. Please copy the URL manually.');
            }
        }
    </script>
</body>
</html>
