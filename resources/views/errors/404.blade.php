<!DOCTYPE html>
<html lang="en" class="h-full bg-white dark:bg-gray-900">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Static SEO/Title specific to 404 page -->
    <title>404 - Page Not Found | Awar Rafeh Group</title>
    <meta name="description"
        content="The page you are looking for does not exist. Please return to the homepage or contact us for assistance.">

    <!-- Base Styles and Assets (Assumes your compiled CSS supports dark mode and the font) -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <!-- Replace this with your actual CSS/Tailwind compiled output if needed -->
    <!-- For robust error handling, sometimes loading the CSS explicitly is best -->

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Ensures HTML and body take up full viewport height for perfect centering */
        html,
        body {
            height: 100%;
            margin: 0;
        }
    </style>
</head>

<body class="flex flex-col items-center justify-center h-full bg-white dark:bg-gray-900 antialiased">

    <div class="relative flex flex-col items-center justify-center w-full h-screen p-4 text-center">

        <!-- Large Error Code -->
        <p class="text-7xl sm:text-9xl font-extrabold text-gray-200 dark:text-gray-700/50 relative">
            404
        </p>

        <div class="relative -mt-16 sm:-mt-24 max-w-lg mx-auto">

            <!-- Icon: Broken link/page or construction error (Circle with an X) -->
            <svg class="w-16 h-16 mx-auto mb-6 text-cyan-600 dark:text-teal-400" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Page Not Found Icon</title>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2A9 9 0 111 12a9 9 0 0118 0z" />
            </svg>

            <!-- Main Heading -->
            <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-gray-900 dark:text-white mb-4">
                Page Under Construction?
            </h1>

            <!-- Subtext -->
            <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 leading-relaxed">
                Oops! It seems the page you were looking for doesn't exist, or perhaps it's currently being built with
                Precision. Please use the links below to safely navigate back.
            </p>

            <!-- Call to Action Buttons -->
            <div class="flex flex-wrap justify-center gap-4">

                <!-- Go Home Button (Primary) -->
                <a href="/"
                    class="inline-flex items-center px-6 py-3 text-base font-semibold text-white bg-gradient-to-r from-cyan-600 to-teal-600 hover:from-cyan-700 hover:to-teal-700 dark:from-cyan-500 dark:to-teal-500 dark:hover:from-cyan-600 dark:hover:to-teal-600 rounded-lg shadow-xl transform hover:scale-[1.02] transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-cyan-500/50">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    Back to Homepage
                </a>

                <!-- Contact Support Button (Secondary) -->
                <a href="/contact"
                    class="inline-flex items-center px-6 py-3 text-base font-semibold text-cyan-700 dark:text-cyan-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 border-2 border-cyan-600 dark:border-cyan-400 rounded-lg transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-cyan-500/50">
                    Contact Support
                </a>
            </div>
        </div>
    </div>

</body>

</html>
