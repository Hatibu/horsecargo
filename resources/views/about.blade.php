<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About - {{ config('app.name', 'Laravel') }}</title>
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
            <h1 class="text-4xl font-bold mb-4">About Us</h1>
            <div class="prose prose-lg dark:prose-invert max-w-3xl">
                <p class="text-lg text-[#706f6c] dark:text-[#A1A09A] mb-6">
                    HorseCargo has been a trusted name in horse transportation for over two decades. 
                    We specialize in providing safe, reliable, and professional transportation services 
                    for horses of all breeds and sizes.
                </p>
                <p class="text-lg text-[#706f6c] dark:text-[#A1A09A] mb-6">
                    Our team of experienced professionals understands the unique needs of horse owners 
                    and ensures that every journey is handled with the utmost care and attention to detail.
                </p>
                <h2 class="text-2xl font-semibold mt-8 mb-4">Our Mission</h2>
                <p class="text-lg text-[#706f6c] dark:text-[#A1A09A] mb-6">
                    To provide exceptional horse transportation services that prioritize the safety, 
                    comfort, and well-being of your animals while delivering reliable and professional 
                    service to our clients.
                </p>
            </div>
        </main>
    </body>
</html>

