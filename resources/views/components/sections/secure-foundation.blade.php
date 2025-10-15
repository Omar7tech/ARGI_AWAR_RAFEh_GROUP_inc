<section class="relative py-10 md:py-14 lg:py-18 bg-gradient-to-br from-white via-teal-50/20 to-white dark:from-gray-950 dark:via-teal-950/10 dark:to-gray-950 overflow-hidden">

    <!-- Simple Background -->
    <div class="absolute inset-0 pointer-events-none opacity-[0.015] dark:opacity-[0.01]"
        style="background-image: radial-gradient(circle, rgba(6, 182, 212, 0.15) 1px, transparent 1px); background-size: 30px 30px;">
    </div>

    <div class="relative container mx-auto px-4 max-w-7xl">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">

            <!-- Content Section -->
            <div class="space-y-6 lg:pr-8">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-teal-50 dark:bg-teal-900/20 border border-teal-200 dark:border-teal-700/50 text-teal-700 dark:text-teal-300 text-xs font-bold rounded-full">
                    <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                    Licensed Commercial Contractor
                    <svg class="w-3.5 h-3.5 text-teal-600 dark:text-teal-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>

                <!-- Heading -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black leading-tight text-gray-900 dark:text-white">
                    Secure Your Foundation with
                    <span class="block mt-1 text-transparent bg-clip-text bg-gradient-to-r from-teal-600 via-cyan-500 to-blue-600 dark:from-teal-400 dark:via-cyan-400 dark:to-blue-400">
                        Precision
                    </span>
                </h1>

                <!-- Description -->
                <p class="text-base md:text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                    Enhancing properties across the Washington Metropolitan Area with unmatched expertise and dedication.
                </p>

                <!-- Key Points -->
                <div class="space-y-3">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-teal-100 dark:bg-teal-900/40 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-teal-600 dark:text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-sm md:text-base text-gray-700 dark:text-gray-300">
                            <span class="font-bold text-teal-600 dark:text-teal-400">Prompt and professional</span> service delivery
                        </p>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-cyan-100 dark:bg-cyan-900/40 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-cyan-600 dark:text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-sm md:text-base text-gray-700 dark:text-gray-300">
                            <span class="font-bold text-cyan-600 dark:text-cyan-400">Clear communication</span> and high-quality care
                        </p>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-blue-100 dark:bg-blue-900/40 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-sm md:text-base text-gray-700 dark:text-gray-300">
                            <span class="font-bold text-blue-600 dark:text-blue-400">Licensed and insured</span> for your peace of mind
                        </p>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-3 pt-2">
                    <a wire:navigate href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2 px-6 py-3 text-sm font-bold text-white bg-gradient-to-r from-teal-600 to-cyan-600 hover:from-teal-700 hover:to-cyan-700 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        Start Your Project
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>

                    <a wire:navigate href="{{ route('services') }}"
                        class="inline-flex items-center gap-2 px-6 py-3 text-sm font-bold text-teal-700 dark:text-teal-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 border border-teal-600/40 dark:border-teal-500/40 rounded-xl transition-all duration-300">
                        Explore Services
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Image Section -->
            <div class="relative lg:pl-8">
                <div class="relative bg-white dark:bg-gray-800 rounded-3xl p-6 md:p-8 border border-gray-200 dark:border-gray-700 shadow-2xl">
                    <img class="w-full h-auto"
                        src="{{ asset('images/values.jpg') }}"
                        alt="Foundation construction" />

                    <!-- Badge -->
                    <div class="absolute -bottom-3 -right-3 bg-gradient-to-r from-teal-600 to-cyan-600 text-white px-4 py-2 rounded-xl shadow-lg border-4 border-white dark:border-gray-950">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm font-bold">Certified</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
