{{-- resources/views/components/why-choose-us.blade.php --}}
<section class="py-24 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 relative overflow-hidden">
    <!-- Floating Orbs -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-[#8B1A32] rounded-full blur-3xl opacity-10"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-amber-500 rounded-full blur-3xl opacity-10"></div>

    <div class="container mx-auto px-6 lg:px-12 relative z-10">

        {{-- Header --}}
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
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
                    ['icon' => 'zap', 'title' => 'Fast Delivery', 'desc' => 'Express air freight options with delivery in 3-5 days. Your cargo arrives when you need it.', 'color' => 'amber'],
                    ['icon' => 'shield-check', 'title' => 'Safe Handling', 'desc' => 'Professional handling of all cargo types including fragile and dangerous goods with care.', 'color' => 'emerald'],
                    ['icon' => 'navigation', 'title' => 'Real-Time Tracking', 'desc' => 'Track your shipment 24/7 with our advanced tracking system. Always know where your cargo is.', 'color' => 'blue'],
                    ['icon' => 'package', 'title' => 'Professional Packaging', 'desc' => 'Expert packing services to ensure your items are protected throughout the journey.', 'color' => 'purple'],
                    ['icon' => 'currency-dollar', 'title' => 'Affordable Pricing', 'desc' => 'Competitive rates with no hidden fees. Get the best value for your shipping needs.', 'color' => 'rose'],
                    ['icon' => 'building-2', 'title' => 'Dual Office Presence', 'desc' => 'Offices in both Dubai and Tanzania for seamless coordination and local support.', 'color' => 'cyan'],
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
                        <div class="w-14 h-14 {{ $c['bg'] }} rounded-xl flex items-center justify-center mb-5 ring-4 {{ $c['ring'] }} shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="ph-{{ $f['icon'] }} text-3xl {{ $c['icon'] }}"></i>
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