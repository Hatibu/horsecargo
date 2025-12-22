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
                                        ['day' => 'Wednesday', 'air' => '10:00 AM', 'sea' => '-'],
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