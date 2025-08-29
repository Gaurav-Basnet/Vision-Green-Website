@extends('Auth.dashboard')
@section('title', 'Privacy Page Editor')
@section('content')

    @if(session('success'))
        <div class="text-green-600">{{ session('success') }}</div>
    @endif

    <form action="{{  route('privacy-sections.update') }}" method="POST">
        @csrf

        <!-- Hero Section -->
        <section id="privacy-policy"
            class="min-h-[200px] md:min-h-[500px] bg-cover bg-center py-8 md:py-24 text-white relative flex items-center"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80');">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="container mx-auto px-4 text-center relative z-10">
                <!-- <h1 class="text-2xl md:text-5xl font-bold mb-2 md:mb-4">Privacy & Policies</h1> -->
                <input type="text" name="t1" value="{{ old('t1', $privacydata->t1) }}"
                    placeholder="Enter Privacy Policy Heading"
                    class="text-2xl md:text-5xl font-bold mb-2 md:mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg flex text-center">
                <!-- <p class="text-base md:text-xl max-w-2xl mx-auto">Transparent guidelines that govern our operations and
                                                            commitments</p> -->
                <textarea name="st1" placeholder="Enter policy description"
                    class="text-base md:text-xl max-w-2xl mx-auto w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg flex text-center">{{ old('st1', $privacydata->st1) }}</textarea>
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
                    <!-- <h2 class="text-xl md:text-xl md:text-3xl font-bold text-gray-800">Our Commitment to Transparency</h2>
                                                            <div class="w-20 h-1 bg-green-600 mx-auto my-3"></div>
                                                            <p class="text-gray-600 max-w-3xl mx-auto text-sm md:text-base">At Sustainable Nepal, we believe in
                                                                operating with integrity and accountability. Our policies reflect our commitment to ethical
                                                                practices, environmental responsibility, and stakeholder engagement.</p> -->
                    <!-- Heading Input -->
                    <input type="text" name="t2" value="{{ old('t2', $privacydata->t2) }}"
                        placeholder="Enter commitment heading"
                        class="text-xl md:text-3xl font-bold text-gray-800 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg flex text-center">

                    <!-- Green Divider (kept as static element) -->
                    <div class="w-20 h-1 bg-green-600 mx-auto my-3"></div>

                    <!-- Description Textarea -->
                    <textarea name="st2" placeholder="Enter commitment description"
                        class="text-gray-600 max-w-3xl mx-auto text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg flex text-center">{{ old('st2', $privacydata->st2) }}</textarea>
                </div>

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
                        <!-- Heading Input -->
                        <input type="text" name="t3" value="{{ old('t3', $privacydata->t3) }}"
                            placeholder="Enter policy heading"
                            class="text-sm md:text-xl font-semibold mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                        <!-- Description Textarea -->
                        <textarea name="st3" placeholder="Enter policy description"
                            class="text-gray-600 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st3', $privacydata->st3) }}</textarea>
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
                        <!-- Heading Input -->
                        <input type="text" name="t4" value="{{ old('t4', $privacydata->t4) }}"
                            placeholder="Enter policy heading"
                            class="text-sm md:text-xl font-semibold mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                        <!-- Description Textarea -->
                        <textarea name="st4" placeholder="Enter policy description"
                            class="text-gray-600 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st4', $privacydata->st4) }}</textarea>
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
                        <!-- Heading Input -->
                        <input type="text" name="t5" value="{{ old('t5', $privacydata->t5) }}"
                            placeholder="Enter policy heading"
                            class="text-sm md:text-xl font-semibold mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                        <!-- Description Textarea -->
                        <textarea name="st5" placeholder="Enter policy description"
                            class="text-gray-600 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st5', $privacydata->st5) }}</textarea>
                    </div>
                </div>
            </div>
        </section>

        <section id="donor-policy" class="py-8 md:py-12 gsap bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <!-- Privacy Policy -->
                    <div id="data-security" class="mb-12">
                        <input type="text" name="t6" value="{{ old('t6', $privacydata->t6) }}"
                            placeholder="Enter Privacy Policy Heading"
                            class="text-2xl md:text-3xl font-bold text-gray-800 mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                        <div class="prose max-w-none">
                            <input type="text" name="st6" value="{{ old('st6', $privacydata->st6) }}"
                                placeholder="Last updated: January 15, 2023"
                                class="text-gray-600 mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                            <!-- Section 1 -->
                            <input type="text" name="t7" value="{{ old('t7', $privacydata->t7) }}"
                                placeholder="1. Information We Collect"
                                class="text-lg md:text-xl font-semibold text-gray-800 mt-6 mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                            <textarea name="st7" placeholder="Description of information collection"
                                class="text-gray-600 mb-4 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st7', $privacydata->st7) }}</textarea>

                            <textarea name="st24"
                                placeholder="Enter list items (one per line)&#10;• Register for our programs or events&#10;• Subscribe to our newsletter&#10;• Make a donation&#10;• Submit inquiries through our contact forms"
                                class="text-gray-600 mb-4 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg pl-5 list-textarea">{{ old('st24', $privacydata->st24) }}</textarea>

                            <!-- Section 2 -->
                            <input type="text" name="t8" value="{{ old('t8', $privacydata->t8) }}"
                                placeholder="2. How We Use Your Information"
                                class="text-lg md:text-xl font-semibold text-gray-800 mt-6 mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                            <textarea name="st8" placeholder="Description of information usage"
                                class="text-gray-600 mb-4 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st8', $privacydata->st8) }}</textarea>

                            <textarea name="st25"
                                placeholder="Enter list items (one per line)&#10;• Provide and improve our services&#10;• Process donations and send acknowledgments&#10;• Communicate about programs and initiatives&#10;• Comply with legal obligations"
                                class="text-gray-600 mb-4 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg pl-5 list-textarea">{{ old('st25', $privacydata->st25) }}</textarea>

                            <!-- Section 3 -->
                            <input type="text" name="t9" value="{{ old('t9', $privacydata->t9) }}"
                                placeholder="3. Data Security"
                                class="text-lg md:text-xl font-semibold text-gray-800 mt-6 mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                            <textarea name="st9" placeholder="Description of data security measures"
                                class="text-gray-600 mb-4 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st9', $privacydata->st9) }}</textarea>

                            <!-- Your Rights Box -->
                            <div class="bg-gray-50 p-4 rounded-lg mt-6">
                                <input type="text" name="t10" value="{{ old('t10', $privacydata->t10) }}"
                                    placeholder="Your Rights"
                                    class="font-medium text-gray-800 mb-2 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                                <textarea name="st10" placeholder="Rights description text"
                                    class="text-gray-600 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st10', $privacydata->st10) }}</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Environmental Policy -->
                    <div class="mb-12">
                        <input type="text" name="t11" value="{{ old('t11', $privacydata->t11) }}"
                            placeholder="Environmental Policy Heading"
                            class="text-2xl md:text-3xl font-bold text-gray-800 mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                        <div class="prose max-w-none">
                            <!-- Our Commitment -->
                            <input type="text" name="t12" value="{{ old('t12', $privacydata->t12) }}"
                                placeholder="Our Commitment"
                                class="text-lg md:text-xl font-semibold text-gray-800 mt-6 mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                            <textarea name="st12" placeholder="Environmental commitment description"
                                class="text-gray-600 mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st12', $privacydata->st12) }}</textarea>


                            <!-- Key Principles -->
                            <input type="text" name="t13" value="{{ old('t13', $privacydata->t13) }}"
                                placeholder="Key Principles"
                                class="text-lg font-semibold text-gray-800 mt-6 mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                            <textarea name="st26"
                                placeholder="Enter list items (one per line)&#10;• Minimize waste through reduction, reuse and recycling&#10;• Reduce energy and water consumption in our operations&#10;• Prioritize environmentally friendly products and services&#10;• Promote sustainable transportation options for staff&#10;• Offset unavoidable carbon emissions"
                                class="text-gray-600 mb-4 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg pl-5 list-textarea">{{ old('st26', $privacydata->st26) }}</textarea>

                            <!-- Implementation -->
                            <input type="text" name="t14" value="{{ old('t14', $privacydata->t14) }}"
                                placeholder="Implementation"
                                class="text-lg md:text-xl font-semibold text-gray-800 mt-6 mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                            <textarea name="st14" placeholder="Implementation details"
                                class="text-gray-600 mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st14', $privacydata->st14) }}</textarea>
                        </div>
                    </div>

                    <!-- Donor Policy -->
                    <div class="mb-12">
                        <input type="text" name="t15" value="{{ old('t15', $privacydata->t15) }}"
                            placeholder="Donor Policy Heading"
                            class="text-2xl md:text-3xl font-bold text-gray-800 mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                        <div class="prose max-w-none">
                            <!-- Donor Rights -->
                            <input type="text" name="t16" value="{{ old('t16', $privacydata->t16) }}"
                                placeholder="Donor Rights"
                                class="text-lg md:text-xl font-semibold text-gray-800 mt-6 mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                            <textarea name="st16" placeholder="Donor rights description"
                                class="text-gray-600 mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st16', $privacydata->st16) }}</textarea>

                            <textarea name="st27"
                                placeholder="Enter list items (one per line)&#10;• To be informed of the organization's mission&#10;• To know how donations are being used&#10;• To receive appropriate acknowledgment&#10;• To have access to the organization's financial statements&#10;• To be assured their gifts are used for purposes for which they were given"
                                class="text-gray-600 mb-4 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg pl-5 list-textarea">{{ old('st27', $privacydata->st27) }}</textarea>

                            <!-- Fund Allocation -->
                            <input type="text" name="t17" value="{{ old('t17', $privacydata->t17) }}"
                                placeholder="Fund Allocation"
                                class="text-lg font-semibold text-gray-800 mt-6 mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                            <textarea name="st17" placeholder="Fund allocation details"
                                class="text-gray-600 mb-4 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st17', $privacydata->st17) }}</textarea>

                            <!-- Gift Acceptance -->
                            <input type="text" name="t18" value="{{ old('t18', $privacydata->t18) }}"
                                placeholder="Gift Acceptance"
                                class="text-lg font-semibold text-gray-800 mt-6 mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                            <textarea name="st18" placeholder="Gift acceptance policy"
                                class="text-gray-600 mb-4 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st18', $privacydata->st18) }}</textarea>
                        </div>
                    </div>

                    <!-- Code of Conduct -->
                    <div id="anti-harassment">
                        <input type="text" name="t19" value="{{ old('t19', $privacydata->t19) }}"
                            placeholder="Code of Conduct Heading"
                            class="text-2xl md:text-3xl font-bold text-gray-800 mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                        <div class="prose max-w-none">
                            <!-- Ethical Standards -->
                            <input type="text" name="t20" value="{{ old('t20', $privacydata->t20) }}"
                                placeholder="Ethical Standards"
                                class="text-lg md:text-xl font-semibold text-gray-800 mt-6 mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                            <textarea name="st20" placeholder="Ethical standards description"
                                class="text-gray-600 mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st20', $privacydata->st20) }}</textarea>

                            <textarea name="st28"
                                placeholder="Enter list items (one per line)&#10;• Act with honesty and integrity&#10;• Avoid conflicts of interest&#10;• Respect confidentiality&#10;• Treat all people with dignity and respect&#10;• Comply with all applicable laws and regulations"
                                class="text-gray-600 mb-4 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg pl-5 list-textarea">{{ old('st28', $privacydata->st28) }}</textarea>

                            <!-- Anti-Harassment Policy -->
                            <input type="text" name="t21" value="{{ old('t21', $privacydata->t21) }}"
                                placeholder="Anti-Harassment Policy"
                                class="text-lg font-semibold text-gray-800 mt-6 mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                            <textarea name="st21" placeholder="Anti-harassment policy details"
                                class="text-gray-600 mb-4 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st21', $privacydata->st21) }}</textarea>

                            <!-- Reporting Violations -->
                            <input type="text" name="t22" value="{{ old('t22', $privacydata->t22) }}"
                                placeholder="Reporting Violations"
                                class="text-lg font-semibold text-gray-800 mt-6 mb-3 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                            <textarea name="st22" placeholder="Violation reporting process"
                                class="text-gray-600 mb-4 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st22', $privacydata->st22) }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .list-textarea {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3E%3Ccircle cx='4' cy='4' r='1.5' fill='%234b5563'/%3E%3C/svg%3E");
                background-repeat: no-repeat;
                background-position: 0.75rem 0.75rem;
                line-height: 1.75rem;
                padding-left: 2rem;
                white-space: pre-wrap;
            }

            .list-textarea:focus {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3E%3Ccircle cx='4' cy='4' r='1.5' fill='%233b82f6'/%3E%3C/svg%3E");
            }
        </style>
        <!-- Policy Updates -->
        <section id="policy-updates" class="py-8 md:py-12 gsap bg-gray-50">
            <div class="container mx-auto px-4 text-center">
                <!-- Heading Input -->
                <input type="text" name="st29" value="{{ old('st29', $privacydata->st29) }}"
                    placeholder="Enter Section Heading"
                    class=" flex text-center text-2xl md:text-3xl font-bold text-gray-800 mb-4 w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">

                <!-- Paragraph Textarea -->
                <textarea name="st30" placeholder="Enter paragraph content"
                    class=" flex text-center text-gray-600 mb-4 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">{{ old('st30', $privacydata->st30) }}</textarea>
                <div class="bg-white p-6 rounded-lg shadow-sm max-w-3xl mx-auto text-left">
                    <h3 class="font-semibold text-gray-800 mb-3">Recent Updates</h3>
                    <ul class="space-y-3">
                        <input type="text" name="t24" value="{{ old('t24', $privacydata->t24) }}"
                            placeholder="Enter list item text (e.g., Updated Privacy Policy (January 2023))"
                            class="text-gray-600 mb-2 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                        <input type="text" name="t25" value="{{ old('t25', $privacydata->t25) }}"
                            placeholder="Enter list item text (e.g., Updated Privacy Policy (January 2023))"
                            class="text-gray-600 mb-2 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                        <input type="text" name="t26" value="{{ old('t26', $privacydata->t26) }}"
                            placeholder="Enter list item text (e.g., Updated Privacy Policy (January 2023))"
                            class="text-gray-600 mb-2 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-gray-400 focus:outline-none focus:border-blue-500 p-2 rounded-lg">
                    </ul>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section id="cta-section" class="py-12 md:py-16 bg-green-800 text-white">
            <div class="container mx-auto px-4 text-center">
                <div class="max-w-3xl mx-auto">
                    <input type="text" name="t23" value="{{ old('t23', $privacydata->t23) }}"
                        placeholder="Have Questions About Our Policies?"
                        class="text-lg md:text-3xl font-bold mb-4 w-full bg-transparent border-2 border-dashed border-green-200 focus:outline-none focus:border-white p-2 rounded-lg text-white placeholder-green-200 flex text-center">

                    <textarea name="st23"
                        placeholder="Contact our compliance team for any questions or clarifications regarding our policies and procedures."
                        class="text-lg md:text-xl mb-8 text-sm md:text-base w-full bg-transparent border-2 border-dashed border-green-200 focus:outline-none focus:border-white p-2 rounded-lg text-white placeholder-green-200 text-center">{{ old('st23', $privacydata->st23) }}</textarea>

                    <div class="flex flex-col sm:flex-row justify-center gap-3 md:gap-4">
                        <a href="/contact"
                            class="bg-white text-green-800 hover:bg-gray-100 font-medium px-4 py-2 md:px-6 md:py-3 rounded-lg transition-colors text-sm md:text-base">
                            Contact Compliance Team
                        </a>
                    </div>
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