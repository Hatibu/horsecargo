{{-- resources/views/components/cta-section.blade.php --}}
<section class="py-24 bg-[#8B1A32] relative overflow-hidden">
    <!-- Background Pattern with Plus Signs -->
    <div class="absolute inset-0 opacity-15">
        <div class="absolute inset-0" style="
            background-image: url(&quot;data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.4'%3E%3Cpath d='M30 25h5v-5h-5v-5h-5v5h-5v5h5v5h5v-5z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;);
        "></div>
    </div>

    <div class="container mx-auto px-6 lg:px-12 relative z-10">
        <div class="max-w-4xl mx-auto text-center">

            <!-- Main Heading -->
            <div data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 tracking-tight">
                    Ship with Confidence
                </h2>
                <p class="text-lg md:text-xl text-white/90 mb-12 max-w-2xl mx-auto leading-relaxed">
                    Join thousands of satisfied customers who trust Horse Cargo for their Dubai to Tanzania shipping needs. Get started today!
                </p>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mb-16" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-3 bg-white text-[#8B1A32] hover:bg-gray-50 px-8 py-4 text-base font-semibold rounded-lg shadow-lg hover:shadow-xl hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 group min-w-[200px]">
                    <span>Get a Quote</span>
                </a>

                <a href="#track"
                   class="inline-flex items-center justify-center gap-3 bg-white/10 backdrop-blur-md border-2 border-white/40 text-white hover:bg-white/20 hover:border-white/60 px-8 py-4 text-base font-semibold rounded-lg shadow-md hover:shadow-lg transition-all duration-300 min-w-[200px] group">
                    <span>Track Cargo</span>
                </a>

                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-3 bg-white/10 backdrop-blur-md border-2 border-white/40 text-white hover:bg-white/20 hover:border-white/60 px-8 py-4 text-base font-semibold rounded-lg shadow-md hover:shadow-lg transition-all duration-300 min-w-[200px] group">
                    <span>Contact Us</span>
                </a>
            </div>

            <!-- Quick Contact Cards -->
            <div class="grid sm:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 border border-white/30 text-left shadow-lg hover:bg-white/15 hover:border-white/40 transition-all duration-300 group">
                    <div class="text-white/80 text-sm font-medium mb-2">WhatsApp (Dubai)</div>
                    <a href="https://wa.me/971506083531" class="text-white font-bold text-lg hover:text-amber-300 transition-colors block group-hover:scale-[1.02]">
                        +971 50 608 3531
                    </a>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 border border-white/30 text-left shadow-lg hover:bg-white/15 hover:border-white/40 transition-all duration-300 group">
                    <div class="text-white/80 text-sm font-medium mb-2">WhatsApp (Tanzania)</div>
                    <a href="https://wa.me/255778222251" class="text-white font-bold text-lg hover:text-amber-300 transition-colors block group-hover:scale-[1.02]">
                        +255 77 822 2251
                    </a>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 border border-white/30 text-left shadow-lg hover:bg-white/15 hover:border-white/40 transition-all duration-300 group">
                    <div class="text-white/80 text-sm font-medium mb-2">Email</div>
                    <a href="mailto:info@horsecargo.com" class="text-white font-bold text-lg hover:text-amber-300 transition-colors block group-hover:scale-[1.02]">
                        info@horsecargo.com
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>