{{-- resources/views/components/services.blade.php --}}
<section class="py-24 bg-slate-50" id="services">
    <div class="container mx-auto px-6 lg:px-12">

        {{-- Header --}}
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="inline-block bg-[#8B1A32]/10 text-[#8B1A32] px-4 py-2 rounded-full text-sm font-medium mb-4">
                Our Services
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">
                Comprehensive Shipping Solutions
            </h2>
            <p class="text-slate-600 text-lg">
                From express air freight to specialized dangerous goods handling,<br class="hidden sm:block">
                we offer complete logistics solutions tailored to your needs.
            </p>
        </div>

        {{-- Services Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $services = [
                    [
                        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/></svg>',
                        'title' => 'Air Freight',
                        'desc' => 'Fast and reliable air cargo services from Dubai to Tanzania. Ideal for time-sensitive shipments with delivery in 3-5 business days.',
                        'features' => ['Express Delivery', 'Door-to-Door', 'Real-Time Tracking'],
                        'color' => 'blue',
                        'image' => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=800&q=80'
                    ],
                    [
                        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="5" r="3"/><line x1="12" y1="8" x2="12" y2="16"/><path d="M5 12H2a10 10 0 0 0 20 0h-3"/><path d="M12 16v5"/><path d="M8 21h8"/></svg>',
                        'title' => 'Sea Freight',
                        'desc' => 'Cost-effective ocean freight solutions for bulk cargo. Full container loads (FCL) and less than container loads (LCL) available.',
                        'features' => ['FCL & LCL Options', 'Bulk Shipping', 'Competitive Rates'],
                        'color' => 'cyan',
                        'image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?w=800&q=80'
                    ],
                    [
                        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>',
                        'title' => 'General Goods',
                        'desc' => 'Safe transportation of everyday items, electronics, clothing, and household goods with professional packaging included.',
                        'features' => ['Professional Packing', 'Insurance Options', 'Customs Clearance'],
                        'color' => 'emerald',
                        'image' => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=800&q=80'
                    ],
                    [
                        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>',
                        'title' => 'Dangerous Goods',
                        'desc' => 'Specialized handling for hazardous materials including chemicals, batteries, and regulated items with full compliance.',
                        'features' => ['IATA Certified', 'DG Documentation', 'Safety Protocols'],
                        'color' => 'amber',
                        'image' => 'https://images.unsplash.com/photo-1620288627223-53302f4e8c74?w=800&q=80'
                    ],
                    [
                        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>',
                        'title' => 'E-Commerce Assistance',
                        'desc' => 'Shop from Noon, Amazon, Shein, AliExpress, Temu and more. We receive, consolidate, and ship your purchases to Tanzania.',
                        'features' => ['Buy For You', 'Consolidation', 'Multi-Platform'],
                        'color' => 'purple',
                        'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&q=80'
                    ],
                    [
                        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M12 6h.01"/><path d="M12 10h.01"/><path d="M12 14h.01"/><path d="M16 10h.01"/><path d="M16 14h.01"/><path d="M8 10h.01"/><path d="M8 14h.01"/></svg>',
                        'title' => 'Business Solutions',
                        'desc' => 'Tailored B2B logistics for enterprises. Bulk procurement, warehousing, and regular shipment schedules for your business needs.',
                        'features' => ['B2B Logistics', 'Warehousing', 'Custom Solutions'],
                        'color' => 'rose',
                        'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&q=80'
                    ]
                ];

                $colors = [
                    'blue' => ['bg' => 'bg-blue-50', 'icon' => 'bg-blue-100 text-blue-600', 'text' => 'text-blue-600'],
                    'cyan' => ['bg' => 'bg-cyan-50', 'icon' => 'bg-cyan-100 text-cyan-600', 'text' => 'text-cyan-600'],
                    'emerald' => ['bg' => 'bg-emerald-50', 'icon' => 'bg-emerald-100 text-emerald-600', 'text' => 'text-emerald-600'],
                    'amber' => ['bg' => 'bg-amber-50', 'icon' => 'bg-amber-100 text-amber-600', 'text' => 'text-amber-600'],
                    'purple' => ['bg' => 'bg-purple-50', 'icon' => 'bg-purple-100 text-purple-600', 'text' => 'text-purple-600'],
                    'rose' => ['bg' => 'bg-rose-50', 'icon' => 'bg-rose-100 text-rose-600', 'text' => 'text-rose-600']
                ];
            @endphp

            @foreach($services as $index => $service)
                @php $c = $colors[$service['color']]; @endphp
                <div class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100"
                     data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">

                    {{-- Image --}}
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ $service['image'] }}"
                             alt="{{ $service['title'] }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>

                        <div class="absolute top-4 left-4 w-12 h-12 rounded-xl {{ $c['icon'] }} flex items-center justify-center">
                            <div class="w-6 h-6">
                                {!! $service['svg'] !!}
                            </div>
                        </div>
                    </div>

                    {{-- Content --}}
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-800 mb-3">{{ $service['title'] }}</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-4">
                            {{ $service['desc'] }}
                        </p>

                        {{-- Feature Tags --}}
                        <div class="flex flex-wrap gap-2 mb-6">
                            @foreach($service['features'] as $feature)
                                <span class="{{ $c['bg'] }} {{ $c['text'] }} text-xs font-medium px-3 py-1 rounded-full">
                                    {{ $feature }}
                                </span>
                            @endforeach
                        </div>

                        {{-- CTA --}}
                        <a href="{{ route('services') }}#{{ strtolower(str_replace(' ', '-', $service['title'])) }}"
                           class="inline-flex items-center gap-1 text-slate-700 hover:text-[#8B1A32] font-medium group/btn transition">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover/btn:translate-x-1 transition"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>