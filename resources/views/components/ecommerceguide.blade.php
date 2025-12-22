{{-- resources/views/components/ecommerce-guide.blade.php --}}
<section class="py-24 bg-white" id="ecommerce">
    <div class="container mx-auto px-6 lg:px-12">

        {{-- Header --}}
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="inline-block bg-purple-100 text-purple-700 px-4 py-2 rounded-full text-sm font-medium mb-4">
                E-Commerce Shopping Guide
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">
                Shop from Dubai, Delivered to Tanzania
            </h2>
            <p class="text-slate-600 text-lg">
                Buy from your favorite international stores and we'll handle the rest.<br class="hidden sm:block">
                Simple, fast, and affordable shipping to Tanzania.
            </p>
        </div>

        {{-- Steps Timeline --}}
        <div class="relative max-w-5xl mx-auto mb-20">
            <!-- Desktop Connection Line -->
            <div class="absolute top-24 left-0 right-0 h-1 bg-gradient-to-r from-[#8B1A32] via-amber-500 to-[#8B1A32] hidden lg:block rounded-full opacity-30"></div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $steps = [
                        ['icon' => 'shopping-bag', 'step' => '01', 'title' => 'Shop Online', 'desc' => "Browse and purchase items from your favorite platforms like Noon, Amazon, Shein, AliExpress, or Temu."],
                        ['icon' => 'truck', 'step' => '02', 'title' => 'Ship to Our Address', 'desc' => "Use our Dubai warehouse address as your delivery location. We'll receive your packages."],
                        ['icon' => 'package', 'step' => '03', 'title' => 'We Consolidate', 'desc' => 'We combine multiple orders into one shipment to save you money on shipping costs.'],
                        ['icon' => 'map-pin', 'step' => '04', 'title' => 'Delivery to Tanzania', 'desc' => 'Your consolidated package is shipped to Tanzania and delivered to your doorstep.'],
                    ];
                @endphp

                @foreach($steps as $index => $step)
                    <div class="relative" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                        <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow relative z-10 text-center lg:text-left">
                            <!-- Icon -->
                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#8B1A32] to-[#6B1426] flex items-center justify-center mb-4 mx-auto lg:mx-0">
                                <i class="ph-{{ $step['icon'] }} ph-bold text-3xl text-white"></i>
                            </div>

                            <!-- Step Number Badge -->
                            <div class="absolute -top-3 -right-3 lg:-right-3 w-10 h-10 bg-amber-400 rounded-full flex items-center justify-center text-sm font-bold text-slate-800 shadow-lg">
                                {{ $step['step'] }}
                            </div>

                            <h3 class="text-lg font-bold text-slate-800 mb-2">{{ $step['title'] }}</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">{{ $step['desc'] }}</p>
                        </div>

                        <!-- Mobile Arrow -->
                        @if($index < count($steps) - 1)
                            <div class="lg:hidden flex justify-center my-6">
                                <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center">
                                    <i class="ph-caret-down text-xl text-slate-400"></i>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Trusted Platforms Section --}}
        <div class="bg-gradient-to-br from-slate-50 to-slate-100 rounded-3xl p-8 md:p-12" data-aos="fade-up">
            <div class="text-center mb-10">
                <h3 class="text-2xl font-bold text-slate-800 mb-2">Trusted Platforms We Support</h3>
                <p class="text-slate-600">Shop from these popular stores and many more</p>
            </div>

            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-12">
                @php
                    $platforms = [
                        ['name' => 'Amazon', 'logo' => asset('media/images/amazon.png'), 'fallback' => 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg'],
                        ['name' => 'Noon', 'logo' => asset('media/images/noon.png'), 'fallback' => 'https://upload.wikimedia.org/wikipedia/commons/4/4c/Noon_Logo.png'],
                        ['name' => 'Shein', 'logo' => asset('media/images/shein.png'), 'fallback' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/71/SHEIN-logo.svg/512px-SHEIN-logo.svg.png'],
                    ];
                @endphp

                @foreach($platforms as $index => $platform)
                    <div class="bg-white rounded-xl p-4 shadow-sm hover:shadow-md transition-all duration-300"
                         data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                        <img src="{{ $platform['logo'] }}"
                             alt="{{ $platform['name'] }}"
                             class="h-8 md:h-10 object-contain transition-all duration-500"
                             onerror="this.onerror=null; this.src='{{ $platform['fallback'] }}';">
                    </div>
                @endforeach

                <div class="bg-slate-200 text-slate-600 rounded-xl px-6 py-4 font-medium text-lg">
                    + Many More
                </div>
            </div>

            {{-- Benefits --}}
            <div class="grid md:grid-cols-3 gap-6 mt-12">
                @foreach(['No Hidden Fees', 'Package Consolidation', 'Real-Time Updates'] as $index => $benefit)
                    <div class="flex items-center justify-center gap-3" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                        <i class="ph-check-circle text-2xl text-green-500"></i>
                        <span class="text-slate-700 font-medium">{{ $benefit }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>