<section class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-950 font-inter transition-colors duration-300 p-4">
<div class="max-w-xl w-full text-center p-8 md:p-12 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl shadow-gray-400/40 dark:shadow-black/70 border border-gray-100 dark:border-gray-700 transition-all duration-300">

    <!-- LOGO -->
    <img src="{{ asset('icons/logo-cropped-nobg.PNG') }}" alt="Awar Rafeh Group Logo" class="h-16 w-auto mx-auto mb-8 filter dark:brightness-150">

    <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white mb-4 leading-tight">
        Pardon Our Appearance
    </h1>
    <p class="text-xl text-gray-700 dark:text-gray-300 mb-10">
        The **Awar Rafeh Group** website is currently undergoing **scheduled maintenance** to bring you a better experience.
    </p>

    <!-- Progress/Details Box (Enhanced UI - Alert Style) -->
    <div class="p-6 bg-cyan-50 dark:bg-gray-900 rounded-xl border-l-4 border-cyan-500 dark:border-cyan-400 shadow-lg dark:shadow-cyan-900/50">
        <h2 class="text-xl font-extrabold text-cyan-700 dark:text-cyan-400 mb-3 flex items-center justify-center space-x-2">
            <!-- Spinner/Working Icon -->
            <svg class="w-6 h-6 animate-spin text-cyan-600 dark:text-cyan-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            <span>We'll Be Back Shortly</span>
        </h2>
        <p class="text-base text-gray-700 dark:text-gray-400 leading-relaxed">
            We are working hard behind the scenes to update our platform with essential improvements and new features. We appreciate your patience and look forward to welcoming you back soon.
        </p>
    </div>

    <!-- Footer Notice -->
    <div class="mt-8 text-sm text-gray-500 dark:text-gray-500">
        <p>&copy; {{ date('Y') }} Awar Rafeh Group. All Rights Reserved.</p>
    </div>
</div>

</section>
