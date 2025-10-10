<section class="relative py-12 md:py-16 overflow-hidden bg-white dark:bg-gray-950 transition-colors duration-300">
    <div class="container relative mx-auto px-4 max-w-6xl">
        <div class="text-center mb-10">
            <div
                class="inline-flex items-center gap-2 px-3 py-1.5 mb-4 text-xs font-medium text-teal-700 dark:text-teal-300 bg-teal-50 dark:bg-teal-900/30 rounded-full border border-teal-200 dark:border-teal-700">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 2L13 8l6 .75-4.12 4.62L16 19l-6-3-6 3 1.13-5.63L1 8.75 7 8z" />
                </svg>
                Our Expertise
            </div>

            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4 leading-tight">
                Industries We
                <span class="relative inline-block">
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 dark:from-teal-400 dark:via-cyan-400 dark:to-blue-400">Serve</span>
                    <svg class="absolute -bottom-2 left-0 w-full" height="8" viewBox="0 0 200 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 5C20 3 40 2 60 2.5C80 3 100 4 120 3.5C140 3 160 2 180 3C190 3.5 195 4 199 5"
                            stroke="url(#gradient)" stroke-width="2" stroke-linecap="round" />
                        <defs>
                            <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" class="text-teal-500 dark:text-teal-400" stop-color="currentColor"
                                    stop-opacity="0.6" />
                                <stop offset="50%" class="text-cyan-500 dark:text-cyan-400" stop-color="currentColor"
                                    stop-opacity="0.8" />
                                <stop offset="100%" class="text-blue-500 dark:text-blue-400" stop-color="currentColor"
                                    stop-opacity="0.6" />
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
            </h2>

            <p class="text-base text-gray-600 dark:text-gray-300 max-w-2xl mx-auto leading-relaxed">
                Delivering specialized foundation and geotechnical solutions across vital sectors in the Washington
                Metropolitan Area.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($industries as $industry)
                <div
                    class="group relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl p-6 border border-gray-200/50 dark:border-gray-700/50 hover:border-cyan-400/50 dark:hover:border-cyan-400/50 transition-all duration-500 hover:shadow-xl hover:shadow-cyan-500/10 hover:-translate-y-1">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-cyan-500/5 via-transparent to-transparent rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-500">
                    </div>

                    <h3
                        class="relative mb-3 text-lg font-bold text-gray-900 dark:text-white group-hover:text-cyan-600 dark:group-hover:text-cyan-400 transition-colors duration-300">
                        {{ $industry->name }}
                    </h3>
                    <p
                        class="relative text-sm text-gray-600 dark:text-gray-300 leading-relaxed group-hover:text-gray-700 dark:group-hover:text-gray-200 transition-colors duration-300">
                        {{ $industry->description }}
                    </p>
                </div>
            @endforeach



        </div>

        <div class="mt-12 text-center">
            <div
                class="inline-flex flex-col items-center gap-4 p-6 bg-gradient-to-r from-gray-50/80 to-white/80 dark:from-gray-800/80 dark:to-gray-700/80 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-600/50">
                <div class="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-300">
                    <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="font-medium">Not sure which category fits your project?</span>
                </div>

                <a wire:navigate href="{{ route('contact') }}"
                    class="group inline-flex items-center gap-2 px-6 py-3 text-sm text-white bg-gradient-to-r from-teal-600 to-cyan-600 hover:from-teal-700 hover:to-cyan-700 rounded-lg font-semibold transition-all duration-300 hover:shadow-lg hover:shadow-teal-500/25 hover:-translate-y-0.5">
                    <svg class="w-4 h-4 group-hover:scale-110 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    Talk to Our Experts
                    <svg class="w-3 h-3 group-hover:translate-x-0.5 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
