{{-- resources/views/components/pricing.blade.php --}}
<section class="py-24 bg-slate-50" id="pricing">
    <div class="container mx-auto px-6 lg:px-12">

        {{-- Header --}}
        <div class="text-center max-w-3xl mx-auto mb-12" data-aos="fade-up">
            <span class="inline-block bg-[#8B1A32]/10 text-[#8B1A32] px-4 py-2 rounded-full text-sm font-medium mb-4">
                Pricing & Schedule
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">
                Transparent Pricing, No Hidden Fees
            </h2>
            <p class="text-slate-600 text-lg">
                Choose the shipping method that best suits your timeline and budget.<br class="hidden sm:block">
                All prices include customs clearance and documentation.
            </p>
        </div>

        {{-- Tabs --}}
        <div class="flex justify-center mb-10">
            <div x-data="{ tab: 'air' }" class="bg-white rounded-xl p-1.5 shadow-sm inline-flex">
                <button
                    @click="tab = 'air'"
                    :class="tab === 'air' ? 'bg-[#8B1A32] text-white' : 'text-slate-600 hover:text-slate-900'"
                    class="flex items-center gap-2 px-8 py-3 rounded-lg font-medium transition-all duration-300"
                >
                    <i class="ph-airplane-tilt"></i>
                    Air Freight
                </button>
                <button
                    @click="tab = 'sea'"
                    :class="tab === 'sea' ? 'bg-[#8B1A32] text-white' : 'text-slate-600 hover:text-slate-900'"
                    class="flex items-center gap-2 px-8 py-3 rounded-lg font-medium transition-all duration-300"
                >
                    <i class="ph-anchor-simple"></i>
                    Sea Freight
                </button>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-10">
            {{-- Pricing Card --}}
            <div x-data="{ tab: 'air' }" x-init="tab = $parent.tab" x-effect="tab = $parent.tab">
                <div x-show="tab === 'air'" x-transition class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <x-pricing-card type="air" />
                </div>
                <div x-show="tab === 'sea'" x-transition class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <x-pricing-card type="sea" />
                </div>
            </div>

            {{-- Schedule Card --}}
            <div data-aos="fade-left">
                <div class="bg-white rounded-3xl shadow-lg p-6 lg:p-8 h-full flex flex-col">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-bold text-slate-800">Shipping Schedule</h3>
                        <div class="relative group">
                            <i class="ph-info text-xl text-slate-400 cursor-help"></i>
                            <div class="absolute right-0 bottom-full mb-2 w-64 p-3 bg-slate-800 text-white text-xs rounded-lg opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10">
                                Departure times from Dubai warehouse
                                <div class="absolute top-full right-4 w-0 h-0 border-l-8 border-r-8 border-t-8 border-transparent border-t-slate-800"></div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-1 overflow-hidden rounded-xl border border-slate-200">
                        <table class="w-full">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="text-left p-4 text-sm font-semibold text-slate-600">Day</th>
                                    <th class="text-center p-4 text-sm font-semibold text-slate-600">
                                        <div class="flex items-center justify-center gap-2">
                                            <i class="ph-airplane-tilt"></i> Air
                                        </div>
                                    </th>
                                    <th class="text-center p-4 text-sm font-semibold text-slate-600">
                                        <div class="flex items-center justify-center gap-2">
                                            <i class="ph-anchor-simple"></i> Sea
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $schedule = [
                                        ['day' => 'Monday', 'air' => '10:00 AM', 'sea' => '2:00 PM'],
                                        ['day' => 'Wednesday', 'air'air' => '10:00 AM', 'sea' => '-'],
                                        ['day' => 'Friday', 'air' => '10:00 AM', 'sea' => '2:00 PM'],
                                        ['day' => 'Saturday', 'air' => '10:00 AM', 'sea' => '-'],
                                    ];
                                @endphp
                                @foreach($schedule as $i => $row)
                                    <tr class="{{ $i < count($schedule)-1 ? 'border-b border-slate-100' : '' }}">
                                        <td class="p-4 font-medium text-slate-800">{{ $row['day'] }}</td>
                                        <td class="p-4 text-center">
                                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">
                                                {{ $row['air'] }}
                                            </span>
                                        </td>
                                        <td class="p-4 text-center">
                                            @if($row['sea'] !== '-')
                                                <span class="bg-cyan-100 text-cyan-700 px-3 py-1 rounded-full text-sm font-medium">
                                                    {{ $row['sea'] }}
                                                </span>
                                            @else
                                                <span class="text-slate-400">-</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6 p-4 bg-amber-50 rounded-xl border border-amber-200">
                        <p class="text-amber-800 text-sm">
                            <strong>Note:</strong> Cutoff time for same-day dispatch is 2 hours before departure.
                            Contact us for urgent shipments.
                        </p>
                    </div>

                    <div class="mt-6 space-y-3">
                        <div class="flex items-center justify-between p-4 bg-slate-50 rounded-xl">
                            <span class="text-slate-600">Dangerous Goods Surcharge</span>
                            <span class="font-bold text-slate-800">+30%</span>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-slate-50 rounded-xl">
                            <span class="text-slate-600">Insurance (Optional)</span>
                            <span class="font-bold text-slate-800">3% of value</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Reusable Pricing Card Component --}}
@component('components.pricing-card')
    @props(['type' => 'air'])

    @php
        $data = $type === 'air' ? [
            'icon' => 'airplane-tilt',
            'title'title' => 'Air Freight',
            'time' => '3-5 Business Days',
            'categories' => [
                ['w' => '0-5 kg', 'p' => '$25/kg', 'popular' => false],
                ['w' => '5-20 kg', 'p'p' => '$20/kg', 'popular' => false],
                ['w' => '20-50 kg', 'p' => '$18/kg', 'popular' => true],
                ['w' => '50-100 kg', 'p' => '$15/kg', 'popular' => false],
                ['w' => '100+ kg', 'p' => 'Contact Us', 'popular' => false],
            ],
            'features' => ['Express Delivery', 'Real-Time Tracking', 'Insurance Included', 'Door-to-Door Service']
        ] : [
            'icon' => 'anchor-simple',
            'title' => 'Sea Freight',
            'time' => '15-20 Business Days',
            'categories' => [
                ['w' => '0-50 kg', 'p' => '$8/kg', 'popular' => false],
                ['w' => '50-100 kg', 'p' => '$6/kg', 'popular' => false],
                ['w' => '100-500 kg', 'p' => '$5/kg', 'popular' => true],
                ['w' => '500-1000 kg', 'p' => '$4/kg', 'popular' => false],
                ['w' => 'FCL 20ft', 'p' => '$1,500', 'popular' => false],
            ],
            'features' => ['Cost-Effective', 'Bulk Shipping', 'Customs Clearance', 'Warehouse Storage']
        ];
    @endphp

    <div class="h-full flex flex-col">
        <!-- Header -->
        <div class="bg-gradient-to-r from-[#8B1A32] to-[#6B1426] p-6 text-white">
            <div class="flex items-center gap-3 mb-2">
                <i class="ph-{{ $data['icon'] }} text-2xl"></i>
                <h3 class="text-xl font-bold">{{ $data['title'] }}</h3>
            </div>
            <p class="text-white/80">Delivery: {{ $data['time'] }}</p>
        </div>

        <!-- Body -->
        <div class="p-6 flex-1 flex flex-col justify-between">
            <div>
                <div class="space-y-3 mb-6">
                    @foreach($data['categories'] as $cat)
                        <div class="flex items-center justify-between p-4 rounded-xl transition-all {{ $cat['popular'] ? 'bg-[#8B1A32]/5 border-2 border-[#8B1A32] relative' : 'bg-slate-50 hover:bg-slate-100' }}">
                            @if($cat['popular'])
                                <span class="absolute -top-2.5 left-4 bg-[#8B1A32] text-white text-xs px-2 py-0.5 rounded-full">
                                    Most Popular
                                </span>
                            @endif
                            <span class="text-slate-700 font-medium">{{ $cat['w'] }}</span>
                            <span class="font-bold {{ $cat['popular'] ? 'text-[#8B1A32]' : 'text-slate-800' }}">
                                {{ $cat['p'] }}
                            </span>
                        </div>
                    @endforeach
                </div>

                <div class="border-t pt-6">
                    <h4 class="font-semibold text-slate-800 mb-4">Included Services</h4>
                    <div class="grid grid-cols-2 gap-3">
                        @foreach($data['features'] as $f)
                            <div class="flex items-center gap-2 text-sm text-slate-600">
                                <i class="ph-check text-green-500"></i>
                                {{ $f }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <a href="{{ route('quote') }}"
               class="w-full mt-8 bg-[#8B1A32] hover:bg-[#7A1629] text-white text-center py-6 text-lg font-semibold rounded-xl transition-all hover:shadow-lg">
                Get a Quote
            </a>
        </div>
    </div>
@endcomponent