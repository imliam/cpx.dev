<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Run Composer Packages Effortlessly">
        <meta name="keywords" content="php,composer,packages,cpx,run,npx">

        <title>{{ $title ?? config('app.name') }}</title>

        <link rel="icon" href="{{ url('/favicon.svg') }}" type="image/svg+xml">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')

        <!-- Twitter Cards -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ config('app.name') }}">
        <meta name="twitter:description" content="Run Composer Packages Effortlessly">
        <meta name="twitter:image" content="{{ asset('/banner.png') }}">

        <!-- Open Graph -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ config('app.name') }}">
        <meta property="og:description" content="Run Composer Packages Effortlessly">
        <meta property="og:image" content="{{ asset('/banner.png') }}">
        <meta property="og:url" content="{{ url('/') }}">

        <!-- JSON-LD -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "WebPage",
                "name": "{{ config('app.name') }}",
                "description": "Run Composer Packages Effortlessly",
                "url": "{{ url('/') }}"
            }
        </script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-3VK6MG91LW"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-3VK6MG91LW');
        </script>
    </head>
    <body class="flex flex-col items-center justify-center min-h-screen px-4 py-16 font-sans antialiased text-white bg-slate-900 bg-gradient-to-b from-slate-900 to-slate-700 sm:px-8">
        {{ $slot }}

        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>
        @stack('scripts')
    </body>
</html>
