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
    <div class="">
        <!-- Page Content -->
        <main>
            @yield('contents')
        </main>
    </div>

    @include('layouts.footer')

    @yield('scripts')
</body>

</html>
