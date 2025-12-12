<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Services - {{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] min-h-screen">
        <nav class="w-full max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{ route('home') }}" class="text-xl font-semibold">HorseCargo</a>
            <div class="flex items-center gap-4">
                <a href="{{ route('home') }}" class="text-sm hover:underline">Home</a>
                <a href="{{ route('about') }}" class="text-sm hover:underline">About</a>
                <a href="{{ route('services') }}" class="text-sm hover:underline">Services</a>
                <a href="{{ route('contact') }}" class="text-sm hover:underline">Contact</a>
            </div>
        </nav>
        <main class="max-w-7xl mx-auto px-6 py-12">
            <h1 class="text-4xl font-bold mb-4">Our Services</h1>
            <p class="text-lg text-[#706f6c] dark:text-[#A1A09A] mb-12">
                We offer a comprehensive range of horse transportation and cargo services.
            </p>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white dark:bg-[#161615] p-8 rounded-lg shadow-sm border border-[#e3e3e0] dark:border-[#3E3E3A]">
                    <h2 class="text-2xl font-semibold mb-4">Horse Transportation</h2>
                    <p class="text-[#706f6c] dark:text-[#A1A09A] mb-4">
                        Professional horse transportation services for local and long-distance moves. 
                        Our specialized trailers ensure the safety and comfort of your animals.
                    </p>
                    <ul class="list-disc list-inside text-[#706f6c] dark:text-[#A1A09A] space-y-2">
                        <li>Local and interstate transport</li>
                        <li>Emergency transportation</li>
                        <li>Show and competition transport</li>
                        <li>Breeding and sales transport</li>
                    </ul>
                </div>
                <div class="bg-white dark:bg-[#161615] p-8 rounded-lg shadow-sm border border-[#e3e3e0] dark:border-[#3E3E3A]">
                    <h2 class="text-2xl font-semibold mb-4">Cargo Services</h2>
                    <p class="text-[#706f6c] dark:text-[#A1A09A] mb-4">
                        Reliable cargo transportation for equestrian equipment, feed, and supplies.
                    </p>
                    <ul class="list-disc list-inside text-[#706f6c] dark:text-[#A1A09A] space-y-2">
                        <li>Equipment transport</li>
                        <li>Feed and supply delivery</li>
                        <li>Furniture and large items</li>
                        <li>Custom cargo solutions</li>
                    </ul>
                </div>
                <div class="bg-white dark:bg-[#161615] p-8 rounded-lg shadow-sm border border-[#e3e3e0] dark:border-[#3E3E3A]">
                    <h2 class="text-2xl font-semibold mb-4">Consultation Services</h2>
                    <p class="text-[#706f6c] dark:text-[#A1A09A] mb-4">
                        Expert advice on transportation planning and logistics.
                    </p>
                    <ul class="list-disc list-inside text-[#706f6c] dark:text-[#A1A09A] space-y-2">
                        <li>Route planning</li>
                        <li>Transportation scheduling</li>
                        <li>Safety assessments</li>
                        <li>Custom logistics solutions</li>
                    </ul>
                </div>
                <div class="bg-white dark:bg-[#161615] p-8 rounded-lg shadow-sm border border-[#e3e3e0] dark:border-[#3E3E3A]">
                    <h2 class="text-2xl font-semibold mb-4">Emergency Services</h2>
                    <p class="text-[#706f6c] dark:text-[#A1A09A] mb-4">
                        24/7 emergency transportation services for urgent situations.
                    </p>
                    <ul class="list-disc list-inside text-[#706f6c] dark:text-[#A1A09A] space-y-2">
                        <li>24/7 availability</li>
                        <li>Rapid response</li>
                        <li>Veterinary transport</li>
                        <li>Emergency relocation</li>
                    </ul>
                </div>
            </div>
        </main>
    </body>
</html>

