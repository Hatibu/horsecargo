<section class="py-24 bg-slate-900 relative overflow-hidden">
    <!-- Floating Orbs -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-[#8B1A32] rounded-full blur-3xl opacity-10"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-amber-500 rounded-full blur-3xl opacity-10"></div>

    <!-- Ensure SVG icons are visible and professional -->
    <style>
        section svg {
            width: 100% !important;
            height: 100% !important;
            display: block !important;
        }
    </style>

    <div class="container mx-auto px-6 lg:px-12 relative z-10">

        {{-- Header --}}
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <div class="flex justify-center mb-6" data-aos="fade-up" data-aos-delay="50">
                <img src="{{ asset('media/images/logo.png') }}" 
                     alt="Horse Cargo Logo" 
                     class="h-16 w-auto object-contain"
                     onerror="this.style.display='none'">
            </div>
            <span class="inline-block bg-white/10 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-medium mb-4">
                Why Choose Us
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                The Horse Cargo Advantage
            </h2>
            <p class="text-slate-300 text-lg">
                Experience the difference with our comprehensive logistics solutions<br class="hidden sm:block">
                designed for reliability, speed, and customer satisfaction.
            </p>
        </div>

        {{-- Features Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @php
                $features = [
                    [
                        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>',
                        'title' => 'Fast Delivery',
                        'desc' => 'Express air freight options with delivery in 3-5 days. Your cargo arrives when you need it.',
                        'color' => 'amber'
                    ],
                    [
                        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>',
                        'title' => 'Safe Handling',
                        'desc' => 'Professional handling of all cargo types including fragile and dangerous goods with care.',
                        'color' => 'emerald'
                    ],
                    [
                        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>',
                        'title' => 'Real-Time Tracking',
                        'desc' => 'Track your shipment 24/7 with our advanced tracking system. Always know where your cargo is.',
                        'color' => 'blue'
                    ],
                    [
                        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="16.5" x2="7.5" y1="9" y2="9"/><path d="M21 7v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7"/><path d="M3 7h4l2 5h6l2-5h4"/></svg>',
                        'title' => 'Professional Packaging',
                        'desc' => 'Expert packing services to ensure your items are protected throughout the journey.',
                        'color' => 'purple'
                    ],
                    [
                        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" x2="12" y1="2" y2="22"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
                        'title' => 'Affordable Pricing',
                        'desc' => 'Competitive rates with no hidden fees. Get the best value for your shipping needs.',
                        'color' => 'rose'
                    ],
                    [
                        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M12 6h.01"/><path d="M12 10h.01"/><path d="M12 14h.01"/><path d="M16 10h.01"/><path d="M16 14h.01"/><path d="M8 10h.01"/><path d="M8 14h.01"/></svg>',
                        'title' => 'Dual Office Presence',
                        'desc' => 'Offices in both Dubai and Tanzania for seamless coordination and local support.',
                        'color' => 'cyan'
                    ],
                ];

                $colors = [
                    'amber'   => ['bg' => 'bg-amber-100',   'icon' => 'text-amber-600',   'ring' => 'ring-amber-200'],
                    'emerald' => ['bg' => 'bg-emerald-100', 'icon' => 'text-emerald-600', 'ring' => 'ring-emerald-200'],
                    'blue'    => ['bg' => 'bg-blue-100',    'icon' => 'text-blue-600',    'ring' => 'ring-blue-200'],
                    'purple'  => ['bg' => 'bg-purple-100',  'icon' => 'text-purple-600',  'ring' => 'ring-purple-200'],
                    'rose'    => ['bg' => 'bg-rose-100',    'icon' => 'text-rose-600',    'ring' => 'ring-rose-200'],
                    'cyan'    => ['bg' => 'bg-cyan-100',    'icon' => 'text-cyan-600',    'ring' => 'ring-cyan-200'],
                ];
            @endphp

            @foreach($features as $index => $f)
                @php $c = $colors[$f['color']]; @endphp
                <div class="group" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-300 h-full">
                        <div class="w-10 h-10 {{ $c['bg'] }} rounded-lg flex items-center justify-center mb-5 ring-2 {{ $c['ring'] }} shadow-md group-hover:scale-105 transition-all duration-300">
                            <div class="{{ $c['icon'] }}" style="width: 1.25em; height: 1.25em;">
                                {!! $f['svg'] !!}
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">{{ $f['title'] }}</h3>
                        <p class="text-slate-400 leading-relaxed">{{ $f['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Stats Bar --}}
        <div class="mt-16 bg-gradient-to-r from-[#8B1A32] to-[#6B1426] rounded-2xl p-8 md:p-10" data-aos="fade-up">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                @php
                    $stats = [
                        ['value' => '10,000+', 'label' => 'Shipments Delivered'],
                        ['value' => '5,000+', 'label' => 'Happy Customers'],
                        ['value' => '99.5%', 'label' => 'On-Time Delivery'],
                        ['value' => '2', 'label' => 'Office Locations'],
                    ];
                @endphp

                @foreach($stats as $index => $stat)
                    <div class="text-center" data-aos="zoom-in" data-aos-delay="{{ 200 + $index * 100 }}">
                        <div class="text-3xl md:text-4xl font-bold text-white mb-1">{{ $stat['value'] }}</div>
                        <div class="text-white/70 text-sm">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
