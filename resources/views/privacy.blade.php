@extends("master")
@section('title', 'Policies')
@section('content')

    <!-- Hero Section -->
    <section id="privacy-policy"
        class="min-h-[200px] md:min-h-[500px] bg-cover bg-center py-8 md:py-24 text-white relative flex items-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80');">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-2xl md:text-5xl font-bold mb-2 md:mb-4">{{ $privacydata->t1 }}</h1>
            <p class="text-base md:text-xl max-w-2xl mx-auto">{{ $privacydata->st1 }}</p>
            <div class="mt-4 md:mt-6">
                <a href="#policies"
                    class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 md:px-6 md:py-3 rounded-md text-sm md:text-base font-medium transition-colors">
                    View Policies
                </a>
            </div>
        </div>
    </section>

    <!-- Policy Overview -->
    <section id="environmental-policy" class="py-8 md:py-12 gsap  bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8 md:mb-12">
                <h2 class="text-xl md:text-xl md:text-3xl font-bold text-gray-800">{{ old('t2', $privacydata->t2) }}</h2>
                <div class="w-20 h-1 bg-green-600 mx-auto my-3"></div>
                <p class="text-gray-600 max-w-3xl mx-auto text-sm md:text-base">{{ $privacydata->st2 }}</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                    <!-- Policy Card 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                        <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-sm md:text-xl font-semibold mb-2">{{ $privacydata->t3 }}</h3>
                        <p class="text-gray-600 text-sm md:text-base">{{ $privacydata->st3 }}</p>
                    </div>

                    <!-- Policy Card 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                        <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-sm md:text-xl font-semibold mb-2">{{ $privacydata->t4 }}</h3>
                        <p class="text-gray-600 text-sm md:text-base">{{ $privacydata->st4 }}</p>
                    </div>

                    <!-- Policy Card 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                        <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-sm md:text-xl font-semibold mb-2">{{ $privacydata->t5 }}</h3>
                        <p class="text-gray-600 text-sm md:text-base"> {{ $privacydata->st5 }} </p>
                    </div>
                </div>
            </div>
    </section>

    <!-- Main Policies Section -->
    <section id="donor-policy" class="py-8 md:py-12 gsap  bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Privacy Policy -->
                <div id="data-security" class="mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">{{ $privacydata->t6 }}</h2>
                    <div class="prose max-w-none">
                        <p class="text-gray-600 mb-4">{{ $privacydata->st6}}</p>

                        <h3 class="text-lg md:text-xl font-semibold text-gray-800 mt-6 mb-3">{{ $privacydata->t7 }}</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">{{ $privacydata->st7 }}</p>
                        <ul class="list-disc pl-5 text-gray-600 space-y-1 mb-4 text-sm md:text-base">
                            @foreach(explode("\n", $privacydata->st24) as $item)
                                @if(trim($item))
                                    <li>{{ trim($item) }}</li>
                                @endif
                            @endforeach
                        </ul>

                        <h3 class="text-lg md:text-xl font-semibold text-gray-800 mt-6 mb-3">{{ $privacydata->t8 }}</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">{{ $privacydata->st8 }}</p>
                         <ul class="list-disc pl-5 text-gray-600 space-y-1 mb-4 text-sm md:text-base">
                            @foreach(explode("\n", $privacydata->st25) as $item)
                                @if(trim($item))
                                    <li>{{ trim($item) }}</li>
                                @endif
                            @endforeach
                        </ul>

                        <h3 class="text-lg md:text-xl font-semibold text-gray-800 mt-6 mb-3">{{ $privacydata->t9 }}</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">{{ $privacydata->st9  }}</p>

                        <div class="bg-gray-50 p-4 rounded-lg mt-6">
                            <h4 class="font-medium text-gray-800 mb-2">{{ $privacydata->t10 }}</h4>
                            <p class="text-gray-600 text-sm md:text-base">{{ $privacydata->st10 }} <a
                                    href="mailto:privacy@sustainablenepal.org"
                                    class="text-green-600 hover:underline">@sustainablenepal.org</a>.</p>
                        </div>
                    </div>
                </div>

                <!-- Environmental Policy -->
                <div class="mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">{{ $privacydata->t11 }}</h2>
                    <div class="prose max-w-none">
                        <h3 class="text-lg md:text-xl font-semibold text-gray-800 mt-6 mb-3">{{ $privacydata->t12 }}</h3>
                        <p class="text-gray-600 mb-4">{{ $privacydata->st12 }}</p>

                        <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">{{ $privacydata->t13 }}</h3>
                         <ul class="list-disc pl-5 text-gray-600 space-y-1 mb-4 text-sm md:text-base">
                            @foreach(explode("\n", $privacydata->st26) as $item)
                                @if(trim($item))
                                    <li>{{ trim($item) }}</li>
                                @endif
                            @endforeach
                        </ul>

                        <h3 class="text-lg md:text-xl font-semibold text-gray-800 mt-6 mb-3">{{ $privacydata->t14 }}</h3>
                        <p class="text-gray-600 mb-4">{{ $privacydata->st14 }}</p>
                    </div>
                </div>

                <!-- Donor Policy -->
                <div class="mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">{{ $privacydata->t15 }}</h2>
                    <div class="prose max-w-none">
                        <h3 class="text-lg md:text-xl font-semibold text-gray-800 mt-6 mb-3">{{ $privacydata->t16 }}</h3>
                        <p class="text-gray-600 mb-4">{{ $privacydata->st16 }}</p>
                        <!-- <ul class="list-disc pl-5 text-gray-600 space-y-1 mb-4 text-sm md:text-base">
                            <li>To be informed of the organization's mission</li>
                            <li>To know how donations are being used</li>
                            <li>To receive appropriate acknowledgment</li>
                            <li>To have access to the organization's financial statements</li>
                            <li>To be assured their gifts are used for purposes for which they were given</li>
                        </ul> -->
                         <ul class="list-disc pl-5 text-gray-600 space-y-1 mb-4 text-sm md:text-base">
                            @foreach(explode("\n", $privacydata->st27) as $item)
                                @if(trim($item))
                                    <li>{{ trim($item) }}</li>
                                @endif
                            @endforeach
                        </ul>

                        <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">{{ $privacydata->t17 }}</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">{{ $privacydata->st17 }}</p>

                        <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">{{ $privacydata->t18 }}</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">{{ $privacydata->st18 }}</p>
                    </div>
                </div>

                <!-- Code of Conduct -->
                <div id="anti-harassment">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Code of Conduct</h2>
                    <div class="prose max-w-none">
                        <h3 class="text-lg md:text-xl font-semibold text-gray-800 mt-6 mb-3">Ethical Standards</h3>
                        <p class="text-gray-600 mb-4">All staff, volunteers, and representatives of Sustainable Nepal must:
                        </p>
                        <!-- <ul class="list-disc pl-5 text-gray-600 space-y-1 mb-4 text-sm md:text-base">
                            <li>Act with honesty and integrity</li>
                            <li>Avoid conflicts of interest</li>
                            <li>Respect confidentiality</li>
                            <li>Treat all people with dignity and respect</li>
                            <li>Comply with all applicable laws and regulations</li>
                        </ul> -->
                        <ul class="list-disc pl-5 text-gray-600 space-y-1 mb-4 text-sm md:text-base">
                            @foreach(explode("\n", $privacydata->st28) as $item)
                                @if(trim($item))
                                    <li>{{ trim($item) }}</li>
                                @endif
                            @endforeach
                        </ul>

                        <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">{{ $privacydata->t21 }}</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">{{ $privacydata->st21 }}</p>

                        <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">{{ $privacydata->t22 }}</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">{{ $privacydata->st22 }}<a
                                href="mailto:ethics@sustainablenepal.org" class="text-green-600 hover:underline">
                                ethics@sustainablenepal.org</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- CTA Section -->
    <section id="cta-section" class="py-12 md:py-16 bg-green-800 text-white">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-lg md:text-3xl font-bold mb-4">{{ $privacydata->t23 }}</h2>
                <p class="text-lg md:text-xl mb-8 text-sm md:text-base">{{ $privacydata->st23 }}</p>
                <div class="flex flex-col sm:flex-row justify-center gap-3 md:gap-4">
                    <a href="/contact"
                        class="bg-white text-green-800 hover:bg-gray-100 font-medium px-4 py-2 md:px-6 md:py-3 rounded-lg transition-colors text-sm md:text-base">
                        Contact Compliance Team
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection