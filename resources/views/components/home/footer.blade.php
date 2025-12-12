<footer class="bg-[#1b1b18] dark:bg-[#161615] text-white py-12 mt-16">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-semibold mb-4">HorseCargo</h3>
                <p class="text-gray-300 text-sm">Your trusted partner for reliable horse transportation and cargo services.</p>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:underline">About</a></li>
                    <li><a href="{{ route('services') }}" class="hover:underline">Services</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:underline">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Services</h4>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li>Horse Transportation</li>
                    <li>Cargo Services</li>
                    <li>Emergency Services</li>
                    <li>Consultation</li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Contact</h4>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li>Phone: +1 (555) 123-4567</li>
                    <li>Email: info@horsecargo.com</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm text-gray-400">
            <p>&copy; {{ date('Y') }} HorseCargo. All rights reserved.</p>
        </div>
    </div>
</footer>

