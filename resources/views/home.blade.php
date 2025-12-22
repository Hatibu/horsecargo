@extends('layouts.app')

@section('title', 'Horse Cargo - Dubai to Tanzania Shipping | Air & Sea Freight')

@section('content')
    {{-- Navbar --}}
    <x-navbar />

    {{-- Hero Section --}}
    <x-hero />

    {{-- Services Preview Section --}}
    <x-services />

    {{-- How It Works Section --}}
    <section class="py-24 bg-slate-50" id="how-it-works">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="inline-block bg-[#8B1A32]/10 text-[#8B1A32] px-4 py-2 rounded-full text-sm font-medium mb-4">
                    How It Works
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">
                    Simple Shipping Process
                </h2>
                <p class="text-slate-600 text-lg">
                    Getting your cargo from Dubai to Tanzania is easy with our streamlined process.<br class="hidden sm:block">
                    Just follow these simple steps.
                </p>
            </div>

            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-4 gap-8">
                    @php
                        $steps = [
                            [
                                'number' => '01',
                                'title' => 'Get a Quote',
                                'desc' => 'Contact us with your shipment details and receive a competitive quote within 24 hours.',
                                'icon' => 'calculator',
                            ],
                            [
                                'number' => '02',
                                'title' => 'Book & Prepare',
                                'desc' => 'Confirm your booking and prepare your cargo. We provide packing guidelines if needed.',
                                'icon' => 'package',
                            ],
                            [
                                'number' => '03',
                                'title' => 'We Ship',
                                'desc' => 'We handle pickup, customs clearance, and shipping via air or sea freight.',
                                'icon' => 'truck',
                            ],
                            [
                                'number' => '04',
                                'title' => 'Receive',
                                'desc' => 'Track your shipment and receive it at your doorstep in Tanzania.',
                                'icon' => 'check-circle',
                            ],
                        ];
                    @endphp

                    @foreach($steps as $index => $step)
                        <div class="relative" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                            <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition-all duration-300 text-center h-full">
                                <div class="w-16 h-16 rounded-full bg-gradient-to-br from-[#8B1A32] to-[#6B1426] flex items-center justify-center mx-auto mb-4">
                                    <span class="text-white font-bold text-xl">{{ $step['number'] }}</span>
                                </div>
                                <h3 class="text-lg font-bold text-slate-800 mb-3">{{ $step['title'] }}</h3>
                                <p class="text-slate-600 text-sm leading-relaxed">{{ $step['desc'] }}</p>
                            </div>

                            @if($index < count($steps) - 1)
                                <div class="hidden md:block absolute top-1/2 -right-4 w-8 h-0.5 bg-gradient-to-r from-[#8B1A32] to-transparent transform -translate-y-1/2 z-0"></div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Why Choose Us --}}
    <x-whychooseus />

    {{-- Testimonials Section --}}
    <x-testimonials />

    {{-- Statistics Section --}}
    <section class="py-24 bg-gradient-to-br from-[#8B1A32] to-[#6B1426] text-white">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid md:grid-cols-4 gap-8 max-w-6xl mx-auto">
                @php
                    $stats = [
                        ['value' => '10,000+', 'label' => 'Successful Shipments', 'icon' => 'package'],
                        ['value' => '5,000+', 'label' => 'Satisfied Customers', 'icon' => 'users'],
                        ['value' => '99.5%', 'label' => 'On-Time Delivery Rate', 'icon' => 'clock'],
                        ['value' => '24/7', 'label' => 'Customer Support', 'icon' => 'headset'],
                    ];
                @endphp

                @foreach($stats as $index => $stat)
                    <div class="text-center" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                        <div class="text-5xl md:text-6xl font-bold mb-3">{{ $stat['value'] }}</div>
                        <div class="text-white/90 text-lg">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- E-Commerce Guide Section --}}
    <x-ecommerceguide />

    {{-- CTA Section --}}
    <x-cta />

    {{-- Footer --}}
    <x-footer />
@endsection