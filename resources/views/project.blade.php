@extends("master")
@section('title', 'Our Projects')
@section('content')

    <!-- Hero Section -->
    <section class="min-h-[200px] md:min-h-[310px] bg-cover bg-center py-8 md:py-24 text-white relative"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1466611653911-95081537e5b7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80');">
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-2xl md:text-5xl font-bold mb-2 md:mb-4">Our Projects</h1>
                <p class="text-base md:text-xl max-w-2xl mx-auto">Creating sustainable impact across Nepal</p>
            </div>
        </div>
    </section>
    <!-- Projects Filter -->
    <section class="gsap py-4 md:py-8 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <h2 class="text-lg md:text-xl font-bold text-gray-800 mb-3 md:mb-0">Filter Projects</h2>
                <div class="flex flex-wrap gap-2 justify-center md:justify-start">
                    @php
                        $categories = ['all', 'Reforestation', 'Education', 'Research', 'Community'];
                    @endphp
                    @foreach($categories as $cat)
                        <a href="{{ route('projects.send', ['category' => strtolower($cat)]) }}"
                            class="px-3 py-1 md:px-4 md:py-2 rounded-full text-xs md:text-sm font-medium 
                                              {{ request('category', 'all') == strtolower($cat) ? 'bg-green-600 text-white' : 'bg-white text-gray-700 border border-gray-300 hover:bg-gray-100' }}">
                            {{ ucfirst($cat) }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Grid -->
    <section id="projects" class="gsap py-8 md:py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

                @forelse($projects as $project)
                    <div
                        class="gsap-card rounded-lg md:rounded-xl overflow-hidden shadow-md md:shadow-lg hover:shadow-lg md:hover:shadow-xl transition-shadow">
                        <!-- Project Image -->
                        <div class="h-40 md:h-48 bg-gray-200 overflow-hidden relative">
                            <img src="{{ $project->image ? asset('storage/' . $project->image) : 'https://via.placeholder.com/400x250' }}"
                                alt="{{ $project->name }}" class="w-full h-full object-cover">
                            <div
                                class="absolute bottom-0 left-0 bg-green-600 text-white px-2 py-1 md:px-3 md:py-1 text-xs md:text-sm font-medium">
                                {{ $project->status ?? 'Ongoing' }}
                            </div>
                        </div>

                        <!-- Project Content -->
                        <div class="p-4 md:p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-lg md:text-xl font-bold text-gray-800">{{ $project->name }}</h3>
                                <span
                                    class="bg-green-100 text-green-800 text-xs px-2 py-0.5 md:px-2 md:py-1 rounded">{{ $project->category }}</span>
                            </div>
                            <p class="text-gray-600 mb-3 md:mb-4 text-xs md:text-sm">
                                {{ Str::limit($project->description, 100) }}
                            </p>
                            <div class="flex justify-between items-center text-xs md:text-sm text-gray-500">
                                <span>{{ $project->location }}</span>
                              <a href="javascript:void(0)" 
   onclick="openModal('{{$project->name}}','{{ $project->description}}')"
   class="text-green-600 hover:text-green-800 font-medium">
   Learn More →
</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-600 col-span-3 text-center">No projects found in this category.</p>
                @endforelse
            </div>

            <div
                class="max-w-full mt-4 px-6 md:px-0 lg:px-0 py-2 flex flex-col sm:flex-row items-center justify-between text-sm text-gray-700 border-t">
                <div class="mb-2 sm:mb-0">
                    Showing <span class="font-medium">{{ $projects->firstItem() }}</span> to <span
                        class="font-medium">{{ $projects->lastItem() }}</span> of <span
                        class="font-medium">{{ $projects->total() }}</span> results
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-2 w-full sm:w-auto">
                    <div
                        class="flex space-x-1 w-full sm:w-auto overflow-x-auto whitespace-nowrap p-2 sm:p-0 justify-center sm:justify-start">
                        @if($projects->onFirstPage())
                            <button
                                class="px-3 py-1 rounded-lg border border-gray-300 bg-gray-100 text-gray-400 cursor-not-allowed">
                                Previous
                            </button>
                        @else
                            <a href="{{ $projects->previousPageUrl() }}"
                                class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                                Previous
                            </a>
                        @endif

                        @php
                            $current = $projects->currentPage();
                            $last = $projects->lastPage();
                            $window = 2; // Number of pages to show around current page
                        @endphp

                        {{-- Always show first page --}}
                        @if($current > 1 + $window)
                            <a href="{{ $projects->url(1) }}"
                                class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                                1
                            </a>
                        @endif

                        {{-- Show ellipsis if needed --}}
                        @if($current > 2 + $window)
                            <span class="px-3 py-1">...</span>
                        @endif

                        {{-- Show pages around current page --}}
                        @for($page = max(1, $current - $window); $page <= min($last, $current + $window); $page++)
                            @if($page == $current)
                                <span class="px-3 py-1 rounded-lg border border-green-500 bg-green-50 text-green-600 font-medium">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $projects->url($page) }}"
                                    class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                                    {{ $page }}
                                </a>
                            @endif
                        @endfor

                        {{-- Show ellipsis if needed --}}
                        @if($current < $last - $window - 1)
                            <span class="px-3 py-1">...</span>
                        @endif

                        {{-- Always show last page if it's not in the current window --}}
                        @if($current < $last - $window && $last > 1)
                            <a href="{{ $projects->url($last) }}"
                                class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                                {{ $last }}
                            </a>
                        @endif

                        @if($projects->hasMorePages())
                            <a href="{{ $projects->nextPageUrl() }}"
                                class="px-3 py-1 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                                Next
                            </a>
                        @else
                            <button
                                class="px-3 py-1 rounded-lg border border-gray-300 bg-gray-100 text-gray-400 cursor-not-allowed">
                                Next
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- CTA Section -->
    <section class="gsap py-8 md:py-16 bg-green-800 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-xl md:text-3xl font-bold mb-3 md:mb-4">Ready to Make a Difference?</h2>
            <p class="text-base md:text-xl max-w-2xl mx-auto mb-6 md:mb-8">Join our community of changemakers working
                towards a sustainable Nepal</p>
            <div class="flex flex-col sm:flex-row justify-center gap-3 md:gap-4">
                <a href="#"
                    class="bg-white text-green-800 hover:bg-gray-100 font-medium px-4 py-2 md:px-6 md:py-3 rounded-lg transition-colors text-sm md:text-base">
                    Volunteer With Us
                </a>
                <a href="#"
                    class="bg-transparent border border-white md:border-2 hover:bg-white/10 font-medium px-4 py-2 md:px-6 md:py-3 rounded-lg transition-colors text-sm md:text-base">
                    Donate Now
                </a>
            </div>
        </div>
    </section>
    <!-- Modal (hidden by default) -->
<div id="projectModal" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center z-50">
  <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-6 relative">
    <!-- Close Button -->
    <button onclick="closeModal()" 
            class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
      ✕
    </button>

    <!-- Modal Content -->
    <h2 id="modalTitle" class="text-xl font-bold text-gray-800 mb-2">Project Title</h2>
    <p id="modalDescription" class="text-gray-600">Project description goes here...</p>
  </div>
</div>

<script>
function openModal(title, description) {
    document.getElementById("modalTitle").innerText = title;
    document.getElementById("modalDescription").innerText = description;
    document.getElementById("projectModal").classList.remove("hidden");
}

function closeModal() {
    document.getElementById("projectModal").classList.add("hidden");
}
</script>



@endsection