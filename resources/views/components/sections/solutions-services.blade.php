@props(['ourWorks', 'services'])
<section
    class="relative py-12 md:py-16 lg:py-20 bg-gradient-to-br from-gray-50 via-white to-teal-50/20 dark:from-gray-950 dark:via-gray-900 dark:to-teal-950/20 transition-colors duration-300 overflow-hidden">
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div
            class="absolute top-1/4 -right-20 w-96 h-96 bg-gradient-to-br from-teal-300/20 to-cyan-300/20 dark:from-teal-500/10 dark:to-cyan-500/10 rounded-full blur-3xl animate-pulse">
        </div>
        <div class="absolute -bottom-20 -left-20 w-96 h-96 bg-gradient-to-tr from-cyan-300/20 to-blue-300/20 dark:from-cyan-500/10 dark:to-blue-500/10 rounded-full blur-3xl animate-pulse"
            style="animation-delay: 1.5s;"></div>
    </div>

    <div class="relative container mx-auto px-4 max-w-7xl">
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <div class="space-y-7">
                <div class="space-y-4">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 bg-white/60 dark:bg-gray-800/60 backdrop-blur-xl border border-teal-200/50 dark:border-teal-700/50 rounded-full shadow-sm">
                        <div class="w-2 h-2 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-full animate-pulse">
                        </div>
                        <span class="text-xs font-bold text-teal-700 dark:text-teal-300 uppercase tracking-wider">Our
                            Expertise</span>
                    </div>

                    <h2
                        class="text-3xl md:text-4xl lg:text-5xl font-black leading-tight text-gray-900 dark:text-white tracking-tight">
                        Solutions That Fit
                        <span class="block mt-1">
                            Your <span
                                class="relative inline-block text-transparent bg-clip-text bg-gradient-to-r from-teal-600 via-cyan-500 to-blue-600 dark:from-teal-400 dark:via-cyan-400 dark:to-blue-400">
                                Needs
                                <svg class="absolute -bottom-1 left-0 w-full" height="8" viewBox="0 0 200 8"
                                    fill="none">
                                    <path d="M1 5C40 2 80 3 120 4C160 3 180 2 199 5" stroke="url(#gradient2)"
                                        stroke-width="2.5" stroke-linecap="round" />
                                    <defs>
                                        <linearGradient id="gradient2" x1="0%" y1="0%" x2="100%"
                                            y2="0%">
                                            <stop offset="0%" stop-color="currentColor" class="text-teal-500"
                                                stop-opacity="0.6" />
                                            <stop offset="50%" stop-color="currentColor" class="text-cyan-500"
                                                stop-opacity="0.8" />
                                            <stop offset="100%" stop-color="currentColor" class="text-blue-500"
                                                stop-opacity="0.6" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                        </span>
                    </h2>

                    <p class="text-base md:text-lg text-gray-600 dark:text-gray-400 leading-relaxed max-w-xl">
                        Comprehensive construction services ensuring <span
                            class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600 dark:from-teal-400 dark:to-cyan-400">stability
                            and longevity</span> for your projects.
                    </p>
                </div>

                <div class="space-y-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        @foreach ($services as $index => $service)
                            <a wire:navigate href="{{ route('service.show', $service) }}"
                                class="group relative bg-white/70 dark:bg-gray-800/70 backdrop-blur-sm rounded-xl p-4 border border-gray-200/60 dark:border-gray-700/60 hover:border-teal-400/60 dark:hover:border-teal-500/60 transition-all duration-300 hover:shadow-xl hover:shadow-teal-500/20 hover:-translate-y-1 overflow-hidden">

                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-teal-500/0 via-cyan-500/0 to-blue-500/0 group-hover:from-teal-500/5 group-hover:via-cyan-500/5 group-hover:to-blue-500/5 rounded-xl transition-all duration-500">
                                </div>

                                <div
                                    class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-teal-500 via-cyan-500 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-t-xl">
                                </div>

                                <div class="relative flex items-center gap-3">
                                    @if ($service->getFirstMediaUrl())
                                        <div class="h-12 w-12">
                                            <img class="w-full h-full object-cover rounded-md"
                                                src="{{ $service->getFirstMediaUrl() }}" alt="">
                                        </div>
                                    @else
                                        <div
                                            class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-teal-100 to-cyan-100 dark:from-teal-900/40 dark:to-cyan-900/40 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-sm">
                                            <svg class="w-6 h-6 text-teal-600 dark:text-teal-400" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </div>
                                    @endif


                                    <div class="flex-1 min-w-0">
                                        <h3
                                            class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-teal-600 dark:group-hover:text-teal-400 transition-colors duration-300 truncate">
                                            {{ $service->name }}
                                        </h3>
                                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">Explore details</p>
                                    </div>

                                    <svg class="w-5 h-5 text-gray-400 group-hover:text-teal-600 dark:group-hover:text-teal-400 transform translate-x-0 group-hover:translate-x-1 transition-all duration-300"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="pt-2">
                    <a wire:navigate href="{{ route('services') }}"
                        class="group relative inline-flex items-center gap-2 px-6 py-3.5 text-sm font-bold text-white bg-gradient-to-r from-teal-600 to-cyan-600 hover:from-teal-500 hover:to-cyan-500 rounded-xl shadow-lg hover:shadow-xl hover:shadow-teal-500/40 transform hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000">
                        </div>
                        <span class="relative">View All Services</span>
                        <svg class="w-4 h-4 relative group-hover:translate-x-1 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="lg:order-last order-first">
                @if ($ourWorks->isNotEmpty())
                    <div class="relative">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-teal-400/15 via-cyan-400/15 to-blue-400/10 dark:from-teal-500/8 dark:via-cyan-500/8 dark:to-blue-500/5 rounded-3xl blur-2xl">
                        </div>
                        <div class="relative">
                            <x-carousel.ourworks :$ourWorks />
                        </div>
                    </div>
                @else
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-teal-400/20 via-cyan-400/20 to-blue-400/20 dark:from-teal-500/10 dark:via-cyan-500/10 dark:to-blue-500/10 rounded-3xl blur-2xl">
                        </div>

                        <div
                            class="relative bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl border border-white/50 dark:border-gray-700/50 transform group-hover:scale-[1.02] transition-all duration-500">
                            <img class="w-full h-auto object-cover lg:h-[500px] relative z-10"
                                src="{{ asset('icons/section2.PNG') }}" alt="Construction project services" />

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-gray-900/20 to-transparent pointer-events-none z-20">
                            </div>

                            <div class="absolute bottom-6 left-6 right-6 z-30 pointer-events-none">
                                <div
                                    class="inline-flex items-center gap-3 px-5 py-3 bg-white/95 dark:bg-gray-800/95 backdrop-blur-xl rounded-2xl shadow-2xl border border-white/50 dark:border-gray-700/50">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-green-500 rounded-full animate-ping opacity-75">
                                        </div>
                                        <div class="w-3 h-3 bg-green-500 rounded-full relative"></div>
                                    </div>
                                    <div>
                                        <div class="text-sm font-black text-gray-900 dark:text-white">500+ Projects
                                        </div>
                                        <div class="text-xs text-gray-600 dark:text-gray-400">Trusted by clients</div>
                                    </div>
                                    <svg class="w-8 h-8 text-teal-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>

                            <div
                                class="absolute top-6 right-6 w-16 h-16 bg-gradient-to-br from-teal-500/20 to-cyan-500/20 dark:from-teal-400/10 dark:to-cyan-400/10 rounded-full blur-xl z-20">
                            </div>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>
</section>
