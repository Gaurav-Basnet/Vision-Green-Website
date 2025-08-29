<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $newsletter->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Optional custom styling */
        .prose img {
            border-radius: 0.5rem;
        }
    </style>
</head>
<body class="bg-gray-50">

    <div class="bg-gradient-to-br from-gray-50 to-gray-100 py-10 md:py-16">
        <div class="container mx-auto px-4 max-w-4xl">

            <!-- Newsletter Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl">

                <!-- Image -->
                <div class="relative">
                    <img src="{{ asset('storage/' . $newsletter->image) }}" 
                         alt="{{ $newsletter->title }}" 
                         class="w-full h-64 md:h-80 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-6">
                        <span class="bg-green-500 text-white text-xs sm:text-sm font-medium px-3 py-1 rounded-full">
                            Newsletter
                        </span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6 md:p-8">

                    <!-- Date -->
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        {{ \Carbon\Carbon::parse($newsletter->published_at)->format('F j, Y') }}
                    </div>

                    <!-- Title and Subtitle -->
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4 leading-tight">{{ $newsletter->title }}</h1>
                    <p class="text-lg text-gray-600 mb-6 border-l-4 border-green-500 pl-4 py-1">{{ $newsletter->subtitle }}</p>

                    <!-- Newsletter Content -->
                    <div class="prose max-w-none border-t border-gray-100 pt-6">
                        {!! $newsletter->content ?? '<p class="text-gray-500 italic">No detailed content available for this newsletter.</p>' !!}
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-8 pt-6 border-t border-gray-100 flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('newsletters.index') }}" 
                           class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-5 py-2.5 rounded-lg font-medium transition-colors duration-300 flex items-center justify-center">
                            Back to Newsletters
                        </a>

                        @if($newsletter->pdf)
                        <a href="{{ asset('storage/' . $newsletter->pdf) }}" target="_blank" 
                           class="bg-green-600 hover:bg-green-700 text-white px-5 py-2.5 rounded-lg font-medium transition-colors duration-300 flex items-center justify-center">
                            Download PDF
                        </a>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
