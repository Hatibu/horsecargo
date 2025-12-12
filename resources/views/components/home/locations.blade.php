{{-- resources/views/components/locations.blade.php --}}
<section class="py-24 bg-slate-50" id="contact">
    <div class="container mx-auto px-6 lg:px-12">

        {{-- Header --}}
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="inline-block bg-[#8B1A32]/10 text-[#8B1A32] px-4 py-2 rounded-full text-sm font-medium mb-4">
                Our Offices
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">
                Visit Us in Dubai or Tanzania
            </h2>
            <p class="text-slate-600 text-lg">
                With offices in both locations, we provide seamless service and local support for all your shipping needs.
            </p>
        </div>

        {{-- Location Cards --}}
        <div class="grid lg:grid-cols-2 gap-8 mb-12">
            @php
                $locations = [
                    [
                        'city' => 'Dubai, UAE',
                        'address' => 'AI Badri building floor no. 2 Office no. S 201 Baniyas square, Deira, Dubai',
                        'phone' => '+971 50 608 3531',
                        'whatsapp' => '+971506083531',
                        'email' => 'dubai@horsecargo.com',
                        'hours' => 'Sun - Thu: 8:00 AM - 6:00 PM',
                        'image' => 'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=800&q=80',
                        'coords' => [25.2697, 55.3095]
                    ],
                    [
                        'city' => 'Dar es Salaam, Tanzania',
                        'address' => 'Rufiji and Swahili street, Kariakoo, Dar es Salaam',
                        'phone' => '+255 77 822 2251',
                        'whatsapp' => '+255778222251',
                        'email' => 'tanzania@horsecargo.com',
                        'hours' => 'Mon - Sat: 8:00 AM - 5:00 PM',
                        'image' => 'https://images.unsplash.com/photo-1568254183919-78a4f43a2877?w=800&q=80',
                        'coords' => [-6.8161, 39.2803]
                    ]
                ];
            @endphp

            @foreach($locations as $index => $loc)
                <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500"
                    data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">

                    {{-- Office Image --}}
                    <div class="h-52 relative">
                        <img src="{{ $loc['image'] }}" alt="{{ $loc['city'] }}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/70 to-transparent"></div>
                        <h3 class="absolute bottom-5 left-5 text-2xl font-bold text-white">
                            {{ $loc['city'] }}
                        </h3>
                    </div>

                    {{-- Office Details --}}
                    <div class="p-8 space-y-5">
                        <div class="flex items-start gap-4">
                            <i class="ph-map-pin text-2xl text-[#8B1A32] flex-shrink-0 mt-1"></i>
                            <p class="text-slate-600 leading-relaxed">{{ $loc['address'] }}</p>
                        </div>

                        <div class="flex items-center gap-4">
                            <i class="ph-phone text-2xl text-[#8B1A32]"></i>
                            <div>
                                <span class="text-slate-600">Phone: </span>
                                <a href="tel:{{ $loc['phone'] }}" class="text-[#8B1A32] font-semibold hover:underline">
                                    {{ $loc['phone'] }}
                                </a>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            <div>
                                <span class="text-slate-600">WhatsApp: </span>
                                <a href="https://wa.me/{{ $loc['whatsapp'] }}" target="_blank" class="text-green-600 font-semibold hover:underline">
                                    {{ $loc['phone'] }}
                                </a>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <i class="ph-envelope text-2xl text-[#8B1A32]"></i>
                            <a href="mailto:{{ $loc['email'] }}" class="text-[#8B1A32] font-semibold hover:underline">
                                {{ $loc['email'] }}
                            </a>
                        </div>

                        <div class="flex items-center gap-4">
                            <i class="ph-clock text-2xl text-[#8B1A32]"></i>
                            <span class="text-slate-600">{{ $loc['hours'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Interactive Map --}}
        <div class="rounded-3xl overflow-hidden shadow-2xl h-96 lg:h-[500px]" data-aos="fade-up">
            <div id="locations-map" class="w-full h-full"></div>
        </div>
    </div>
</section>

{{-- Leaflet Map Script --}}
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<script>
document.addEventListener('DOMContentLoaded', function () {
    const map = L.map('locations-map').setView([5, 45], 3);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    const locations = @json($locations);

    locations.forEach(loc => {
        const marker = L.marker(loc.coords).addTo(map)
            .bindPopup(`
                <div class="font-bold text-lg">${loc.city}</div>
                <div class="text-sm text-slate-600 mt-1">${loc.address}</div>
                <div class="text-sm mt-2">
                    <a href="tel:${loc.phone}" class="text-[#8B1A32] hover:underline">Phone ${loc.phone}</a><br>
                    <a href="https://wa.me/${loc.whatsapp}" target="_blank" class="text-green-600 hover:underline">WhatsApp</a>
                </div>
            `);

        marker.openPopup();
    });

    // Fit map to show both markers nicely
    const bounds = L.latLngBounds(locations.map(l => l.coords));
    map.fitBounds(bounds, { padding: [50, 50] });
});
</script>

<style>
/* Custom marker color */
.leaflet-marker-icon {
    filter: hue-rotate(20deg) saturate(2);
}
</style>