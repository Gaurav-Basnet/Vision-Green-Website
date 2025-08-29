@extends("master")
@section('title', 'Gallery')
@section('content')

<!-- Hero Section -->
<section class="min-h-[300px] md:min-h-[400px] bg-cover bg-center py-12 md:py-20 text-white relative flex items-center"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80');">
    <div class="absolute inset-0 bg-black/30"></div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4">Our Gallery</h1>
        <p class="text-lg md:text-xl max-w-2xl mx-auto">Capturing moments from our conservation work across Nepal</p>
    </div>
</section>

<!-- Gallery Navigation -->
<section class="bg-white py-6 border-b">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center gap-2 md:gap-4">
            <button class="gallery-filter-btn px-3 py-1 md:px-4 md:py-2 rounded-full bg-green-600 text-white text-sm md:text-base font-medium" data-filter="all">
                All Media
            </button>
            <button class="gallery-filter-btn px-3 py-1 md:px-4 md:py-2 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm md:text-base font-medium" data-filter="image">
                Photos
            </button>
            <button class="gallery-filter-btn px-3 py-1 md:px-4 md:py-2 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm md:text-base font-medium" data-filter="video">
                Videos
            </button>
       
        </div>
    </div>
</section>

<!-- Main Gallery Section -->
<section class="py-8 md:py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
            <!-- Image Gallery Item 1 -->
            <div class="gallery-item image project" data-category="image project">
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow h-full flex flex-col">
                    <div class="relative overflow-hidden aspect-square">
                        <img src="https://images.unsplash.com/photo-1542273917363-3b1817f69a2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" 
                             alt="Reforestation project in Nepal" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                        <div class="absolute inset-0 bg-black/20 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-3 flex-grow">
                        <h3 class="font-medium text-gray-800 mb-1">Reforestation Initiative</h3>
                        <p class="text-gray-600 text-sm">Kathmandu Valley, 2023</p>
                    </div>
                </div>
            </div>

            <!-- Video Gallery Item (Facebook Embed) -->
            <div class="gallery-item video event" data-category="video event">
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow h-full flex flex-col">
                    <div class="relative overflow-hidden aspect-square">
                        <div class="fb-video w-full h-full" 
                             data-href="https://www.facebook.com/facebook/videos/10153231379946729/" 
                             data-show-text="false">
                            <div class="aspect-square bg-gray-200 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 flex-grow">
                        <h3 class="font-medium text-gray-800 mb-1">Earth Day Celebration</h3>
                        <p class="text-gray-600 text-sm">Pokhara, 2023</p>
                    </div>
                </div>
            </div>

            <!-- Image Gallery Item 2 -->
            <div class="gallery-item image event" data-category="image event">
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow h-full flex flex-col">
                    <div class="relative overflow-hidden aspect-square">
                        <img src="https://images.unsplash.com/photo-1526779259212-939e64788e3c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" 
                             alt="Community workshop" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                        <div class="absolute inset-0 bg-black/20 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-3 flex-grow">
                        <h3 class="font-medium text-gray-800 mb-1">Community Workshop</h3>
                        <p class="text-gray-600 text-sm">Chitwan, 2023</p>
                    </div>
                </div>
            </div>

            <!-- Self-hosted Video -->
            <div class="gallery-item video project" data-category="video project">
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow h-full flex flex-col">
                    <div class="relative overflow-hidden aspect-square">
                        <video class="w-full h-full object-cover" controls poster="https://images.unsplash.com/photo-1589652717521-10c0d092dea9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80">
                            <source src="/videos/conservation-project.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="p-3 flex-grow">
                        <h3 class="font-medium text-gray-800 mb-1">Conservation Project</h3>
                        <p class="text-gray-600 text-sm">Annapurna Region, 2022</p>
                    </div>
                </div>
            </div>

            <!-- Image Gallery Item 3 -->
            <div class="gallery-item image" data-category="image">
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow h-full flex flex-col">
                    <div class="relative overflow-hidden aspect-square">
                        <img src="https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" 
                             alt="Protected forest area" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                        <div class="absolute inset-0 bg-black/20 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-3 flex-grow">
                        <h3 class="font-medium text-gray-800 mb-1">Protected Forest Area</h3>
                        <p class="text-gray-600 text-sm">Mustang District, 2023</p>
                    </div>
                </div>
            </div>

            <!-- Image Gallery Item 4 -->
            <div class="gallery-item image event" data-category="image event">
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow h-full flex flex-col">
                    <div class="relative overflow-hidden aspect-square">
                        <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D3D%3D&auto=format&fit=crop&w=1770&q=80" 
                             alt="Cleanup campaign" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                        <div class="absolute inset-0 bg-black/20 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-3 flex-grow">
                        <h3 class="font-medium text-gray-800 mb-1">River Cleanup Campaign</h3>
                        <p class="text-gray-600 text-sm">Bagmati River, 2022</p>
                    </div>
                </div>
            </div>

            <!-- YouTube Video Embed -->
            <div class="gallery-item video project" data-category="video project">
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow h-full flex flex-col">
                    <div class="relative overflow-hidden aspect-square">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-3 flex-grow">
                        <h3 class="font-medium text-gray-800 mb-1">Sustainable Farming</h3>
                        <p class="text-gray-600 text-sm">Documentary, 2023</p>
                    </div>
                </div>
            </div>

            <!-- Image Gallery Item 5 -->
            <div class="gallery-item image" data-category="image">
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow h-full flex flex-col">
                    <div class="relative overflow-hidden aspect-square">
                        <img src="https://images.unsplash.com/photo-1470114716159-e389f8712fda?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" 
                             alt="Wildlife monitoring" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                        <div class="absolute inset-0 bg-black/20 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-3 flex-grow">
                        <h3 class="font-medium text-gray-800 mb-1">Wildlife Monitoring</h3>
                        <p class="text-gray-600 text-sm">Bardia National Park, 2021</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-8 md:mt-12">
            <button id="load-more" class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-6 rounded-lg transition-colors">
                Load More
            </button>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightbox-modal" class="fixed inset-0 bg-black/90 z-50 hidden items-center justify-center p-4">
    <div class="relative max-w-4xl w-full max-h-[90vh]">
        <button id="close-lightbox" class="absolute -top-10 right-0 text-white hover:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="bg-white rounded-lg overflow-hidden">
            <img id="lightbox-image" src="" alt="" class="w-full h-auto max-h-[80vh] object-contain">
            <div class="p-4 bg-white">
                <h3 id="lightbox-title" class="text-xl font-bold text-gray-800"></h3>
                <p id="lightbox-description" class="text-gray-600"></p>
            </div>
        </div>
    </div>
</div>

<!-- Facebook SDK (for embedded videos) -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0" nonce="YOUR_NONCE_VALUE"></script>

<script>
    // Gallery Filter Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.gallery-filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Update active button
                filterButtons.forEach(btn => {
                    btn.classList.remove('bg-green-600', 'text-white');
                    btn.classList.add('bg-gray-100', 'text-gray-800', 'hover:bg-gray-200');
                });
                this.classList.add('bg-green-600', 'text-white');
                this.classList.remove('bg-gray-100', 'text-gray-800', 'hover:bg-gray-200');
                
                // Filter items
                const filterValue = this.getAttribute('data-filter');
                
                galleryItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category').includes(filterValue)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
        
        // Lightbox functionality for images
        const lightboxModal = document.getElementById('lightbox-modal');
        const lightboxImage = document.getElementById('lightbox-image');
        const lightboxTitle = document.getElementById('lightbox-title');
        const lightboxDescription = document.getElementById('lightbox-description');
        const closeLightbox = document.getElementById('close-lightbox');
        
        document.querySelectorAll('.gallery-item img').forEach(img => {
            img.addEventListener('click', function() {
                const parentItem = this.closest('.gallery-item');
                const title = parentItem.querySelector('h3').textContent;
                const description = parentItem.querySelector('p').textContent;
                
                lightboxImage.src = this.src;
                lightboxImage.alt = this.alt;
                lightboxTitle.textContent = title;
                lightboxDescription.textContent = description;
                
                lightboxModal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });
        });
        
        closeLightbox.addEventListener('click', function() {
            lightboxModal.classList.add('hidden');
            document.body.style.overflow = '';
        });
        
        // Load more functionality (simplified example)
        const loadMoreBtn = document.getElementById('load-more');
        let currentItems = 8;
        
        loadMoreBtn.addEventListener('click', function() {
            // In a real implementation, you would fetch more items from the server
            // This is just a placeholder for the functionality
            alert('In a real implementation, this would load more gallery items from the server.');
        });
    });
</script>

@endsection