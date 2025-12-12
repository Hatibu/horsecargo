<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Reliable cargo shipping from Dubai to Tanzania. Air freight, sea freight, e-commerce assistance, and dangerous goods handling.">
        <title>@yield('title', 'Horse Cargo - Dubai to Tanzania Shipping')</title>
        
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Leaflet CSS & JS (add in <head> or before closing </body>) -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
        
        <!-- AOS Animation -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        
        <!-- Font Awesome for Social Media Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- Favicon -->
        <link rel="icon" href="https://qtrypzzcjebvfcihiynt.supabase.co/storage/v1/object/public/base44-prod/public/user_6930211329811e87e3d81b16/713909efc_Horsecargologo.jpg">
        
        <!-- Ensure Phosphor Icons are visible -->
        <style>
            /* Phosphor Icons Base Styles */
            i[class^="ph-"], i[class*=" ph-"] {
                display: inline-block !important;
                font-style: normal !important;
                font-variant: normal !important;
                text-rendering: auto !important;
                line-height: 1 !important;
                width: 1em;
                height: 1em;
                vertical-align: middle;
                speak: none;
                font-feature-settings: normal;
                text-transform: none;
                position: relative;
            }
            .ph-bold {
                font-weight: 700 !important;
            }
            /* Ensure icons have proper sizing */
            i[class^="ph-"].text-lg, i[class*=" ph-"].text-lg {
                width: 1.25em;
                height: 1.25em;
            }
            i[class^="ph-"].text-xl, i[class*=" ph-"].text-xl {
                width: 1.5em;
                height: 1.5em;
            }
            i[class^="ph-"].text-2xl, i[class*=" ph-"].text-2xl {
                width: 1.75em;
                height: 1.75em;
            }
            i[class^="ph-"].text-3xl, i[class*=" ph-"].text-3xl {
                width: 2.25em;
                height: 2.25em;
            }
            i[class^="ph-"].text-4xl, i[class*=" ph-"].text-4xl {
                width: 3em;
                height: 3em;
            }
            i[class^="ph-"].text-5xl, i[class*=" ph-"].text-5xl {
                width: 4em;
                height: 4em;
            }
        </style>
        
        @stack('styles')
    </head>
    <body class="font-sans antialiased text-slate-800 bg-white">
        <main>
            @yield('content')
        </main>
        
        <!-- Leaflet CSS & JS (add in <head> or before closing </body>) -->
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        
        <!-- Phosphor Icons - Multiple CDN sources for reliability -->
        <script src="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1" onerror="this.onerror=null;this.src='https://unpkg.com/@phosphor-icons/web@2.1.1';"></script>
        <script>
            // Ensure Phosphor Icons are initialized on all pages
            (function() {
                function initPhosphorIcons() {
                    // The @phosphor-icons/web package automatically replaces <i class="ph-*"> with SVG
                    // But we ensure it runs after DOM is ready
                    if (typeof window !== 'undefined') {
                        // Check if icons need replacement
                        var icons = document.querySelectorAll('i[class*="ph-"]');
                        if (icons.length > 0) {
                            // Icons should be automatically replaced by the script
                            // If not, we'll retry
                            setTimeout(function() {
                                var stillIcons = document.querySelectorAll('i[class*="ph-"]:not(svg)');
                                if (stillIcons.length > 0 && window.PhosphorIcons && typeof window.PhosphorIcons.replace === 'function') {
                                    window.PhosphorIcons.replace();
                                }
                            }, 200);
                        }
                    }
                }
                
                // Run immediately if DOM is ready
                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', initPhosphorIcons);
                } else {
                    initPhosphorIcons();
                }
                
                // Also run after a delay for dynamic content
                setTimeout(initPhosphorIcons, 500);
            })();
        </script>
        
        <!-- Alpine.js -->
        <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
        
        <!-- AOS JS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({
                once: true,
                duration: 800,
                easing: 'ease-out-cubic'
            });
        </script>
        
        @stack('scripts')
    </body>
</html>

