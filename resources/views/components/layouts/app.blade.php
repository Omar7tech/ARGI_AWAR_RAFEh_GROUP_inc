<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>

<body class="bg-white  dark:bg-gray-900">
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
