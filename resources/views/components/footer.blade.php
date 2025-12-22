{{-- Ensure Phosphor Icons are visible in footer --}}
<style>
    /* Ensure all Phosphor Icons in footer are visible */
    footer i[class^="ph-"], 
    footer i[class*=" ph-"],
    footer svg[class*="ph-"],
    footer svg[data-phosphor-icon] {
        display: inline-block !important;
        font-style: normal !important;
        width: 1.25em !important;
        height: 1.25em !important;
        vertical-align: middle !important;
        line-height: 1 !important;
        opacity: 1 !important;
        visibility: visible !important;
        fill: currentColor !important;
        color: inherit !important;
    }
    footer i[class^="ph-"].text-lg, 
    footer i[class*=" ph-"].text-lg,
    footer svg[class*="ph-"].text-lg {
        width: 1.125em !important;
        height: 1.125em !important;
    }
    footer i[class^="ph-"].text-xl, 
    footer i[class*=" ph-"].text-xl,
    footer svg[class*="ph-"].text-xl {
        width: 1.25em !important;
        height: 1.25em !important;
    }
    /* Ensure icons inside social links are visible */
    footer a[aria-label] i,
    footer a[aria-label] svg {
        display: inline-block !important;
        width: 1.25em !important;
        height: 1.25em !important;
        color: white !important;
        fill: white !important;
    }
</style>

<footer class="bg-slate-900 text-white">
    {{-- Main Footer --}}
    <div class="container mx-auto px-6 lg:px-12 py-16">
        <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-10">
            {{-- Company Info --}}
            <div class="lg:col-span-2">
                <div class="mb-6">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="h-14 w-14 rounded-lg bg-[#8B1A32] flex items-center justify-center shadow-lg">
                            <img src="https://qtrypzzcjebvfcihiynt.supabase.co/storage/v1/object/public/base44-prod/public/user_6930211329811e87e3d81b16/713909efc_Horsecargologo.jpg"
                                 alt="Horse Cargo"
                                 class="h-12 w-12 object-contain">
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white">Horse Cargo</h3>
                            <p class="text-white text-sm">Dubai to Tanzania Shipping</p>
                        </div>
                    </div>
                </div>

                <p class="text-white leading-relaxed mb-6 max-w-sm">
                    Your trusted logistics partner for reliable cargo shipping between Dubai, UAE and Tanzania. 
                    Air freight, sea freight, and specialized shipping solutions.
                </p>

                {{-- Social Links --}}
                <div class="flex items-center gap-3">
                    <a href="#" 
                       aria-label="Facebook" 
                       class="w-11 h-11 rounded-lg bg-slate-800 hover:bg-[#8B1A32] flex items-center justify-center transition-all duration-300 group shadow-md hover:shadow-lg hover:scale-105 active:scale-95">
                        <i class="fab fa-facebook-f text-base text-white group-hover:scale-110 transition-transform"></i>
                    </a>
                    <a href="#" 
                       aria-label="Instagram" 
                       class="w-11 h-11 rounded-lg bg-slate-800 hover:bg-[#8B1A32] flex items-center justify-center transition-all duration-300 group shadow-md hover:shadow-lg hover:scale-105 active:scale-95">
                        <i class="fab fa-instagram text-base text-white group-hover:scale-110 transition-transform"></i>
                    </a>
                    <a href="#" 
                       aria-label="Twitter" 
                       class="w-11 h-11 rounded-lg bg-slate-800 hover:bg-[#8B1A32] flex items-center justify-center transition-all duration-300 group shadow-md hover:shadow-lg hover:scale-105 active:scale-95">
                        <i class="fab fa-twitter text-base text-white group-hover:scale-110 transition-transform"></i>
                    </a>
                    <a href="#" 
                       aria-label="LinkedIn" 
                       class="w-11 h-11 rounded-lg bg-slate-800 hover:bg-[#8B1A32] flex items-center justify-center transition-all duration-300 group shadow-md hover:shadow-lg hover:scale-105 active:scale-95">
                        <i class="fab fa-linkedin-in text-base text-white group-hover:scale-110 transition-transform"></i>
                    </a>
                    <a href="#" 
                       aria-label="YouTube" 
                       class="w-11 h-11 rounded-lg bg-slate-800 hover:bg-[#8B1A32] flex items-center justify-center transition-all duration-300 group shadow-md hover:shadow-lg hover:scale-105 active:scale-95">
                        <i class="fab fa-youtube text-base text-white group-hover:scale-110 transition-transform"></i>
                    </a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="font-semibold text-lg mb-5 text-white">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="text-white hover:text-slate-300 transition">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-white hover:text-slate-300 transition">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="text-white hover:text-slate-300 transition">Services</a></li>
                    <li><a href="{{ route('contact') }}" class="text-white hover:text-slate-300 transition">Contact</a></li>
                </ul>
            </div>

            {{-- Services --}}
            <div>
                <h4 class="font-semibold text-lg mb-5 text-white">Services</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('services') }}" class="text-white hover:text-slate-300 transition">Air Freight</a></li>
                    <li><a href="{{ route('services') }}" class="text-white hover:text-slate-300 transition">Sea Freight</a></li>
                    <li><a href="{{ route('services') }}" class="text-white hover:text-slate-300 transition">General Goods</a></li>
                    <li><a href="{{ route('services') }}" class="text-white hover:text-slate-300 transition">Dangerous Goods</a></li>
                    <li><a href="{{ route('services') }}" class="text-white hover:text-slate-300 transition">E-Commerce Shipping</a></li>
                </ul>
            </div>

            {{-- Legal --}}
            <div>
                <h4 class="font-semibold text-lg mb-5 text-white">Legal</h4>
                <ul class="space-y-3">
                    <li><a href="#" class="text-white hover:text-slate-300 transition">Terms of Service</a></li>
                    <li><a href="#" class="text-white hover:text-slate-300 transition">Privacy Policy</a></li>
                    <li><a href="#" class="text-white hover:text-slate-300 transition">Cookie Policy</a></li>
                    <li><a href="#" class="text-white hover:text-slate-300 transition">Shipping Policy</a></li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="border-t border-slate-800">
        <div class="container mx-auto px-6 lg:px-12 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-white text-sm text-center md:text-left">
                    © {{ date('Y') }} Horse Cargo. All rights reserved.
                </p>

                <div class="flex items-center gap-4">
                    <span class="text-white text-sm">UAE Licensed Freight Forwarder</span>
                    <button
                        @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                        class="w-10 h-10 rounded-lg border border-slate-700 bg-slate-800 text-white hover:bg-slate-700 flex items-center justify-center transition-all group"
                        aria-label="Back to top"
                        x-data
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-white group-hover:scale-110 transition-transform">
                            <path d="m5 12 7-7 7 7"/>
                            <path d="M12 19V5"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</footer>

