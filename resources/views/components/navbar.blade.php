@php
    $isScrolled = request()->cookie('navbar_scrolled') == 'true';
@endphp

<!-- Top Bar (Desktop only) -->
<div class="bg-[#8B1A32] text-white py-2 hidden md:block">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="flex justify-between items-center text-sm">
            <div class="flex items-center gap-6">
                <div class="flex items-center gap-2">
                    <i class="ph-map-pin text-lg"></i>
                    <span>Dubai, UAE & Dar es Salaam, Tanzania</span>
                </div>
            </div>
            <div class="flex items-center gap-6">
                <a href="tel:+971506083531" class="flex items-center gap-2 hover:text-white/80 transition">
                    <i class="ph-phone text-lg"></i>
                    <span>+971 50 608 3531</span>
                </a>
                <a href="tel:+255778222251" class="flex items-center gap-2 hover:text-white/80 transition">
                    <i class="ph-phone text-lg"></i>
                    <span>+255 77 822 2251</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Main Navbar -->
<nav x-data="{ open: false, scrolled: {{ $isScrolled ? 'true' : 'false' }} }"
     x-init="
         window.addEventListener('scroll', () => {
             scrolled = window.scrollY > 50;
             document.cookie = 'navbar_scrolled=' + scrolled;
         });
     "
     class="sticky top-0 z-50 transition-all duration-300"
     :class="scrolled ? 'bg-white shadow-lg' : 'bg-white/95 backdrop-blur-md'">

    <div class="container mx-auto px-6 lg:px-12">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="https://qtrypzzcjebvfcihiynt.supabase.co/storage/v1/object/public/base44-prod/public/user_6930211329811e87e3d81b16/713909efc_Horsecargologo.jpg"
                     alt="Horse Cargo"
                     class="h-12 w-12 object-contain rounded-lg shadow">
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center gap-8">
                @php
                    $links = [
                        ['label' => 'Home', 'route' => 'home'],
                        ['label' => 'About', 'route' => 'about'],
                        ['label' => 'Services', 'route' => 'services'],
                        ['label' => 'Contact', 'route' => 'contact'],
                    ];
                @endphp

                @foreach($links as $link)
                    @php $active = request()->routeIs($link['route']); @endphp
                    <a href="{{ route($link['route']) }}"
                       class="font-medium transition-colors relative group {{ $active ? 'text-[#8B1A32]' : 'text-slate-600 hover:text-[#8B1A32]' }}">
                        {{ $link['label'] }}
                        <span class="absolute -bottom-1 left-0 h-0.5 bg-[#8B1A32] transition-all duration-300 {{ $active ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                    </a>
                @endforeach
            </div>

            <!-- Desktop CTA -->
            <div class="hidden lg:flex items-center gap-4">
                <a href="{{ route('contact') }}"
                   class="bg-[#8B1A32] hover:bg-[#7A1629] text-white px-6 py-3 rounded-xl font-semibold transition-all hover:shadow-lg">
                    Get a Quote
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="open = !open"
                    class="lg:hidden p-2 rounded-lg hover:bg-slate-100 transition">
                <i x-show="!open" class="ph-list text-2xl text-slate-800"></i>
                <i x-show="open" class="ph-x text-2xl text-slate-800"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="lg:hidden bg-white border-t shadow-2xl">
        <div class="container mx-auto px-6 py-4">
            <div class="flex flex-col gap-2">
                @foreach($links as $link)
                    @php $active = request()->routeIs($link['route']); @endphp
                    <a href="{{ route($link['route']) }}"
                       @click="open = false"
                       class="font-medium py-3 px-4 rounded-lg transition {{ $active ? 'text-[#8B1A32] bg-[#8B1A32]/10 font-semibold' : 'text-slate-600 hover:text-[#8B1A32] hover:bg-slate-50' }}">
                        {{ $link['label'] }}
                    </a>
                @endforeach

                <div class="mt-4 pt-4 border-t">
                    <a href="{{ route('contact') }}"
                       @click="open = false"
                       class="w-full block text-center bg-[#8B1A32] hover:bg-[#7A1629] text-white py-3 rounded-xl font-semibold transition">
                        Get a Quote
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>