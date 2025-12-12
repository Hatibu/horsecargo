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
                        'icon' => 'airplane-tilt',
                        'title' => 'Air Freight',
                        'desc' => 'Fast and reliable air cargo services from Dubai to Tanzania. Ideal for time-sensitive shipments with delivery in 3-5 business days.',
                        'features' => ['Express Delivery', 'Door-to-Door', 'Real-Time Tracking'],
                        'color' => 'blue',
                        'image' => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=800&q=80'
                    ],
                    [
                        'icon' => 'anchor-simple',
                        'title' => 'Sea Freight',
                        'desc' => 'Cost-effective ocean freight solutions for bulk cargo. Full container loads (FCL) and less than container loads (LCL) available.',
                        'features' => ['FCL & LCL Options', 'Bulk Shipping', 'Competitive Rates'],
                        'color' => 'cyan',
                        'image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?w=800&q=80'
                    ],
                    [
                        'icon' => 'package',
                        'title' => 'General Goods',
                        'desc' => 'Safe transportation of everyday items, electronics, clothing, and household goods with professional packaging included.',
                        'features' => ['Professional Packing', 'Insurance Options', 'Customs Clearance'],
                        'color' => 'emerald',
                        'image' => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=800&q=80'
                    ],
                    [
                        'icon' => 'warning-octagon',
                        'title' => 'Dangerous Goods',
                        'desc' => 'Specialized handling for hazardous materials including chemicals, batteries, and regulated items with full compliance.',
                        'features' => ['IATA Certified', 'DG Documentation', 'Safety Protocols'],
                        'color' => 'amber',
                        'image' => 'https://images.unsplash.com/photo-1620288627223-53302f4e8c74?w=800&q=80'
                    ],
                    [
                        'icon' => 'shopping-cart',
                        'title' => 'E-Commerce Assistance',
                        'desc' => 'Shop from Noon, Amazon, Shein, AliExpress, Temu and more. We receive, consolidate, and ship your purchases to Tanzania.',
                        'features' => ['Buy For You', 'Consolidation', 'Multi-Platform'],
                        'color' => 'purple',
                        'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&q=80'
                    ],
                    [
                        'icon' => 'building-2',
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
                            <i class="ph-{{ $service['icon'] }} text-2xl"></i>
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
                            <i class="ph-arrow-right group-hover/btn:translate-x-1 transition"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>