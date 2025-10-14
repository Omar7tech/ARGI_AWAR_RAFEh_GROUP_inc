<section class="py-12 md:py-16 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800 font-inter min-h-screen transition-colors duration-300">
    <div class="absolute inset-0 opacity-5 pointer-events-none">
        <div class="absolute inset-0"
            style="background-image: linear-gradient(rgba(6, 182, 212, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(6, 182, 212, 0.3) 1px, transparent 1px); background-size: 50px 50px;">
        </div>
    </div>
    <div class="relative container mx-auto px-4 max-w-3xl">
        <div class="text-center mb-10">
            <div class="inline-block mb-3">
                <span
                    class="px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-600 dark:text-cyan-400 rounded-full text-xs font-semibold tracking-wider uppercase">
                    Get In Touch
                </span>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white leading-tight mb-3">
                Contact
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-600 via-teal-600 to-blue-600 dark:from-cyan-400 dark:via-teal-400 dark:to-blue-400">
                    Awar Rafeh Group
                </span>
            </h1>

            <p class="text-sm text-gray-600 dark:text-gray-400 max-w-2xl mx-auto mb-6">
                We're here to help with your construction and engineering needs. Reach us directly below.
            </p>
            @if ($contactSettings->social_media && count($contactSettings->social_media) > 0)
                <div class="flex items-center justify-center gap-3 mt-6">
                    @foreach ($contactSettings->social_media as $s)
                        <a href="{{ $s['url'] }}" target="_blank" rel="noopener noreferrer"
                            class="group relative w-11 h-11 bg-white dark:bg-gray-800 rounded-full border-2 border-gray-200 dark:border-gray-700 hover:border-cyan-400 dark:hover:border-cyan-500 transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/25 hover:-translate-y-1 flex items-center justify-center overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110"
                                src="{{ $s['icon_url'] }}"
                                alt="{{ $s['platform'] ?? 'Social Media' }}">
                            <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-teal-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-full"></div>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="space-y-6">

            @if ($contactSettings->phone_numbers && count($contactSettings->phone_numbers) > 0)
                <div
                    class="bg-white dark:bg-gray-800 rounded-xl shadow-xl p-6 border border-gray-200 dark:border-gray-700">
                    <div class="flex items-center gap-3 mb-5 pb-4 border-b border-gray-200 dark:border-gray-700">
                        <div
                            class="w-10 h-10 rounded-lg bg-cyan-100 dark:bg-cyan-900/30 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-cyan-600 dark:text-cyan-400" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.772-1.548a1 1 0 011.06-.54l4.435.74A1 1 0 0118 16.847V17a1 1 0 01-1 1h-2C7.22 18 2 12.78 2 6V3z" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white">
                            Direct Lines
                        </h2>
                    </div>

                    <div class="space-y-3">
                        @foreach ($contactSettings->phone_numbers as $p)
                            <a href="tel:{{ $p['phone_number'] }}"
                                class="flex items-center gap-3 p-3 rounded-lg hover:bg-cyan-50 dark:hover:bg-gray-700 transition-all group">
                                <div class="flex-shrink-0">
                                    <p class="text-xs font-semibold text-gray-500 dark:text-gray-400 w-24 text-left">
                                        {{ $p['label'] }}
                                    </p>
                                </div>
                                <p
                                    class="text-base font-semibold text-gray-900 dark:text-white group-hover:text-cyan-600 dark:group-hover:text-cyan-400 transition-colors flex-1 text-center">
                                    {{ $p['phone_number'] }}
                                </p>
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-cyan-600 dark:group-hover:text-cyan-400 transition-all flex-shrink-0"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

            @if ($contactSettings->emails && count($contactSettings->emails) > 0)
                <div
                    class="bg-white dark:bg-gray-800 rounded-xl shadow-xl p-6 border border-gray-200 dark:border-gray-700">
                    <div class="flex items-center gap-3 mb-5 pb-4 border-b border-gray-200 dark:border-gray-700">
                        <div
                            class="w-10 h-10 rounded-lg bg-teal-100 dark:bg-teal-900/30 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-teal-600 dark:text-teal-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white">
                            Email
                        </h2>
                    </div>

                    <div class="space-y-3">
                        @foreach ($contactSettings->emails as $e)
                            <a href="mailto:{{ $e['email'] }}"
                                class="flex items-center gap-3 p-3 rounded-lg hover:bg-teal-50 dark:hover:bg-gray-700 transition-all group">
                                <div class="flex-shrink-0">
                                    <p class="text-xs font-semibold text-gray-500 dark:text-gray-400 w-24 text-left">
                                        {{ $e['label'] }}</p>
                                </div>
                                <p
                                    class="text-base font-semibold text-gray-900 dark:text-white group-hover:text-teal-600 dark:group-hover:text-teal-400 transition-colors flex-1 text-center truncate">
                                    {{ $e['email'] }}
                                </p>
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-teal-600 dark:group-hover:text-teal-400 transition-all flex-shrink-0"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

            @if ($contactSettings->business_hours)
                <div class="bg-gradient-to-br from-cyan-600 to-teal-600 rounded-xl shadow-xl p-6 text-white">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-lg bg-white/20 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold mb-2">Business Hours</h3>
                            <div class="text-sm text-white/90 leading-relaxed">
                                {!! nl2br(e($contactSettings->business_hours)) !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
