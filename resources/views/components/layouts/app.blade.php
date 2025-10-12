<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white dark:bg-gray-900">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @php
        $defaultDescription = "Awar Rafeh Group specializes in high-quality construction, engineering, and project management services. Contact us for building and infrastructure solutions in your area.";
        $currentUrl = request()->url();
        $siteName = 'Awar Rafeh Group';
    @endphp
    <title>{{ $title ?? 'Awar Rafeh Group | Construction & Engineering Excellence' }}</title>

    <meta name="description" content="{{ $description ?? $defaultDescription }}">
    <link rel="canonical" href="{{ $canonical ?? $currentUrl }}">

    <meta property="og:title" content="{{ $title ?? $siteName }}">
    <meta property="og:description" content="{{ $description ?? $defaultDescription }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $currentUrl }}">
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:image" content="{{ asset('icons/logo.png') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@AwarRafehGroup">
    <meta name="twitter:title" content="{{ $title ?? $siteName }}">
    <meta name="twitter:description" content="{{ $description ?? $defaultDescription }}">
    <meta name="twitter:image" content="{{ asset('icons/logo.png') }}">


    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">





    <!-- Base Styles and Assets -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-white  dark:bg-gray-900">
    <x-nav.main />
    <div class="min-h-screen">
        {{ $slot }}
    </div>
    <x-footer.main />

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
        document.addEventListener('livewire:navigated', () => {
            if (window.initFlowbite) {
                window.initFlowbite();
            }
        });

        document.addEventListener('livewire:update', () => {
            if (window.initFlowbite) {
                window.initFlowbite();
            }
        });
    </script>

</body>

</html>
