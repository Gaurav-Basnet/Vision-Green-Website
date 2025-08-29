    @extends('Auth.dashboard')
    @section('title', 'Home Page Editor')
    @section('content')

        @if(session('success'))
            <div class="text-green-600">{{ session('success') }}</div>
        @endif

        <form action="{{ route('hom-sections.update') }}" method="POST">
            @csrf
            <!-- Hero Section with Coming Soon Message -->
            <section class="min-h-[400px] md:min-h-[700px] bg-cover bg-center py-12 md:py-32 text-white relative"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1774&q=80');">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="container mx-auto px-4 text-center">
                        <input type="text" name="t1" value="{{ old('t1', $home->t1) }}" placeholder="Enter Main Heading"
                            class="text-3xl sm:text-4xl md:text-6xl text-center font-bold mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                        <input type="text" name="st1" value="{{ old('st1', $home->st1) }}" placeholder="Enter Subheading"
                            class="text-base sm:text-lg md:text-2xl text-center max-w-3xl mx-auto mb-6 w-full bg-transparent border-2 border-dashed border-gray-300 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                        <div class="flex flex-col sm:flex-row justify-center gap-3 md:gap-4">
                            <button
                                class="bg-emerald-600 hover:bg-emerald-700 text-white font-medium py-2 px-6 rounded-lg transition duration-300 opacity-80 cursor-not-allowed text-sm md:text-base"
                                disabled>
                                Learn More
                            </button>
                            <button
                                class="border-2 border-white hover:bg-white/10 text-white font-medium py-2 px-6 rounded-lg transition duration-300 opacity-80 cursor-not-allowed text-sm md:text-base"
                                disabled>
                                Get Involved
                            </button>
                        </div>
                        <br>
                        <div
                            class="inline-block bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl px-4 py-3 md:px-8 md:py-6 mb-6 md:mb-8 animate-pulse">
                            <span class="text-emerald-300 font-semibold tracking-widest text-xs md:text-sm uppercase">Coming
                                Soon</span>
                        </div>
                    </div>
                </div>
            </section>

        <!-- Mission and Vision -->
        <section id="mission-vision" class="bg-white py-12 md:py-16 gsap">
            <div class="container max-w-full px-4">
                <div class="flex flex-col md:flex-row gap-8 md:gap-12 items-center">
                    <!-- Image/Icon Section -->
                    <div class="w-full md:w-1/2 flex justify-center">
                        <div class="relative w-full h-64 md:h-96">
                            <div
                                class="absolute -top-4 -left-4 w-32 h-32 bg-green-100 rounded-full opacity-70 animate-float animation-delay-200">
                            </div>
                            <div
                                class="absolute -bottom-4 -right-4 w-24 h-24 bg-green-200 rounded-full opacity-50 animate-float animation-delay-400">
                            </div>

                            <div
                                class="relative bg-green-50 border-2 border-green-100 rounded-xl w-full h-full flex items-center justify-center shadow-md z-10">
                                <div class="text-center p-6">
                                    <div class="bg-white p-6 rounded-full shadow-inner mb-6 inline-flex">
                                        <i class="fas fa-seedling text-5xl md:text-7xl text-green-600"></i>
                                    </div>
                                    <h3 class="text-xl md:text-2xl font-bold text-green-800">Sustainable Nepal</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Text Content -->
                    <div class="w-full md:w-1/2">
                        <!-- Mission -->
                        <div class="gsap-card mb-8 md:mb-12 p-6 bg-green-50 rounded-lg border-l-4 border-green-600">
                            <div class="flex items-center mb-3">
                                <div class="bg-green-600 text-white p-2 rounded-full mr-4">
                                    <i class="fas fa-bullseye text-lg"></i>
                                </div>
                                <h3 class="text-xl md:text-2xl font-bold text-green-800">Our Mission</h3>
                            </div>
                            <textarea name="fst2" placeholder="Enter the mission"
                                class="text-gray-700 text-sm md:text-base pl-12 w-full bg-gray-50 border-2 border-dashed border-gray-300 hover:bg-white hover:border-gray-400 focus:outline-none focus:border-blue-500 focus:bg-white rounded-lg p-3 transition-all duration-200"
                                rows="4">{{ $home->fst2 }}</textarea>
                        </div>

                        <!-- Vision -->
                        <div class="gsap-card p-6 bg-green-50 rounded-lg border-l-4 border-green-600">
                            <div class="flex items-center mb-3">
                                <div class="bg-green-600 text-white p-2 rounded-full mr-4">
                                    <i class="fas fa-eye text-lg"></i>
                                </div>
                                <h3 class="text-xl md:text-2xl font-bold text-green-800">Our Vision</h3>
                            </div>
                            <textarea name="sst2" placeholder="Enter the vision"
                                class="text-gray-700 text-sm md:text-base pl-12 w-full bg-white border-2 border-dashed border-gray-300 hover:border-gray-400 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-200 rounded-lg p-3 transition-all duration-200"
                                rows="4">{{ $home->sst2 }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Focus Areas -->
        <section id="focus-area" class="bg-gray-50 py-12 md:py-16 gsap">
            <div class="container max-w-full px-4">
                <div class="text-center mb-8 md:mb-16">
                    <h2 class="text-2xl md:text-4xl font-bold mb-2 md:mb-4 text-green-800">Our Focus Areas</h2>
                    <input type="text" name="mst3" value="{{ $home->mst3 }}" placeholder="Enter subtitle for focus area"
                        class="text-sm md:text-lg max-w-3xl mx-auto text-gray-600 mb-6 md:mb-8 w-full 
                            bg-white bg-opacity-100 border-2 border-dashed border-gray-300 
                            hover:border-gray-400 focus:outline-none focus:border-blue-500 
                            rounded-lg px-4 py-2 transition-all duration-200">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    <!-- Habitat Restoration -->
                    <div
                        class="gsap-card focus-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-l-4 border-green-600">
                        <div class="flex flex-col space-y-4">
                            <!-- Title Row -->
                            <div class="flex items-center gap-3">
                                <!-- Icon and Dropdown Container -->
                                <div class="flex items-center shrink-0">
                                    <!-- Icon Preview -->
                                    <div class="bg-green-100 p-2 rounded-full mr-2">
                                        <i id="iconPreview" class="{{ $home->icon1 }} text-green-600 text-lg"></i>
                                        <input type="hidden" name="icon1" id="iconValue" value="{{ $home->icon1 }}">
                                    </div>
                                    <!-- Compact Dropdown -->
                                    <select name="icon3" id="iconSelect"
                                        class="border border-gray-300 rounded-lg px-2 py-1 text-sm w-28 focus:outline-none focus:ring-1 focus:ring-green-400">
                                        <option value="fas fa-book">Book</option>
                                        <option value="fas fa-tree">Tree</option>
                                        <option value="fas fa-paw">Paw</option>
                                        <option value="fas fa-users">User</option>
                                        <option value="fas fa-heartbeat">Heartbeat</option>
                                        <option value="fas fa-flask">Flask</option>
                                    </select>
                                </div>

                                <script>
                                    const iconSelect = document.getElementById('iconSelect');
                                    const iconPreview = document.getElementById('iconPreview');
                                    const iconValue = document.getElementById('iconValue');

                                    // When dropdown changes
                                    iconSelect.addEventListener('change', function () {
                                        const selectedIcon = this.value;

                                        // Update preview
                                        iconPreview.className = selectedIcon + " text-green-600 text-lg";

                                        // Update hidden input for form
                                        iconValue.value = selectedIcon;
                                    });

                                    // Keep previously selected option on load
                                    document.addEventListener("DOMContentLoaded", () => {
                                        if (iconValue.value) {
                                            iconSelect.value = iconValue.value;
                                            iconPreview.className = iconValue.value + " text-green-600 text-lg";
                                        }
                                    });
                                </script>

                                <!-- Title Input -->
                                <input type="text" name="t3" value="{{ $home->t3 }}" class="text-lg md:text-xl font-bold text-green-800 w-full bg-transparent 
                                        border-2 border-dashed border-gray-300 hover:border-gray-400 
                                        focus:outline-none focus:border-green-600 rounded-lg px-4 py-2 
                                        transition-all duration-200" placeholder="Enter habitat title">
                            </div>

                            <!-- Description Textarea -->
                            <textarea name="st3" value="{{ $home->st3 }}" class="text-sm md:text-base text-gray-600 w-full bg-gray-50 border border-dashed border-gray-300 
                                    hover:bg-white hover:border-gray-400 focus:outline-none focus:border-blue-500 
                                    focus:bg-white rounded p-2 transition-all duration-200" rows="3"
                                placeholder="Enter ecosystem revitalization description">{{ $home->st3 }}</textarea>
                        </div>
                    </div>

                    <!-- Indigenous Knowledge -->
                    <div
                        class="gsap-card focus-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-l-4 border-green-600">
                        <div class="flex items-center mb-3 md:mb-4">
                            <!-- Icon and Dropdown Container -->
                            <div class="flex items-center shrink-0">
                                <!-- Icon Preview -->
                                <div class="bg-green-100 p-2 rounded-full mr-2">
                                    <i id="iconPreview2" class="{{ $home->icon2 }} text-lg text-green-600"></i>
                                    <input type="hidden" name="icon2" id="iconValue2" value="{{ $home->icon2 }}">
                                </div>
                                <!-- Compact Dropdown -->
                                <select name="icon4" id="iconSelect2"
                                    class="border border-gray-300 rounded-lg px-2 py-1 text-sm w-28 focus:outline-none focus:ring-1 focus:ring-green-400">
                                    <option value="fas fa-tree">Tree</option>
                                    <option value="fas fa-book">Book</option>
                                    <option value="fas fa-paw">Paw</option>
                                    <option value="fas fa-users">User</option>
                                    <option value="fas fa-heartbeat">Heartbeat</option>
                                    <option value="fas fa-flask">Flask</option>
                                </select>
                            </div>
                            <input type="text" name="t4" value="{{ $home->t4}}" class="text-lg md:text-xl font-bold text-green-800 w-full bg-transparent 
                                    border-2 border-dashed border-gray-300 hover:border-gray-400 
                                    focus:outline-none focus:border-green-600 rounded-lg px-4 py-2 
                                    transition-all duration-200" placeholder="Enter indigenous title">
                        </div>
                        <textarea name="st4" value="{{ $home->st4 }}"
                            class="text-sm md:text-base text-gray-600 w-full bg-gray-50 border border-dashed border-gray-300 hover:bg-white hover:border-gray-400 focus:outline-none focus:border-blue-500 focus:bg-white rounded p-2 transition-all duration-200"
                            rows="3" placeholder="Enter traditional knowledge description">{{ $home->st4 }}</textarea>
                    </div>

                    <script>
                        // For Indigenous Knowledge section
                        const iconSelect2 = document.getElementById('iconSelect2');
                        const iconPreview2 = document.getElementById('iconPreview2');
                        const iconValue2 = document.getElementById('iconValue2');

                        // When dropdown changes
                        iconSelect2.addEventListener('change', function () {
                            const selectedIcon = this.value;

                            // Update preview
                            iconPreview2.className = selectedIcon + " text-lg text-green-600";

                            // Update hidden input for form
                            iconValue2.value = selectedIcon;
                        });

                        // Keep previously selected option on load
                        document.addEventListener("DOMContentLoaded", () => {
                            if (iconValue2.value) {
                                iconSelect2.value = iconValue2.value;
                                iconPreview2.className = iconValue2.value + " text-lg text-green-600";
                            }
                        });
                    </script>

                    <!-- Biodiversity Conservation -->
                    <div
                        class="gsap-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-l-4 border-green-600">
                        <div class="flex items-center mb-3 md:mb-4">
                            <!-- Icon and Dropdown Container -->
                            <div class="flex items-center shrink-0">
                                <!-- Icon Preview -->
                                <div class="bg-green-100 p-2 rounded-full mr-2">
                                    <i id="iconPreview3" class="{{ $home->icon3 }} text-lg text-green-600"></i>
                                    <input type="hidden" name="icon5" id="iconValue3" value="{{ $home->icon3 }}">
                                </div>
                                <!-- Compact Dropdown -->
                                <select name="icon5" id="iconSelect3"
                                    class="border border-gray-300 rounded-lg px-2 py-1 text-sm w-28 focus:outline-none focus:ring-1 focus:ring-green-400">
                                    <option value="fas fa-tree">Tree</option>
                                    <option value="fas fa-book">Book</option>
                                    <option value="fas fa-paw">Paw</option>
                                    <option value="fas fa-users">User</option>
                                    <option value="fas fa-heartbeat">Heartbeat</option>
                                    <option value="fas fa-flask">Flask</option>
                                </select>
                            </div>
                            <input type="text" name="t5" value="{{ $home->t5 }}" class="text-lg md:text-xl font-bold text-green-800 w-full bg-transparent 
                                    border-2 border-dashed border-gray-300 hover:border-gray-400 
                                    focus:outline-none focus:border-green-600 rounded-lg px-4 py-2 
                                    transition-all duration-200" placeholder="Enter biodiversity title">
                        </div>
                        <textarea name="st5" value="{{ $home->st5 }}"
                            class="text-sm md:text-base text-gray-600 w-full bg-gray-50 border border-dashed border-gray-300 hover:bg-white hover:border-gray-400 focus:outline-none focus:border-blue-500 focus:bg-white rounded p-2 transition-all duration-200"
                            rows="3" placeholder="Enter conservation description">{{ $home->st5 }}</textarea>
                    </div>

                    <script>
                        // For Biodiversity Conservation section
                        const iconSelect3 = document.getElementById('iconSelect3');
                        const iconPreview3 = document.getElementById('iconPreview3');
                        const iconValue3 = document.getElementById('iconValue3');

                        // When dropdown changes
                        iconSelect3.addEventListener('change', function () {
                            const selectedIcon = this.value;

                            // Update preview
                            iconPreview3.className = selectedIcon + " text-lg text-green-600";

                            // Update hidden input for form
                            iconValue3.value = selectedIcon;
                        });

                        // Keep previously selected option on load
                        document.addEventListener("DOMContentLoaded", () => {
                            if (iconValue3.value) {
                                iconSelect3.value = iconValue3.value;
                                iconPreview3.className = iconValue3.value + " text-lg text-green-600";
                            }
                        });
                    </script>

                    <!-- Youth Empowerment -->
                    <div
                        class="gsap-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-l-4 border-green-600">
                        <div class="flex items-center mb-3 md:mb-4">
                            <!-- Icon and Dropdown Container -->
                            <div class="flex items-center shrink-0">
                                <!-- Icon Preview -->
                                <div class="bg-green-100 p-2 rounded-full mr-2">
                                    <i id="iconPreview4" class="{{ $home->icon4 }} text-lg text-green-600"></i>
                                    <input type="hidden" name="icon6" id="iconValue4" value="{{ $home->icon4 }}">
                                </div>
                                <!-- Compact Dropdown -->
                                <select name="icon6" id="iconSelect4"
                                    class="border border-gray-300 rounded-lg px-2 py-1 text-sm w-28 focus:outline-none focus:ring-1 focus:ring-green-400">
                                    <option value="fas fa-tree">Tree</option>
                                    <option value="fas fa-book">Book</option>
                                    <option value="fas fa-paw">Paw</option>
                                    <option value="fas fa-users">User</option>
                                    <option value="fas fa-heartbeat">Heartbeat</option>
                                    <option value="fas fa-flask">Flask</option>
                                </select>
                            </div>
                            <input type="text" name="t6" value="{{ $home->t6 }}" class="text-lg md:text-xl font-bold text-green-800 w-full bg-transparent 
                                    border-2 border-dashed border-gray-300 hover:border-gray-400 
                                    focus:outline-none focus:border-green-600 rounded-lg px-4 py-2 
                                    transition-all duration-200" placeholder="Enter youth title">
                        </div>
                        <textarea name="st6" value="{{ $home->st6 }}"
                            class="text-sm md:text-base text-gray-600 w-full bg-gray-50 border border-dashed border-gray-300 hover:bg-white hover:border-gray-400 focus:outline-none focus:border-blue-500 focus:bg-white rounded p-2 transition-all duration-200"
                            rows="3" placeholder="Enter Youth Empowerment description">{{ $home->st6 }}</textarea>
                    </div>

                    <!-- Health Advocacy -->
                    <div
                        class="gsap-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-l-4 border-green-600">
                        <div class="flex items-center mb-3 md:mb-4">
                            <!-- Icon and Dropdown Container -->
                            <div class="flex items-center shrink-0">
                                <!-- Icon Preview -->
                                <div class="bg-green-100 p-2 rounded-full mr-2">
                                    <i id="iconPreview5" class="{{ $home->icon5 }} text-lg text-green-600"></i>
                                    <input type="hidden" name="icon7" id="iconValue5" value="{{ $home->icon5 }}">
                                </div>
                                <!-- Compact Dropdown -->
                                <select name="icon7" id="iconSelect5"
                                    class="border border-gray-300 rounded-lg px-2 py-1 text-sm w-28 focus:outline-none focus:ring-1 focus:ring-green-400">
                                    <option value="fas fa-tree">Tree</option>
                                    <option value="fas fa-book">Book</option>
                                    <option value="fas fa-paw">Paw</option>
                                    <option value="fas fa-users">User</option>
                                    <option value="fas fa-heartbeat">Heartbeat</option>
                                    <option value="fas fa-flask">Flask</option>
                                </select>
                            </div>
                            <input type="text" name="t7" value="{{ $home->t7 }}" class="text-lg md:text-xl font-bold text-green-800 w-full bg-transparent 
                                    border-2 border-dashed border-gray-300 hover:border-gray-400 
                                    focus:outline-none focus:border-green-600 rounded-lg px-4 py-2 
                                    transition-all duration-200" placeholder="Enter Health Advocacy">
                        </div>
                        <textarea name="st7" value="{{ $home->st7 }}"
                            class="text-sm md:text-base text-gray-600 w-full bg-gray-50 border border-dashed border-gray-300 hover:bg-white hover:border-gray-400 focus:outline-none focus:border-blue-500 focus:bg-white rounded p-2 transition-all duration-200"
                            rows="3" placeholder="Enter Health Advocacy description">{{ $home->st7 }}</textarea>
                    </div>

                    <!-- Research & Innovation -->
                    <div
                        class="gsap-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-l-4 border-green-600">
                        <div class="flex items-center mb-3 md:mb-4">
                            <!-- Icon and Dropdown Container -->
                            <div class="flex items-center shrink-0">
                                <!-- Icon Preview -->
                                <div class="bg-green-100 p-2 rounded-full mr-2">
                                    <i id="iconPreview6" class="{{ $home->icon6 }} text-lg text-green-600"></i>
                                    <input type="hidden" name="icon8" id="iconValue6" value="{{ $home->icon6 }}">
                                </div>
                                <!-- Compact Dropdown -->
                                <select name="icon8" id="iconSelect6"
                                    class="border border-gray-300 rounded-lg px-2 py-1 text-sm w-28 focus:outline-none focus:ring-1 focus:ring-green-400">
                                    <option value="fas fa-tree">Tree</option>
                                    <option value="fas fa-book">Book</option>
                                    <option value="fas fa-paw">Paw</option>
                                    <option value="fas fa-users">User</option>
                                    <option value="fas fa-heartbeat">Heartbeat</option>
                                    <option value="fas fa-flask">Flask</option>
                                </select>
                            </div>
                            <input type="text" name="t8" value="{{ $home->t8 }}" class="text-lg md:text-xl font-bold text-green-800 w-full bg-transparent 
                                    border-2 border-dashed border-gray-300 hover:border-gray-400 
                                    focus:outline-none focus:border-green-600 rounded-lg px-4 py-2 
                                    transition-all duration-200" placeholder="Enter Research & Innovation title">
                        </div>
                        <textarea name="st8" value="{{ $home->st8 }}"
                            class="text-sm md:text-base text-gray-600 w-full bg-gray-50 border border-dashed border-gray-300 hover:bg-white hover:border-gray-400 focus:outline-none focus:border-blue-500 focus:bg-white rounded p-2 transition-all duration-200"
                            rows="3" placeholder="Enter conservation description">{{ $home->st8 }}</textarea>
                    </div>

                    <script>
                        // For Youth Empowerment section
                        const iconSelect4 = document.getElementById('iconSelect4');
                        const iconPreview4 = document.getElementById('iconPreview4');
                        const iconValue4 = document.getElementById('iconValue4');

                        iconSelect4.addEventListener('change', function () {
                            const selectedIcon = this.value;
                            iconPreview4.className = selectedIcon + " text-lg text-green-600";
                            iconValue4.value = selectedIcon;
                        });

                        // For Health Advocacy section
                        const iconSelect5 = document.getElementById('iconSelect5');
                        const iconPreview5 = document.getElementById('iconPreview5');
                        const iconValue5 = document.getElementById('iconValue5');

                        iconSelect5.addEventListener('change', function () {
                            const selectedIcon = this.value;
                            iconPreview5.className = selectedIcon + " text-lg text-green-600";
                            iconValue5.value = selectedIcon;
                        });

                        // For Research & Innovation section
                        const iconSelect6 = document.getElementById('iconSelect6');
                        const iconPreview6 = document.getElementById('iconPreview6');
                        const iconValue6 = document.getElementById('iconValue6');

                        iconSelect6.addEventListener('change', function () {
                            const selectedIcon = this.value;
                            iconPreview6.className = selectedIcon + " text-lg text-green-600";
                            iconValue6.value = selectedIcon;
                        });

                        // Initialize all icon selects on load
                        document.addEventListener("DOMContentLoaded", () => {
                            // Youth Empowerment
                            if (iconValue4.value) {
                                iconSelect4.value = iconValue4.value;
                                iconPreview4.className = iconValue4.value + " text-lg text-green-600";
                            }

                            // Health Advocacy
                            if (iconValue5.value) {
                                iconSelect5.value = iconValue5.value;
                                iconPreview5.className = iconValue5.value + " text-lg text-green-600";
                            }

                            // Research & Innovation
                            if (iconValue6.value) {
                                iconSelect6.value = iconValue6.value;
                                iconPreview6.className = iconValue6.value + " text-lg text-green-600";
                            }
                        });
                    </script>
                </div>
            </div>
        </section>

        <!-- Impact Stats with image inner shadow - Improved Version -->
        <section id="impact" class="relative bg-cover bg-center py-20 md:py-32 lg:py-40 text-white gsap"
            style="background-image:url('https://images.unsplash.com/photo-1501004318641-b39e6451bec6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1673&q=80');">
            <!-- Dark overlay for better text readability -->
            <div class="absolute inset-0 bg-black/40"></div>

            <!-- Inner shadow effect -->
            <div class="absolute inset-0 shadow-[inset_0_0_80px_rgba(0,0,0,0.8)] pointer-events-none"></div>

            <div class="container mx-auto px-4 relative z-10">
                <!-- Your content here -->
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">Our Impact</h2>

                    <input type="text" name="st10" value="{{ $home->st10 }}"
                        class="text-lg md:text-2xl text-center max-w-3xl mx-auto mb-6 md:mb-8 w-full bg-transparent border-2 border-dashed border-gray-300 focus:outline-none focus:border-blue-500 p-2 rounded-lg transition-colors duration-200"
                        placeholder="Enter Sub-Heading for impact">
                </div>
            </div>
        </section>

        <!-- Featured Projects with Images -->
        <section id="project" class="bg-white py-10 md:py-14 gsap">
            <div class="container mx-auto px-4">
                <div class="text-center mb-8 md:mb-12">
                    <h2 class="text-xl md:text-3xl font-bold mb-2 text-green-800">Featured Projects</h2>
                    <input type="text" name="st11" value="{{ $home->st11 }}"
                        class="text-lg md:text-2xl text-center max-w-3xl mx-auto mb-6 md:mb-8 w-full bg-transparent border-2 border-dashed border-gray-300 focus:outline-none focus:border-blue-500 p-2 rounded-lg transition-colors duration-200"
                        placeholder="Enter Sub-Heading for featured project  ">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6">
                    <!-- Project 1 -->
                    <div
                        class="gsap-card rounded-lg md:rounded-xl overflow-hidden shadow-md md:shadow-lg hover:shadow-lg md:hover:shadow-xl transition-shadow">
                        <div class="h-40 md:h-48 bg-gray-200 overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1448375240586-882707db888b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80"
                                alt="Project image" class="w-full h-full object-cover">
                            <div
                                class="absolute bottom-0 left-0 bg-green-600 text-white px-2 py-1 md:px-3 md:py-1 text-xs md:text-sm font-medium">
                                Ongoing
                            </div>
                        </div>
                        <div class="p-4 md:p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-lg md:text-xl font-bold text-gray-800">Himalayan Reforestation</h3>
                                <span
                                    class="bg-green-100 text-green-800 text-xs px-2 py-0.5 md:px-2 md:py-1 rounded">Reforestation</span>
                            </div>
                            <p class="text-gray-600 mb-3 md:mb-4 text-xs md:text-sm">Restoring degraded forests in the
                                Himalayan
                                region through community participation</p>
                            <div class="flex justify-between items-center text-xs md:text-sm text-gray-500">
                                <span>Kathmandu, Nepal</span>
                                <a href="#" class="text-green-600 hover:text-green-800 font-medium">Learn More →</a>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div
                        class="gsap-card rounded-lg md:rounded-xl overflow-hidden shadow-md md:shadow-lg hover:shadow-lg md:hover:shadow-xl transition-shadow">
                        <div class="h-40 md:h-48 bg-gray-200 overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80"
                                alt="Project image" class="w-full h-full object-cover">
                            <div
                                class="absolute bottom-0 left-0 bg-blue-600 text-white px-2 py-1 md:px-3 md:py-1 text-xs md:text-sm font-medium">
                                Completed
                            </div>
                        </div>
                        <div class="p-4 md:p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-lg md:text-xl font-bold text-gray-800">Youth Green Leaders</h3>
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs px-2 py-0.5 md:px-2 md:py-1 rounded">Education</span>
                            </div>
                            <p class="text-gray-600 mb-3 md:mb-4 text-xs md:text-sm">Training program for young
                                environmental
                                advocates in sustainable development</p>
                            <div class="flex justify-between items-center text-xs md:text-sm text-gray-500">
                                <span>Pokhara, Nepal</span>
                                <a href="#" class="text-green-600 hover:text-green-800 font-medium">Learn More →</a>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div
                        class="gsap-card rounded-lg md:rounded-xl overflow-hidden shadow-md md:shadow-lg hover:shadow-lg md:hover:shadow-xl transition-shadow">
                        <div class="h-40 md:h-48 bg-gray-200 overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1673&q=80"
                                alt="Project image" class="w-full h-full object-cover">
                            <div
                                class="absolute bottom-0 left-0 bg-green-600 text-white px-2 py-1 md:px-3 md:py-1 text-xs md:text-sm font-medium">
                                Ongoing
                            </div>
                        </div>
                        <div class="p-4 md:p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-lg md:text-xl font-bold text-gray-800">Sustainable Farming</h3>
                                <span
                                    class="bg-purple-100 text-purple-800 text-xs px-2 py-0.5 md:px-2 md:py-1 rounded">Community</span>
                            </div>
                            <p class="text-gray-600 mb-3 md:mb-4 text-xs md:text-sm">Promoting organic farming techniques in
                                rural communities</p>
                            <div class="flex justify-between items-center text-xs md:text-sm text-gray-500">
                                <span>Chitwan, Nepal</span>
                                <a href="#" class="text-green-600 hover:text-green-800 font-medium">Learn More →</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-8 md:mt-10">
                    <a href="/project"
                        class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium text-sm md:text-base px-5 py-2.5 rounded-lg transition-colors shadow-md hover:shadow-lg">
                        View All Projects
                    </a>
                </div>
            </div>
        </section>

        <!-- Featured Project Highlight with Background -->
        <section class="bg-cover bg-center py-16 md:py-24 relative gsap"
            style="background-image: url('https://images.unsplash.com/photo-1448375240586-882707db888b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80');">
            <!-- Dark overlay for better text readability -->
            <div class="absolute inset-0 bg-black/30"></div>

            <div class="gsap-card container mx-auto px-4 relative z-10">
                <div class="max-w-2xl mx-auto bg-white/90 backdrop-blur-sm rounded-xl shadow-lg overflow-hidden p-8">
                    <!-- Badge -->
                    <span class="inline-block bg-green-600 text-white text-xs font-semibold px-3 py-1 rounded-full mb-4">
                        Featured Initiative
                    </span>

                    <!-- Title and Description -->
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3">Himalayan Reforestation Initiative</h2>

                    <input type="text" name="st12" value="{{ $home->st12}}"
                        class="text-lg md:text-2xl text-center max-w-3xl mx-auto mb-6 md:mb-8 w-full bg-transparent border-2 border-dashed border-gray-300 focus:outline-none focus:border-blue-500 p-2 rounded-lg transition-colors duration-200"
                        placeholder="Enter Sub-Heading for feature initiative">

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                        <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                            <p class="text-2xl font-bold text-green-600">12,000+</p>
                            <p class="text-sm text-gray-600">Trees Planted</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                            <p class="text-2xl font-bold text-green-600">8</p>
                            <p class="text-sm text-gray-600">Communities</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                            <p class="text-2xl font-bold text-green-600">25</p>
                            <p class="text-sm text-gray-600">Species Protected</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                            <p class="text-2xl font-bold text-green-600">150+</p>
                            <p class="text-sm text-gray-600">Jobs Created</p>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <a href="#"
                        class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white font-medium px-5 py-2.5 rounded-lg transition-colors">
                        Explore Project
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Get Involved Section - Compact Version -->
        <section id="involved-section" class="bg-green-900 text-white py-12 md:py-16 gsap">
            <div class="container mx-auto px-4 text-center">
                <div class="max-w-3xl mx-auto mb-8 md:mb-12">
                    <input type="text" name="t11" value="{{ $home->t11 }}" placeholder="Enter Heading"
                        class="text-4xl md:text-3xl text-center font-bold mb-4 md:mb-6 w-full bg-transparent border-2 border-dashed border-gray-400 hover:border-gray-500 focus:outline-none focus:border-blue-500 p-2 rounded-lg transition-all duration-200">

                    <input type="text" name="st12" value="{{ $home->st12}}"
                        class="text-lg md:text-2xl text-center max-w-3xl mx-auto mb-6 md:mb-8 w-full bg-transparent border-2 border-dashed border-gray-300 focus:outline-none focus:border-blue-500 p-2 rounded-lg transition-colors duration-200"
                        placeholder="Enter Sub-Heading for feature initiative">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                    <!-- Volunteer -->
                    <div
                        class="group bg-white/10 p-6 rounded-xl backdrop-blur-sm border border-white/10 hover:border-green-500 transition-all duration-300 hover:shadow-lg">
                        <div
                            class="w-14 h-14 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-500 transition-colors">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold mb-3">Volunteer</h3>
                        <input type="text" name="st13" value="{{ $home->st13}}"
                            class="text-lg md:text-2xl text-center max-w-3xl mx-auto mb-6 md:mb-8 w-full bg-transparent border-2 border-dashed border-gray-300 focus:outline-none focus:border-blue-500 p-2 rounded-lg transition-colors duration-200"
                            placeholder="Enter Sub-Heading for feature initiative">

                        <a href="#"
                            class="inline-flex items-center text-green-300 hover:text-white text-sm font-medium transition-colors">
                            Learn More
                            <svg class="ml-1 w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Donate -->
                    <div
                        class=" group bg-white/10 p-6 rounded-xl backdrop-blur-sm border border-white/10 hover:border-green-500 transition-all duration-300 hover:shadow-lg">
                        <div
                            class="w-14 h-14 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-500 transition-colors">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold mb-3">Donate</h3>
                        <input type="text" name="st14" value="{{ $home->st14}}"
                            class="text-lg md:text-2xl text-center max-w-3xl mx-auto mb-6 md:mb-8 w-full bg-transparent border-2 border-dashed border-gray-300 focus:outline-none focus:border-blue-500 p-2 rounded-lg transition-colors duration-200"
                            placeholder="Enter Sub-Heading for feature initiative"> <a href="#"
                            class="inline-flex items-center text-green-300 hover:text-white text-sm font-medium transition-colors">
                            Donate Now
                            <svg class="ml-1 w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Advocate -->
                    <div
                        class=" group bg-white/10 p-6 rounded-xl backdrop-blur-sm border border-white/10 hover:border-green-500 transition-all duration-300 hover:shadow-lg">
                        <div
                            class="w-14 h-14 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-500 transition-colors">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold mb-3">Advocate</h3>
                        <input type="text" name="st15" value="{{ $home->st15}}"
                            class="text-lg md:text-2xl text-center max-w-3xl mx-auto mb-6 md:mb-8 w-full bg-transparent border-2 border-dashed border-gray-300 focus:outline-none focus:border-blue-500 p-2 rounded-lg transition-colors duration-200"
                            placeholder="Enter Sub-Heading for feature initiative"> <a href="#"
                            class="inline-flex items-center text-green-300 hover:text-white text-sm font-medium transition-colors">
                            Take Action
                            <svg class="ml-1 w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section id="team-section" class="gsap py-8 md:py-16 bg-white">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="text-center mb-8 md:mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-green-800">Meet Our Team</h2>
                    <input type="text" name="st14" value="{{ $home->st14}}"
                        class="text-lg md:text-2xl text-center max-w-3xl mx-auto mb-6 md:mb-8 w-full bg-transparent border-2 border-dashed border-gray-300 focus:outline-none focus:border-blue-500 p-2 rounded-lg transition-colors duration-200"
                        placeholder="Enter Sub-Heading for feature initiative">
                </div>

                <div class="gsap-card grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                    <!-- Team Member 1 -->
                    <div
                        class="bg-white rounded-lg md:rounded-xl shadow-sm md:shadow-md overflow-hidden hover:shadow-md md:hover:shadow-lg transition-shadow">
                        <div class="h-40 sm:h-48 bg-gray-200 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80"
                                alt="Rajesh Thapa" class="w-full h-full object-cover">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="font-bold text-base md:text-lg text-gray-800">Rajesh Thapa</h3>
                            <p class="text-green-600 text-xs md:text-sm">Executive Director</p>
                            <p class="text-gray-600 text-xs mt-1 md:mt-2 line-clamp-2">Environmental scientist with 15+
                                years
                                experience in Himalayan ecology</p>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <div
                        class="gsap-card bg-white rounded-lg md:rounded-xl shadow-sm md:shadow-md overflow-hidden hover:shadow-md md:hover:shadow-lg transition-shadow">
                        <div class="h-40 sm:h-48 bg-gray-200 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=776&q=80"
                                alt="Priya Gurung" class="w-full h-full object-cover">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="font-bold text-base md:text-lg text-gray-800">Priya Gurung</h3>
                            <p class="text-green-600 text-xs md:text-sm">Program Director</p>
                            <p class="text-gray-600 text-xs mt-1 md:mt-2 line-clamp-2">Community development specialist
                                focused
                                on women's empowerment</p>
                        </div>
                    </div>

                    <!-- Team Member 3 -->
                    <div
                        class="gsap-card bg-white rounded-lg md:rounded-xl shadow-sm md:shadow-md overflow-hidden hover:shadow-md md:hover:shadow-lg transition-shadow">
                        <div class="h-40 sm:h-48 bg-gray-200 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80"
                                alt="Amit Sharma" class="w-full h-full object-cover">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="font-bold text-base md:text-lg text-gray-800">Amit Sharma</h3>
                            <p class="text-green-600 text-xs md:text-sm">Research Coordinator</p>
                            <p class="text-gray-600 text-xs mt-1 md:mt-2 line-clamp-2">PhD in Conservation Biology with
                                focus on
                                Himalayan species</p>
                        </div>
                    </div>

                    <!-- Team Member 4 -->
                    <div
                        class="gsap-card bg-white rounded-lg md:rounded-xl shadow-sm md:shadow-md overflow-hidden hover:shadow-md md:hover:shadow-lg transition-shadow">
                        <div class="h-40 sm:h-48 bg-gray-200 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=761&q=80"
                                alt="Sunita Rai" class="w-full h-full object-cover">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="font-bold text-base md:text-lg text-gray-800">Sunita Rai</h3>
                            <p class="text-green-600 text-xs md:text-sm">Field Operations</p>
                            <p class="text-gray-600 text-xs mt-1 md:mt-2 line-clamp-2">Indigenous knowledge expert from
                                Eastern
                                Nepal</p>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-8 md:mt-10">
                    <a href="/team"
                        class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium px-5 py-2 md:px-6 md:py-2.5 rounded-lg transition-colors text-sm md:text-base">
                        View Full Team
                    </a>
                </div>
            </div>
        </section>

        <div class="flex justify-end">
            <button type="submit"
                class="mt-3 px-4 py-2 bg-blue-500 hover:bg-blue-600 active:bg-blue-700 text-white rounded transition-colors duration-200">
                Save
            </button>
        </div>


    </form>
@endsection