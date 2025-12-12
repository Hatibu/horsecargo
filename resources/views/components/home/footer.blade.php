{{-- resources/views/components/footer.blade.php --}}
<footer class="bg-slate-900 text-white">
    {{-- Main Footer --}}
    <div class="container mx-auto px-6 lg:px-12 py-16">
        <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-10">
            {{-- Company Info --}}
            <div class="lg:col-span-2">
                <div class="flex items-center gap-3 mb-6">
                    <img src="https://qtrypzzcjebvfcihiynt.supabase.co/storage/v1/object/public/base44-prod/public/user_6930211329811e87e3d81b16/713909efc_Horsecargologo.jpg"
                         alt="Horse Cargo"
                         class="h-14 w-14 object-contain rounded-lg bg-white p-1 shadow-lg">
                    <div>
                        <h3 class="text-xl font-bold">Horse Cargo</h3>
                        <p class="text-slate-400 text-sm">Dubai to Tanzania Shipping</p>
                    </div>
                </div>

                <p class="text-slate-400 leading-relaxed mb-6 max-w-sm">
                    Your trusted logistics partner for reliable cargo shipping between Dubai, UAE and Tanzania. 
                    Air freight, sea freight, and specialized shipping solutions.
                </p>

                {{-- Social Links --}}
                <div class="flex gap-3">
                    <a href="#" aria-label="Facebook" class="w-10 h-10 rounded-lg bg-slate-800 hover:bg-[#8B1A32] flex items-center justify-center transition-all duration-300">
                        <i class="ph-facebook-logo text-xl"></i>
                    </a>
                    <a href="#" aria-label="Instagram" class="w-10 h-10 rounded-lg bg-slate-800 hover:bg-[#8B1A32] flex items-center justify-center transition-all duration-300">
                        <i class="ph-instagram-logo text-xl"></i>
                    </a>
                    <a href="#" aria-label="Twitter" class="w-10 h-10 rounded-lg bg-slate-800 hover:bg-[#8B1A32] flex items-center justify-center transition-all duration-300">
                        <i class="ph-twitter-logo text-xl"></i>
                    </a>
                    <a href="#" aria-label="LinkedIn" class="w-10 h-10 rounded-lg bg-slate-800 hover:bg-[#8B1A32] flex items-center justify-center transition-all duration-300">
                        <i class="ph-linkedin-logo text-xl"></i>
                    </a>
                    <a href="#" aria-label="YouTube" class="w-10 h-10 rounded-lg bg-slate-800 hover:bg-[#8B1A32] flex items-center justify-center transition-all duration-300">
                        <i class="ph-youtube-logo text-xl"></i>
                    </a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="font-semibold text-lg mb-5">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="text-slate-400 hover:text-white transition">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-slate-400 hover:text-white transition">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="text-slate-400 hover:text-white transition">Services</a></li>
                    <li><a href="{{ route('contact') }}" class="text-slate-400 hover:text-white transition">Contact</a></li>
                </ul>
            </div>

            {{-- Services --}}
            <div>
                <h4 class="font-semibold text-lg mb-5">Services</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('services') }}" class="text-slate-400 hover:text-white transition">Air Freight</a></li>
                    <li><a href="{{ route('services') }}" class="text-slate-400 hover:text-white transition">Sea Freight</a></li>
                    <li><a href="{{ route('services') }}" class="text-slate-400 hover:text-white transition">General Goods</a></li>
                    <li><a href="{{ route('services') }}" class="text-slate-400 hover:text-white transition">Dangerous Goods</a></li>
                    <li><a href="{{ route('services') }}" class="text-slate-400 hover:text-white transition">E-Commerce Shipping</a></li>
                </ul>
            </div>

            {{-- Legal --}}
            <div>
                <h4 class="font-semibold text-lg mb-5">Legal</h4>
                <ul class="space-y-3">
                    <li><a href="#" class="text-slate-400 hover:text-white transition">Terms of Service</a></li>
                    <li><a href="#" class="text-slate-400 hover:text-white transition">Privacy Policy</a></li>
                    <li><a href="#" class="text-slate-400 hover:text-white transition">Cookie Policy</a></li>
                    <li><a href="#" class="text-slate-400 hover:text-white transition">Shipping Policy</a></li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="border-t border-slate-800">
        <div class="container mx-auto px-6 lg:px-12 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-500 text-sm text-center md:text-left">
                    © {{ date('Y') }} Horse Cargo. All rights reserved.
                </p>

                <div class="flex items-center gap-4">
                    <span class="text-slate-500 text-sm">UAE Licensed Freight Forwarder</span>
                    <button
                        @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                        class="w-10 h-10 rounded-lg border border-slate-700 text-slate-400 hover:text-white hover:bg-slate-800 flex items-center justify-center transition-all"
                        aria-label="Back to top"
                        x-data
                    >
                        <i class="ph-arrow-up text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</footer>

