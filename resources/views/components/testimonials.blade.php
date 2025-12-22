{{-- resources/views/components/testimonials.blade.php --}}
<section class="py-24 bg-white" id="testimonials">
    <div class="container mx-auto px-6 lg:px-12">

        {{-- Header --}}
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="inline-block bg-[#8B1A32]/10 text-[#8B1A32] px-4 py-2 rounded-full text-sm font-medium mb-4">
                Testimonials
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">
                What Our Customers Say
            </h2>
            <p class="text-slate-600 text-lg">
                From individual shoppers to large corporations, our customers trust us<br class="hidden sm:block">
                with their most important shipments.
            </p>
        </div>

        {{-- Testimonials Grid --}}
        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            @php
                $testimonials = [
                    [
                        'name' => 'Amina Juma',
                        'role' => 'Business Owner, Dar es Salaam',
                        'image' => 'https://images.unsplash.com/photo-1531123897727-8f129e1688ce?w=200&h=200&fit=crop&crop=face&auto=format',
                        'text' => 'Horse Cargo has been our shipping partner for 3 years. Their reliability and professionalism have helped our business grow. The e-commerce assistance service is a game-changer!',
                        'type' => 'business'
                    ],
                    [
                        'name' => 'John Mwanga',
                        'role' => 'Import/Export Manager, Arusha',
                        'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop&crop=face',
                        'text' => 'We ship dangerous goods regularly and Horse Cargo handles everything with expertise. Their documentation is always perfect and deliveries are always on time.',
                        'type' => 'enterprise'
                    ],
                    [
                        'name' => 'Fatuma Hassan',
                        'role' => 'Online Shopper, Zanzibar',
                        'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200&h=200&fit=crop&crop=face',
                        'text' => 'I love shopping from Amazon and Shein! Horse Cargo makes it so easy. They consolidate my packages and deliver right to my door. Excellent service!',
                        'type' => 'individual'
                    ],
                    [
                        'name' => 'Michael Kimario',
                        'role' => 'Procurement Director, Mwanza',
                        'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=200&h=200&fit=crop&crop=face',
                        'text' => 'Our company ships bulk cargo monthly from Dubai. Horse Cargo offers the best rates and their sea freight service is exceptionally reliable. Highly recommended!',
                        'type' => 'enterprise'
                    ]
                ];
            @endphp

            @foreach($testimonials as $index => $t)
                @php
                    $badgeColor = $t['type'] === 'business' ? 'bg-blue-100 text-blue-700' :
                                  ($t['type'] === 'enterprise' ? 'bg-purple-100 text-purple-700' :
                                  'bg-green-100 text-green-700');
                    $badgeText = ucfirst($t['type']);
                @endphp

                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg border border-slate-100 hover:shadow-2xl transition-all duration-500"
                     data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">

                    <!-- Quote Icon -->
                    <i class="ph-quotes text-5xl text-[#8B1A32]/20 mb-4 block"></i>

                    <!-- Stars -->
                    <div class="flex gap-1 mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <i class="ph-star-fill text-amber-400 text-xl"></i>
                        @endfor
                    </div>

                    <!-- Testimonial Text -->
                    <p class="text-slate-600 leading-relaxed mb-6 text-lg italic">
                        "{{ $t['text'] }}"
                    </p>

                    <!-- Author -->
                    <div class="flex items-center gap-4">
                        <img src="{{ $t['image'] }}"
                             alt="{{ $t['name'] }}"
                             class="w-14 h-14 rounded-full object-cover ring-4 ring-slate-100">

                        <div>
                            <div class="font-bold text-slate-800">{{ $t['name'] }}</div>
                            <div class="text-slate-500 text-sm">{{ $t['role'] }}</div>
                        </div>

                        <!-- Customer Type Badge -->
                        <div class="ml-auto">
                            <span class="{{ $badgeColor }} text-xs font-medium px-3 py-1 rounded-full">
                                {{ $badgeText }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Trust Badges --}}
        <div class="mt-16 flex flex-wrap justify-center items-center gap-8 md:gap-16" data-aos="fade-up">
            <div class="text-center">
                <div class="text-2xl font-bold text-[#8B1A32]">4.9/5</div>
                <div class="text-slate-500 text-sm">Customer Rating</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold text-[#8B1A32]">100%</div>
                <div class="text-slate-500 text-sm">Satisfaction Guarantee</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold text-[#8B1A32]">ISO 9001</div>
                <div class="text-slate-500 text-sm">Certified</div>
            </div>
        </div>
    </div>
</section>