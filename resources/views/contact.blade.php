<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact - {{ config('app.name', 'Laravel') }}</title>
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
            <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
            <p class="text-lg text-[#706f6c] dark:text-[#A1A09A] mb-12">
                Get in touch with us for inquiries, quotes, or to schedule a service.
            </p>
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-2xl font-semibold mb-6">Contact Information</h2>
                    <div class="space-y-4">
                        <div>
                            <h3 class="font-semibold mb-2">Phone</h3>
                            <p class="text-[#706f6c] dark:text-[#A1A09A]">+1 (555) 123-4567</p>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Email</h3>
                            <p class="text-[#706f6c] dark:text-[#A1A09A]">info@horsecargo.com</p>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Address</h3>
                            <p class="text-[#706f6c] dark:text-[#A1A09A]">
                                123 Horse Transport Lane<br>
                                Equestrian City, EC 12345
                            </p>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Business Hours</h3>
                            <p class="text-[#706f6c] dark:text-[#A1A09A]">
                                Monday - Friday: 8:00 AM - 6:00 PM<br>
                                Saturday: 9:00 AM - 4:00 PM<br>
                                Sunday: Emergency Services Only
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-[#161615] p-8 rounded-lg shadow-sm border border-[#e3e3e0] dark:border-[#3E3E3A]">
                    <h2 class="text-2xl font-semibold mb-6">Send us a Message</h2>
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium mb-2">Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg bg-white dark:bg-[#161615] focus:outline-none focus:ring-2 focus:ring-[#1b1b18] dark:focus:ring-[#EDEDEC]">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg bg-white dark:bg-[#161615] focus:outline-none focus:ring-2 focus:ring-[#1b1b18] dark:focus:ring-[#EDEDEC]">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg bg-white dark:bg-[#161615] focus:outline-none focus:ring-2 focus:ring-[#1b1b18] dark:focus:ring-[#EDEDEC]"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-[#1b1b18] dark:bg-[#EDEDEC] text-white dark:text-[#1b1b18] px-6 py-3 rounded-lg font-medium hover:opacity-90 transition-opacity">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>

