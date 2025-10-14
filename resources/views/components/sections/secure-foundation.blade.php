<section class="relative py-10 md:py-14 lg:py-20 transition-colors duration-300 bg-white dark:bg-gray-950 overflow-hidden">

    <!-- Ultra Modern Gradient Mesh Background -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <!-- Animated gradient blobs -->
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-br from-teal-300/30 via-cyan-300/20 to-blue-300/30 dark:from-teal-500/15 dark:via-cyan-500/10 dark:to-blue-500/15 rounded-full blur-3xl animate-blob"></div>
        <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-gradient-to-br from-cyan-300/30 via-blue-300/20 to-teal-300/30 dark:from-cyan-500/15 dark:via-blue-500/10 dark:to-teal-500/15 rounded-full blur-3xl animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-0 left-0 w-[550px] h-[550px] bg-gradient-to-br from-blue-300/30 via-teal-300/20 to-cyan-300/30 dark:from-blue-500/15 dark:via-teal-500/10 dark:to-cyan-500/15 rounded-full blur-3xl animate-blob animation-delay-4000"></div>

        <!-- Grid overlay -->
        <div class="absolute inset-0 opacity-[0.015] dark:opacity-[0.01]"
            style="background-image: linear-gradient(rgba(6, 182, 212, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(6, 182, 212, 0.3) 1px, transparent 1px); background-size: 40px 40px;">
        </div>
    </div>

    <style>
        @keyframes blob {
            0%, 100% { transform: translate(0, 0) scale(1); }
            25% { transform: translate(20px, -50px) scale(1.1); }
            50% { transform: translate(-20px, 20px) scale(0.9); }
            75% { transform: translate(50px, 50px) scale(1.05); }
        }
        .animate-blob {
            animation: blob 20s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>

    <div class="relative container mx-auto px-4 max-w-7xl">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">

            <!-- Content Section -->
            <div class="space-y-7 lg:pr-8">
                <!-- Glassmorphism Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/60 dark:bg-gray-800/60 backdrop-blur-xl border border-teal-200/50 dark:border-teal-700/50 text-teal-700 dark:text-teal-300 text-xs font-bold rounded-full shadow-lg shadow-teal-500/10">
                    <div class="relative">
                        <div class="w-2 h-2 bg-teal-500 rounded-full animate-ping absolute"></div>
                        <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                    </div>
                    Licensed Commercial Contractor
                    <svg class="w-3.5 h-3.5 text-teal-600 dark:text-teal-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>

                <!-- Modern Heading with Gradient Animation -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black leading-[1.1] tracking-tight">
                    <span class="block text-gray-900 dark:text-white">Secure Your</span>
                    <span class="block text-gray-900 dark:text-white">Foundation with</span>
                    <span class="relative inline-block mt-2">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 via-cyan-500 to-blue-600 dark:from-teal-400 dark:via-cyan-400 dark:to-blue-400 animate-gradient bg-300%">
                            Precision
                        </span>
                        <!-- Animated underline -->
                        <svg class="absolute -bottom-2 left-0 w-full" height="12" viewBox="0 0 200 12" fill="none">
                            <path d="M1 7C20 4 40 3 60 3.5C80 4 100 5.5 120 5C140 4.5 160 3 180 4C190 4.5 195 5.5 199 7"
                                stroke="url(#gradient-line)" stroke-width="3" stroke-linecap="round" class="animate-draw"/>
                            <defs>
                                <linearGradient id="gradient-line" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="currentColor" class="text-teal-500" stop-opacity="0.5" />
                                    <stop offset="50%" stop-color="currentColor" class="text-cyan-500" stop-opacity="0.8" />
                                    <stop offset="100%" stop-color="currentColor" class="text-blue-500" stop-opacity="0.5" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                </h1>

                <style>
                    @keyframes gradient {
                        0%, 100% { background-position: 0% 50%; }
                        50% { background-position: 100% 50%; }
                    }
                    .animate-gradient {
                        animation: gradient 8s ease infinite;
                    }
                    .bg-300\% {
                        background-size: 300% 300%;
                    }
                </style>

                <!-- Description -->
                <p class="text-base md:text-lg text-gray-600 dark:text-gray-400 leading-relaxed max-w-xl">
                    Enhancing properties across the Washington Metropolitan Area with unmatched expertise and dedication. Your trusted partner for foundation excellence.
                </p>

                <!-- Key Points with Modern Icons -->
                <div class="space-y-3 pt-2">
                    <div class="flex items-start gap-3 group">
                        <div class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-teal-100 to-cyan-100 dark:from-teal-900/40 dark:to-cyan-900/40 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-3.5 h-3.5 text-teal-600 dark:text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-sm md:text-base text-gray-700 dark:text-gray-300">
                            <span class="font-bold text-teal-600 dark:text-teal-400">Prompt and professional</span> service delivery with attention to every detail
                        </p>
                    </div>

                    <div class="flex items-start gap-3 group">
                        <div class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-cyan-100 to-blue-100 dark:from-cyan-900/40 dark:to-blue-900/40 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-3.5 h-3.5 text-cyan-600 dark:text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-sm md:text-base text-gray-700 dark:text-gray-300">
                            <span class="font-bold text-cyan-600 dark:text-cyan-400">Clear communication</span> and high-quality care—you're part of our community
                        </p>
                    </div>

                    <div class="flex items-start gap-3 group">
                        <div class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-blue-100 to-teal-100 dark:from-blue-900/40 dark:to-teal-900/40 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-3.5 h-3.5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-sm md:text-base text-gray-700 dark:text-gray-300">
                            <span class="font-bold text-blue-600 dark:text-blue-400">Licensed and insured</span> for your peace of mind and protection
                        </p>
                    </div>
                </div>

                <!-- Modern CTA Buttons -->
                <div class="flex flex-wrap gap-3 pt-4">
                    <a wire:navigate href="{{ route('contact') }}"
                        class="group relative inline-flex items-center gap-2 px-7 py-4 text-sm font-bold text-white bg-gradient-to-r from-teal-600 to-cyan-600 hover:from-teal-500 hover:to-cyan-500 rounded-xl shadow-lg hover:shadow-xl hover:shadow-teal-500/40 transform hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                        <!-- Shine effect -->
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000"></div>
                        <svg class="w-5 h-5 relative group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <span class="relative">Start Your Project</span>
                        <svg class="w-4 h-4 relative group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>

                    <a wire:navigate href="{{ route('services') }}"
                        class="group inline-flex items-center gap-2 px-7 py-4 text-sm font-bold text-teal-700 dark:text-teal-300 bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl hover:bg-white dark:hover:bg-gray-800 border border-teal-600/30 dark:border-teal-500/30 hover:border-teal-600 dark:hover:border-teal-400 rounded-xl transition-all duration-300 shadow-sm hover:shadow-lg">
                        Explore Services
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Ultra Modern Image Section with 3D Effect -->
            <div class="relative lg:pl-8">
                <!-- 3D Background layers -->
                <div class="absolute inset-0 bg-gradient-to-br from-teal-400/20 via-cyan-400/20 to-blue-400/20 dark:from-teal-500/10 dark:via-cyan-500/10 dark:to-blue-500/10 rounded-3xl blur-3xl transform rotate-3"></div>
                <div class="absolute inset-0 bg-gradient-to-br from-cyan-400/20 via-blue-400/20 to-teal-400/20 dark:from-cyan-500/10 dark:via-blue-500/10 dark:to-teal-500/10 rounded-3xl blur-3xl transform -rotate-3"></div>

                <!-- Main image container with glassmorphism -->
                <div class="relative bg-white/70 dark:bg-gray-800/70 backdrop-blur-2xl rounded-3xl p-6 md:p-8 border border-white/50 dark:border-gray-700/50 shadow-2xl group transform hover:scale-[1.02] transition-all duration-500">
                    <img class="w-full h-auto relative z-10"
                        src="{{ asset('icons/workers-nobg.png') }}"
                        alt="Foundation construction" />

                    <!-- Floating badge with animation -->
                    <div class="absolute -bottom-4 -right-4 bg-gradient-to-r from-teal-600 to-cyan-600 text-white px-5 py-3 rounded-2xl shadow-2xl border-4 border-white dark:border-gray-950 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-500">
                        <div class="flex items-center gap-2">
                            <div class="relative">
                                <div class="absolute inset-0 bg-white rounded-full animate-ping opacity-75"></div>
                                <svg class="w-5 h-5 relative" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="text-sm font-black">Certified</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
