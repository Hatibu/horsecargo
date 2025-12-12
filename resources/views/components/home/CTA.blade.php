{{-- resources/views/components/cta-section.blade.php --}}
<section class="py-24 bg-gradient-to-br from-[#8B1A32] via-[#7A1629] to-[#6B1426] relative overflow-hidden">
    <!-- Background Pattern + Blobs -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="
            background-image: url(&quot;data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.4'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;);
        "></div>
    </div>
    <div class="absolute top-10 right-10 w-64 h-64 bg-white rounded-full blur-3xl opacity-5"></div>
    <div class="absolute bottom-10 left-10 w-96 h-96 bg-amber-500 rounded-full blur-3xl opacity-10"></div>

    <div class="container mx-auto px-6 lg:px-12 relative z-10">
        <div class="max-w-4xl mx-auto text-center">

            <!-- Main Heading -->
            <div data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">
                    Ship with Confidence
                </h2>
                <p class="text-xl text-white/80 mb-10 max-w-2xl mx-auto leading-relaxed">
                    Join thousands of satisfied customers who trust Horse Cargo for their<br class="hidden sm:block">
                    Dubai to Tanzania shipping needs. Get started today!
                </p>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 mb-16" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('quote') }}"
                   class="inline-flex items-center justify-center gap-2 bg-white text-[#8B1A32] hover:bg-white/90 px-8 py-6 text-lg font-semibold rounded-xl shadow-lg hover:scale-105 transition-all duration-300 group">
                    <i class="ph-package text-xl"></i>
                    Get a Quote
                    <i class="ph-arrow-right group-hover:translate-x-1 transition"></i>
                </a>

                <a href="#track"
                   class="inline-flex items-center justify-center gap-2 border-2 border-white text-white hover:bg-white/10 px-8 py-6 text-lg font-semibold rounded-xl backdrop-blur-sm text-white transition">
                    <i class="ph-navigation-arrow text-xl"></i>
                    Track Your Cargo
                </a>

                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 border-2 border-white text-white hover:bg-white/10 px-8 py-6 text-lg font-semibold rounded-xl backdrop-blur-sm transition">
                    <i class="ph-chat-circle text-xl"></i>
                    Contact Us
                </a>
            </div>

            <!-- Quick Contact Cards -->
            <div class="grid sm:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 text-left">
                    <div class="text-white/60 text-sm mb-1">WhatsApp (Dubai)</div>
                    <a href="https://wa.me/971506083531" class="text-white font-bold text-lg hover:text-amber-300 transition">
                        +971 50 608 3531
                    </a>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 text-left">
                    <div class="text-white/60 text-sm mb-1">WhatsApp (Tanzania)</div>
                    <a href="https://wa.me/255778222251" class="text-white font-bold text-lg hover:text-amber-300 transition">
                        +255 77 822 2251
                    </a>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 text-left">
                    <div class="text-white/60 text-sm mb-1">Email</div>
                    <a href="mailto:info@horsecargo.com" class="text-white font-bold text-lg hover:text-amber-300 transition">
                        info@horsecargo.com
                    </a>
                </div>
            </div>
            </div>

        </div>
    </div>
</section>