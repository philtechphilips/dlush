<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    {{-- Fallback meta tags for pages without specific meta data --}}
    <title>{{ config('app.name', 'D Lush') }}</title>
    <meta name="description"
        content="{{ config('app.description', 'D Lush - Your premier destination for entertainment industry insights, artist spotlights, music reviews, and behind-the-scenes content from the 69 Entertainment brand.') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ request()->url() }}">

    {{-- Basic Open Graph --}}
    <meta property="og:title" content="{{ config('app.name', 'D Lush') }}">
    <meta property="og:description"
        content="{{ config('app.description', 'D Lush - Your premier destination for entertainment industry insights, artist spotlights, music reviews, and behind-the-scenes content from the 69 Entertainment brand.') }}">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('app.name', 'D Lush') }}">

    {{-- Basic Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'D Lush') }}">
    <meta name="twitter:description"
        content="{{ config('app.description', 'D Lush - Your premier destination for entertainment industry insights, artist spotlights, music reviews, and behind-the-scenes content from the 69 Entertainment brand.') }}">

    <link rel="stylesheet" href="/base.css" media="print" onload="this.media='all'">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" as="style">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" media="print"
        onload="this.media='all'">
    @yield('styles')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">
    @include('layouts.navigation')
    <div class="relative">
        <!-- Page Content -->
        <main>
            @yield('contents')
        </main>
    </div>

    @include('layouts.footer')

    @yield('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');
            const menuClose = document.getElementById('menu-close');
            const mobileMenu = document.getElementById('mobile-menu');
            let isMenuOpen = false;
    
            // Open menu - swipe in from right
            menuToggle.addEventListener('click', function() {
                if (!isMenuOpen) {
                    mobileMenu.classList.remove('translate-x-full');
                    mobileMenu.classList.add('translate-x-0');
                    menuToggle.classList.add('hidden');
                    menuClose.classList.remove('hidden');
                    isMenuOpen = true;
                }
            });
    
            // Close menu - swipe out to right
            menuClose.addEventListener('click', function() {
                if (isMenuOpen) {
                    mobileMenu.classList.remove('translate-x-0');
                    mobileMenu.classList.add('translate-x-full');
                    menuClose.classList.add('hidden');
                    menuToggle.classList.remove('hidden');
                    isMenuOpen = false;
                }
            });
    
            // Close menu when clicking on nav links
            const navLinks = mobileMenu.querySelectorAll('a');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (isMenuOpen) {
                        mobileMenu.classList.remove('translate-x-0');
                        mobileMenu.classList.add('translate-x-full');
                        menuClose.classList.add('hidden');
                        menuToggle.classList.remove('hidden');
                        isMenuOpen = false;
                    }
                });
            });
        });
    </script>
</body>

</html>
