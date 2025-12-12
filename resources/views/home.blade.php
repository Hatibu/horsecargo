<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home - {{ config('app.name', 'Laravel') }}</title>
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
            <h1 class="text-4xl font-bold mb-4">Welcome to HorseCargo</h1>
            <p class="text-lg text-[#706f6c] dark:text-[#A1A09A] mb-8">
                Your trusted partner for reliable horse transportation and cargo services.
            </p>
            <div class="grid md:grid-cols-3 gap-6 mt-12">
                <div class="bg-white dark:bg-[#161615] p-6 rounded-lg shadow-sm border border-[#e3e3e0] dark:border-[#3E3E3A]">
                    <h2 class="text-xl font-semibold mb-2">Professional Service</h2>
                    <p class="text-[#706f6c] dark:text-[#A1A09A]">Expert handling and care for your horses.</p>
                </div>
                <div class="bg-white dark:bg-[#161615] p-6 rounded-lg shadow-sm border border-[#e3e3e0] dark:border-[#3E3E3A]">
                    <h2 class="text-xl font-semibold mb-2">Safe Transport</h2>
                    <p class="text-[#706f6c] dark:text-[#A1A09A]">State-of-the-art equipment and experienced drivers.</p>
                </div>
                <div class="bg-white dark:bg-[#161615] p-6 rounded-lg shadow-sm border border-[#e3e3e0] dark:border-[#3E3E3A]">
                    <h2 class="text-xl font-semibold mb-2">24/7 Support</h2>
                    <p class="text-[#706f6c] dark:text-[#A1A09A]">Round-the-clock assistance for all your needs.</p>
                </div>
            </div>
        </main>
    </body>
</html>

