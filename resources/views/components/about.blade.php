<section class="py-24 bg-white" id="about">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            {{-- Left Side - Images + Badge --}}
            <div class="relative" data-aos="fade-right">
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <div class="rounded-2xl overflow-hidden h-48 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                            <img src="https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?w=600&q=80"
                                 alt="Dubai Skyline" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="rounded-2xl overflow-hidden h-64 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                            <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?w=600&q=80"
                                 alt="Cargo Operations" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                    <div class="space-y-4 pt-8">
                        <div class="rounded-2xl overflow-hidden h-64 shadow-lg" data-aos="fade-up" data-aos-delay="300">
                            <img src="https://images.unsplash.com/photo-1605745341112-85968b19335b?w=600&q=80"
                                 alt="Shipping Container" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="rounded-2xl overflow-hidden h-48 shadow-lg" data-aos="fade-up" data-aos-delay="400">
                            <img src="https://images.unsplash.com/photo-1520880867055-1e30d1cb001c?w=600&q=80"
                                 alt="Air Freight" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                </div>

                {{-- Experience Badge --}}
                <div class="absolute -bottom-6 -right-6 bg-[#8B1A32] text-white rounded-2xl p-6 shadow-2xl"
                     data-aos="zoom-in" data-aos-delay="500">
                    <div class="text-4xl font-bold">10+</div>
                    <div class="text-white/80 text-sm">Years Experience</div>
                </div>
            </div>

            {{-- Right Side - Content --}}
            <div data-aos="fade-left">
                <span class="inline-block bg-[#8B1A32]/10 text-[#8B1A32] px-4 py-2 rounded-full text-sm font-medium mb-4">
                    About Horse Cargo
                </span>

                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 mb-6 leading-tight">
                    Your Trusted Logistics Partner Between<br>
                    <span class="text-[#8B1A32]">Dubai & Tanzania</span>
                </h2>

                <p class="text-slate-600 text-lg leading-relaxed mb-6">
                    Horse Cargo is a premier logistics company specializing in cargo shipping
                    between Dubai, UAE and Tanzania. With offices in both locations, we provide
                    seamless end-to-end shipping solutions for businesses and individuals alike.
                </p>

                <p class="text-slate-600 leading-relaxed mb-10">
                    Whether you're shipping general merchandise, e-commerce purchases, or
                    hazardous materials requiring special handling, our expert team ensures
                    your cargo reaches its destination safely and on time.
                </p>

                {{-- Values Grid --}}
                <div class="grid sm:grid-cols-2 gap-6">
                    @php
                        $values = [
                            ['icon' => 'target', 'title' => 'Our Mission', 'desc' => 'To provide reliable, efficient, and cost-effective shipping solutions connecting Dubai and Tanzania.'],
                            ['icon' => 'trophy', 'title' => 'Excellence', 'desc' => 'We maintain the highest standards in cargo handling, ensuring your shipments arrive safely.'],
                            ['icon' => 'users', 'title' => 'Customer First', 'desc' => 'Every client matters. From individuals to corporations, we deliver personalized service.'],
                            ['icon' => 'globe', 'title' => 'Global Reach', 'desc' => 'Strategic offices in Dubai and Tanzania for seamless cross-border logistics operations.'],
                        ];
                    @endphp

                    @foreach($values as $index => $value)
                        <div class="group" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-slate-100 group-hover:bg-[#8B1A32] flex items-center justify-center transition-all duration-300 flex-shrink-0">
                                    <i class="ph-{{ $value['icon'] }} ph-bold text-2xl text-[#8B1A32] group-hover:text-white transition-colors"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-slate-800 mb-1">{{ $value['title'] }}</h3>
                                    <p class="text-slate-500 text-sm leading-relaxed">{{ $value['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Company Story Section --}}
<section class="py-24 bg-slate-50">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="max-w-4xl mx-auto text-center mb-16" data-aos="fade-up">
            <span class="inline-block bg-[#8B1A32]/10 text-[#8B1A32] px-4 py-2 rounded-full text-sm font-medium mb-4">
                Our Story
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6">
                Building Bridges Across Continents
            </h2>
            <p class="text-slate-600 text-lg leading-relaxed">
                Since our establishment, Horse Cargo has been dedicated to simplifying international shipping 
                between Dubai and Tanzania. We started with a simple mission: to make cross-border logistics 
                accessible, reliable, and affordable for everyone.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            @php
                $milestones = [
                    [
                        'year' => '2014',
                        'title' => 'Foundation',
                        'desc' => 'Horse Cargo was founded with a vision to connect Dubai and Tanzania through reliable logistics services.',
                    ],
                    [
                        'year' => '2017',
                        'title' => 'Tanzania Office',
                        'desc' => 'Opened our Dar es Salaam office to provide local support and faster delivery services.',
                    ],
                    [
                        'year' => '2024',
                        'title' => 'Today',
                        'desc' => 'Serving thousands of customers with 10,000+ successful shipments and 99.5% on-time delivery rate.',
                    ],
                ];
            @endphp

            @foreach($milestones as $index => $milestone)
                <div class="text-center" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                    <div class="text-4xl font-bold text-[#8B1A32] mb-3">{{ $milestone['year'] }}</div>
                    <h3 class="text-xl font-semibold text-slate-800 mb-3">{{ $milestone['title'] }}</h3>
                    <p class="text-slate-600 leading-relaxed">{{ $milestone['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Office Locations Section --}}
<section class="py-24 bg-white">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block bg-[#8B1A32]/10 text-[#8B1A32] px-4 py-2 rounded-full text-sm font-medium mb-4">
                Our Offices
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">
                Strategic Locations for Global Reach
            </h2>
            <p class="text-slate-600 text-lg max-w-2xl mx-auto">
                With offices in both Dubai and Tanzania, we provide seamless coordination and local support 
                throughout your shipping journey.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            @php
                $offices = [
                    [
                        'city' => 'Dubai, UAE',
                        'address' => 'Dubai International Airport Free Zone',
                        'phone' => '+971 50 608 3531',
                        'email' => 'dubai@horsecargo.com',
                        'hours' => 'Sunday - Thursday: 9:00 AM - 6:00 PM',
                        'color' => 'blue',
                    ],
                    [
                        'city' => 'Dar es Salaam, Tanzania',
                        'address' => 'City Center Business District',
                        'phone' => '+255 77 822 2251',
                        'email' => 'tanzania@horsecargo.com',
                        'hours' => 'Monday - Friday: 8:00 AM - 5:00 PM',
                        'color' => 'emerald',
                    ],
                ];
            @endphp

            @foreach($offices as $index => $office)
                @php
                    $colorClasses = [
                        'blue' => ['bg' => 'bg-blue-100', 'text' => 'text-blue-600'],
                        'emerald' => ['bg' => 'bg-emerald-100', 'text' => 'text-emerald-600'],
                    ];
                    $c = $colorClasses[$office['color']] ?? $colorClasses['blue'];
                @endphp
                <div class="bg-gradient-to-br from-slate-50 to-white rounded-2xl p-8 border border-slate-200 shadow-lg hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 rounded-xl {{ $c['bg'] }} flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="{{ $c['text'] }}">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-800">{{ $office['city'] }}</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-slate-400 mt-0.5">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                            <p class="text-slate-600">{{ $office['address'] }}</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-slate-400">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            <a href="tel:{{ str_replace(' ', '', $office['phone']) }}" class="text-slate-700 hover:text-[#8B1A32] transition">{{ $office['phone'] }}</a>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-slate-400">
                                <rect width="20" height="16" x="2" y="4" rx="2"/>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                            </svg>
                            <a href="mailto:{{ $office['email'] }}" class="text-slate-700 hover:text-[#8B1A32] transition">{{ $office['email'] }}</a>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-slate-400">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                            <p class="text-slate-600">{{ $office['hours'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Certifications & Compliance Section --}}
<section class="py-24 bg-slate-900 text-white">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block bg-white/10 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-medium mb-4">
                    Certifications & Compliance
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Licensed & Certified Operations
                </h2>
                <p class="text-white/80 text-lg">
                    We maintain the highest standards of compliance and certification to ensure your cargo 
                    is handled with the utmost care and professionalism.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                @php
                    $certifications = [
                        [
                            'title' => 'UAE Licensed Freight Forwarder',
                            'desc' => 'Fully licensed and registered freight forwarding company in the United Arab Emirates.',
                        ],
                        [
                            'title' => 'IATA Certified',
                            'desc' => 'International Air Transport Association certified for handling dangerous goods and air cargo.',
                        ],
                        [
                            'title' => 'Customs Brokerage License',
                            'desc' => 'Authorized customs clearance services in both Dubai and Tanzania.',
                        ],
                        [
                            'title' => 'ISO Compliance',
                            'desc' => 'Following international standards for quality management and cargo handling.',
                        ],
                    ];
                @endphp

                @foreach($certifications as $index => $cert)
                    <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 hover:bg-white/10 transition-all duration-300" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-lg bg-[#8B1A32] flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-white mb-2 text-lg">{{ $cert['title'] }}</h3>
                                <p class="text-white/70 text-sm leading-relaxed">{{ $cert['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Statistics Section --}}
<section class="py-24 bg-gradient-to-br from-[#8B1A32] to-[#6B1426] text-white">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="grid md:grid-cols-4 gap-8 max-w-6xl mx-auto">
            @php
                $stats = [
                    ['value' => '10,000+', 'label' => 'Shipments Delivered', 'icon' => 'package'],
                    ['value' => '5,000+', 'label' => 'Happy Customers', 'icon' => 'users'],
                    ['value' => '99.5%', 'label' => 'On-Time Delivery', 'icon' => 'clock'],
                    ['value' => '10+', 'label' => 'Years Experience', 'icon' => 'trophy'],
                ];
            @endphp

            @foreach($stats as $index => $stat)
                <div class="text-center" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                    <div class="text-5xl md:text-6xl font-bold mb-3">{{ $stat['value'] }}</div>
                    <div class="text-white/90 text-lg">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>