@extends('layouts.app')

@section('title', 'Our Services - Horse Cargo | Air & Sea Freight Dubai to Tanzania')

@section('content')
    {{-- Navbar --}}
    <x-navbar />

    {{-- Main Content with padding for fixed navbar --}}
    <div class="pt-20">

        {{-- Optional Hero Header (Highly Recommended) --}}
        <section class="bg-gradient-to-br from-[#8B1A32] to-[#6B1426] py-24">
            <div class="container mx-auto px-6 lg:px-12 text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                    Our Services
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                    Comprehensive shipping solutions from Dubai to Tanzania — 
                    air freight, sea freight, e-commerce assistance, dangerous goods, and more.
                </p>
            </div>
        </section>

        {{-- Services Grid --}}
        <x-services />

        {{-- E-Commerce Shopping Guide --}}
        <x-ecommerceguide />

        {{-- Pricing & Schedule --}}
        <x-pricing />

    </div>

    {{-- Footer --}}
    <x-footer />
@endsection