@props(['type' => 'air'])

@php
    $data = $type === 'air' ? [
        'icon' => 'airplane-tilt',
        'title' => 'Air Freight',
        'time' => '3-5 Business Days',
        'categories' => [
            ['w' => '0-5 kg', 'p' => '$25/kg', 'popular' => false],
            ['w' => '5-20 kg', 'p' => '$20/kg', 'popular' => false],
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

        <a href="{{ route('contact') }}"
           class="w-full mt-8 bg-[#8B1A32] hover:bg-[#7A1629] text-white text-center py-6 text-lg font-semibold rounded-xl transition-all hover:shadow-lg">
            Get a Quote
        </a>
    </div>
</div>

