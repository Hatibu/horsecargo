<section class="relative min-h-screen flex items-center overflow-hidden bg-slate-900">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="
            background-image: url(&quot;data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.4'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;);
        "></div>
    </div>

    <!-- Gradient Orbs -->
    <div class="absolute top-20 right-20 w-96 h-96 bg-[#8B1A32] rounded-full blur-3xl opacity-20"></div>
    <div class="absolute bottom-20 left-20 w-72 h-72 bg-amber-500 rounded-full blur-3xl opacity-10"></div>

    <!-- World Map Overlay -->
    <div class="absolute inset-0 opacity-5 pointer-events-none">
        <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?w=1920&q=80"
             alt="" class="w-full h-full object-cover">
    </div>

    <div class="container mx-auto px-6 lg:px-12 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">

            {{-- Left Content --}}
            <div data-aos="fade-right">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6" data-aos="fade-up" data-aos-delay="100">
                    <i class="ph-map-pin text-amber-400" style="display: inline-block !important; width: 1em !important; height: 1em !important; opacity: 1 !important; visibility: visible !important;"></i>
                    <span class="text-white/80 text-sm">Dubai, UAE to Tanzania</span>
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6" data-aos="fade-up" data-aos-delay="200">
                    Reliable Cargo Shipping from<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-amber-300">
                        Dubai to Tanzania
                    </span>
                </h1>

                <p class="text-lg text-slate-300 mb-8 max-w-xl leading-relaxed" data-aos="fade-up" data-aos-delay="300">
                    Trusted logistics partner for general and dangerous goods shipping.<br class="hidden sm:block">
                    We serve individuals, small businesses, and large corporations with premium air and sea freight solutions.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 mb-12" data-aos="fade-up" data-aos-delay="400">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#8B1A32] hover:bg-[#7A1629] text-white px-5 py-2.5 text-sm font-semibold rounded-lg shadow-md shadow-[#8B1A32]/30 hover:scale-105 transition-all duration-300 group">
                        Get a Quote
                        
                    </a>
                    <a href="#track"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white hover:bg-white/10 px-5 py-2.5 text-sm font-semibold rounded-lg backdrop-blur-sm transition">
                        Track Shipment
                    </a>
                </div>

                {{-- Stats --}}
                <div class="grid grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-center">
                        <div class="text-2xl md:text-3xl font-bold text-white">10K+</div>
                        <div class="text-slate-400 text-sm">Shipments</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl md:text-3xl font-bold text-white">99%</div>
                        <div class="text-slate-400 text-sm">On-Time</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl md:text-3xl font-bold text-white">24/7</div>
                        <div class="text-slate-400 text-sm">Support</div>
                    </div>
                </div>
            </div>

            {{-- Right Visual (Desktop Only) --}}
            <div class="relative hidden lg:block" data-aos="fade-left" data-aos-delay="300">
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1000&q=80"
                             alt="Cargo Shipping"
                             class="w-full h-[520px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    </div>

                    {{-- Floating Air Freight Card --}}
                    <div class="absolute -left-8 top-1/4 bg-white rounded-2xl p-5 shadow-2xl" data-aos="zoom-in" data-aos-delay="600">
                        <div class="flex items-center gap-4">
                            <div class="w-8 h-8 rounded-xl bg-blue-100 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/></svg>
                            </div>
                            <div>
                                <div class="text-sm text-slate-500">Air Freight</div>
                                <div class="font-bold text-slate-800 text-lg">3-5 Days</div>
                            </div>
                        </div>
                    </div>

                    {{-- Floating Sea Freight Card --}}
                    <div class="absolute -right-right-8 bottom-1/4 bg-white rounded-2xl p-5 shadow-2xl" data-aos="zoom-in" data-aos-delay="800">
                        <div class="flex items-center gap-4">
                            <div class="w-8 h-8 rounded-xl bg-cyan-100 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-cyan-600"><path d="M12 10.189V14"/><path d="M12 2v3"/><path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6"/><path d="M19.38 20A11.6 11.6 0 0 0 21 14l-8.188-3.639a2 2 0 0 0-1.624 0L3 14a11.6 11.6 0 0 0 2.81 7.76"/><path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1s1.2 1 2.5 1c2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/></svg>
                            </div>
                            <div>
                                <div class="text-sm text-slate-500">Sea Freight</div>
                                <div class="font-bold text-slate-800 text-lg">15-20 Days</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom Wave --}}
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-32 md:h-40">
            <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white"/>
        </svg>
    </div>
</section>

