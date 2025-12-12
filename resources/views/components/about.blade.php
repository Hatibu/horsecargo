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