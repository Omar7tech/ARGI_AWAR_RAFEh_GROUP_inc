@props(['contactSettings'])
<footer
    class="relative bg-gray-50 dark:bg-gradient-to-b dark:from-slate-900 dark:via-gray-900 dark:to-black overflow-hidden font-inter">


    <!-- Animated Background Grid (Colors remain subtle accent) -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-10">
        <div class="absolute inset-0"
            style="background-image: linear-gradient(rgba(6, 182, 212, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(6, 182, 212, 0.1) 1px, transparent 1px); background-size: 50px 50px;">
        </div>
    </div>

    <!-- Glowing Orbs (Visible in dark mode, subtle in light mode) -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div
            class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-teal-500/20 dark:from-teal-500/30 via-cyan-500/10 dark:via-cyan-500/20 to-blue-500/5 dark:to-blue-500/10 rounded-full blur-3xl animate-pulse">
        </div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-blue-500/20 dark:from-blue-500/30 via-teal-500/10 dark:via-teal-500/20 to-cyan-500/5 dark:to-cyan-500/10 rounded-full blur-3xl animate-pulse"
            style="animation-delay: 1.5s;"></div>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-gradient-radial from-teal-500/5 to-transparent rounded-full blur-3xl">
        </div>
    </div>

    <!-- Top Wave Border (Subtle Divider) -->
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-teal-500/50 to-transparent">
    </div>

    <div class="relative container mx-auto px-4 max-w-7xl pt-16 pb-8">

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-12 mb-12">

            <!-- Brand Section with Enhanced Design -->
            <div class="lg:col-span-5 space-y-6">
                <div class="relative inline-block group">
                    <!-- Glow effect behind logo -->
                    <div
                        class="absolute -inset-4 bg-gradient-to-r from-teal-500/10 via-cyan-500/10 to-blue-500/10 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-all duration-500">
                    </div>

                    <a href="#" class="relative flex items-start space-x-4 group">
                        <div class="relative flex-shrink-0">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-teal-500/20 to-cyan-500/20 rounded-2xl blur-md opacity-0 group-hover:opacity-60 transition-opacity duration-500 dark:from-teal-500 dark:to-cyan-500">
                            </div>
                            <div
                                class="relative w-16 h-16 bg-white dark:bg-gradient-to-br dark:from-gray-800 dark:to-gray-900 rounded-2xl p-2 border border-gray-300 dark:border-gray-700/50 group-hover:border-teal-500/50 transition-all duration-500 group-hover:scale-105">
                                <img src="{{ asset('icons/logo-cropped-nobg.png') }}" alt="Awar Rafeh Group"
                                    class="w-full h-full object-contain" loading="lazy">
                            </div>
                        </div>
                        <div>
                            <!-- Brand Text Color adjusted for Light Mode default -->
                            <span
                                class="block text-2xl font-black text-transparent bg-clip-text bg-gradient-to-r from-gray-900 via-gray-700 to-gray-900 dark:from-white dark:via-gray-100 dark:to-white group-hover:from-teal-600 group-hover:via-cyan-600 group-hover:to-blue-600 dark:group-hover:from-teal-400 dark:group-hover:via-cyan-400 dark:group-hover:to-blue-400 transition-all duration-500">
                                Awar Rafeh Group
                            </span>
                            <span
                                class="block text-xs text-teal-600/80 dark:text-teal-400/80 font-semibold tracking-wider uppercase mt-1">
                                Foundation Excellence
                            </span>
                        </div>
                    </a>
                </div>

                <!-- Description Text Color adjusted for Light Mode default -->
                <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed max-w-md">
                    Engineering precision and dedication into every foundation across the Washington Metropolitan Area.
                    Building the groundwork for tomorrow's landmarks.
                </p>
            </div>

            <!-- Navigation Columns -->
            <div class="lg:col-span-2 space-y-5">
                <div class="relative inline-block">
                    <!-- Heading Text Color adjusted for Light Mode default -->
                    <h3 class="text-sm font-black text-gray-900 dark:text-white uppercase tracking-wider">Company</h3>
                    <div
                        class="absolute -bottom-1 left-0 w-12 h-1 bg-gradient-to-r from-teal-500 via-cyan-500 to-transparent rounded-full">
                    </div>
                </div>
                <ul class="space-y-3">
                    <!-- Link Text Color and Hover adjusted for Light Mode default -->
                    <li>
                        <a wire:navigate href="{{ route('welcome') }}"
                            class="group inline-flex items-center text-sm text-gray-600 hover:text-teal-600 dark:text-gray-400 dark:hover:text-teal-400 transition-all duration-300">
                            <span
                                class="w-0 group-hover:w-2 h-px bg-gradient-to-r from-teal-600 dark:from-teal-400 to-transparent transition-all duration-300 mr-0 group-hover:mr-2"></span>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Home</span>
                        </a>
                    </li>
                    <li>
                        <a wire:navigate href="{{ route('about') }}"
                            class="group inline-flex items-center text-sm text-gray-600 hover:text-teal-600 dark:text-gray-400 dark:hover:text-teal-400 transition-all duration-300">
                            <span
                                class="w-0 group-hover:w-2 h-px bg-gradient-to-r from-teal-600 dark:from-teal-400 to-transparent transition-all duration-300 mr-0 group-hover:mr-2"></span>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">About Us</span>
                        </a>
                    </li>
                    <li>
                        <a wire:navigate href="{{ route('our-work') }}"
                            class="group inline-flex items-center text-sm text-gray-600 hover:text-teal-600 dark:text-gray-400 dark:hover:text-teal-400 transition-all duration-300">
                            <span
                                class="w-0 group-hover:w-2 h-px bg-gradient-to-r from-teal-600 dark:from-teal-400 to-transparent transition-all duration-300 mr-0 group-hover:mr-2"></span>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Our Work</span>
                        </a>
                    </li>
                    <li>
                        <a wire:navigate href="{{ route('services') }}"
                            class="group inline-flex items-center text-sm text-gray-600 hover:text-teal-600 dark:text-gray-400 dark:hover:text-teal-400 transition-all duration-300">
                            <span
                                class="w-0 group-hover:w-2 h-px bg-gradient-to-r from-teal-600 dark:from-teal-400 to-transparent transition-all duration-300 mr-0 group-hover:mr-2"></span>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Services</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="lg:col-span-2 space-y-5">
                <div class="relative inline-block">
                    <!-- Heading Text Color adjusted for Light Mode default -->
                    <h3 class="text-sm font-black text-gray-900 dark:text-white uppercase tracking-wider">Resources</h3>
                    <div
                        class="absolute -bottom-1 left-0 w-12 h-1 bg-gradient-to-r from-cyan-500 via-blue-500 to-transparent rounded-full">
                    </div>
                </div>
                <ul class="space-y-3">
                    <!-- Link Text Color and Hover adjusted for Light Mode default -->
                    <li>
                        <a wire:navigate href="{{ route('privacy-policy') }}"
                            class="group inline-flex items-center text-sm text-gray-600 hover:text-cyan-600 dark:text-gray-400 dark:hover:text-cyan-400 transition-all duration-300">
                            <span
                                class="w-0 group-hover:w-2 h-px bg-gradient-to-r from-cyan-600 dark:from-cyan-400 to-transparent transition-all duration-300 mr-0 group-hover:mr-2"></span>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Privacy
                                Policy</span>
                        </a>
                    </li>
                    <li>
                        <a wire:navigate href="{{ route('terms-and-conditions') }}"
                            class="group inline-flex items-center text-sm text-gray-600 hover:text-cyan-600 dark:text-gray-400 dark:hover:text-cyan-400 transition-all duration-300">
                            <span
                                class="w-0 group-hover:w-2 h-px bg-gradient-to-r from-cyan-600 dark:from-cyan-400 to-transparent transition-all duration-300 mr-0 group-hover:mr-2"></span>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Terms &
                                Conditions</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- CTA Card adjusted for Light Mode default -->
            <div class="lg:col-span-3">
                <div class="relative group">
                    <!-- Card glow (Fine for both) -->
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-teal-500 via-cyan-500 to-blue-500 rounded-2xl opacity-20 group-hover:opacity-40 blur-xl transition-all duration-500">
                    </div>

                    <!-- Card content adjusted for Light Mode default -->
                    <div
                        class="relative bg-white/90 dark:bg-gradient-to-br dark:from-gray-800/90 dark:to-gray-900/90 backdrop-blur-xl rounded-2xl p-6 border border-gray-200 dark:border-gray-700/50 group-hover:border-teal-500/50 transition-all duration-500 shadow-xl dark:shadow-none">
                        <div
                            class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-teal-500/10 to-cyan-500/10 rounded-full blur-2xl">
                        </div>

                        <div class="relative space-y-4">
                            <div
                                class="inline-flex items-center gap-2 px-3 py-1 bg-teal-500/10 border border-teal-500/20 rounded-full">
                                <div class="w-2 h-2 bg-teal-600 dark:bg-teal-400 rounded-full animate-pulse"></div>
                                <span class="text-xs font-semibold text-teal-600 dark:text-teal-400">Get Started</span>
                            </div>

                            <!-- Text Color adjusted for Light Mode default -->
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Ready to Build?</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Let's discuss your foundation needs and
                                create something remarkable together.</p>

                            <!-- Button remains an accent color, fine for both -->
                            <a wire:navigate href="{{ route('contact') }}"
                                class="group/btn inline-flex items-center gap-2 px-5 py-3 w-full justify-center text-sm font-bold text-white bg-gradient-to-r from-teal-600 to-cyan-600 hover:from-teal-500 hover:to-cyan-500 rounded-xl transition-all duration-300 shadow-lg shadow-teal-500/30 hover:shadow-teal-500/40 hover:-translate-y-1">
                                <svg class="w-4 h-4 group-hover/btn:rotate-12 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                                Contact Our Team
                                <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social Media Bar adjusted for Light Mode default -->
        @if ($contactSettings->social_media && count($contactSettings->social_media) > 0)
            <div class="flex items-center justify-center gap-3 py-8 border-y border-gray-200 dark:border-gray-800/50">

                <div class="flex items-center gap-2">
                    @foreach ($contactSettings->social_media as $s)
                        <a href="{{ $s['url'] }}" target="_blank" rel="noopener noreferrer"
                            class="group relative w-9 h-9 bg-white dark:bg-gradient-to-br dark:from-gray-800 dark:to-gray-900 hover:from-teal-600 hover:to-cyan-600 rounded-lg transition-all duration-300 hover:shadow-lg hover:shadow-teal-500/40 hover:-translate-y-1 flex items-center justify-center overflow-hidden border border-gray-300 dark:border-gray-700/50 hover:border-transparent">
                            <!-- Image class adjusted: full brightness in light mode (default), dimmed in dark mode -->
                            <img class="w-full h-full object-cover transition-all duration-300 group-hover:scale-110 dark:brightness-75 dark:group-hover:brightness-100"
                                src="{{ $s['icon_url'] }}" alt="{{ $s['platform'] ?? 'Social Media' }}">
                        </a>
                    @endforeach
                </div>
            </div>
        @endif

        <div class="pt-8 pb-4">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                <div class="flex flex-col sm:flex-row items-center gap-2 text-sm text-center lg:text-left">
                    <span class="text-gray-600 dark:text-gray-500">© 2025</span>
                    <a href="#"
                        class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600 dark:from-teal-400 dark:to-cyan-400 hover:from-teal-500 hover:to-cyan-500 dark:hover:from-teal-300 dark:hover:to-cyan-300 transition-all">
                        Awar Rafeh Group
                    </a>
                    <span class="hidden sm:inline text-gray-400 dark:text-gray-700">•</span>
                    <span class="text-gray-600 dark:text-gray-500">All Rights Reserved</span>
                </div>

                <!-- Developer Info adjusted for Light Mode default -->
                <div class="flex flex-col sm:flex-row items-center gap-3 text-xs">
                    <div
                        class="flex items-center gap-2 px-3 py-1.5 bg-gray-100 dark:bg-gray-800/50 rounded-full border border-gray-200 dark:border-gray-700/30">
                        <svg class="w-3 h-3 text-teal-600 dark:text-teal-400" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-600 dark:text-gray-400">Crafted by</span>
                        <span class="font-bold text-gray-900 dark:text-white">Omar Abi Farraj</span>
                    </div>
                    <a href="tel:+96171387946"
                        class="flex items-center gap-2 px-3 py-1.5 bg-gray-100 hover:bg-teal-500/10 dark:bg-gray-800/50 rounded-full border border-gray-200 hover:border-teal-500/30 dark:border-gray-700/30 transition-all duration-300 group">
                        <svg class="w-3 h-3 text-gray-600 group-hover:text-teal-600 dark:text-gray-400 dark:group-hover:text-teal-400 transition-colors"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.772-1.548a1 1 0 011.06-.54l4.435.74A1 1 0 0118 16.847V17a1 1 0 01-1 1h-2C7.22 18 2 12.78 2 6V3z" />
                        </svg>
                        <span
                            class="text-gray-600 group-hover:text-teal-600 dark:text-gray-400 dark:group-hover:text-teal-400 transition-colors">+961
                            71 387 946</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Gradient Line -->
        <div class="h-1 bg-gradient-to-r from-transparent via-teal-500/50 to-transparent"></div>
    </div>
</footer>
