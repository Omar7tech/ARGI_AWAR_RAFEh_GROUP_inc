<section class="py-12 md:py-16 bg-white dark:bg-gray-950 font-inter min-h-screen">
    <div class="container mx-auto px-4 max-w-7xl">

        @if (!$service->getFirstMediaUrl())
            <div class="max-w-4xl mx-auto text-center mb-12 p-6 rounded-2xl bg-gray-50 dark:bg-gray-900 shadow-lg">
                <span class="inline-block mb-3 text-sm font-semibold tracking-widest uppercase text-teal-600 dark:text-teal-400 bg-teal-50 dark:bg-teal-900/30 px-3 py-1 rounded-full">
                    Professional Service
                </span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white mb-2 leading-tight">
                    {{ $service->name }}
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    Comprehensive details on our professional construction service
                </p>
            </div>
        @endif

        @if ($service->getFirstMediaUrl())
            <div class="hidden lg:grid lg:grid-cols-10 lg:gap-8">

                <div class="lg:col-span-4 flex flex-col gap-6 sticky top-8 self-start">

                    <div class="relative rounded-3xl overflow-hidden shadow-2xl aspect-w-16 aspect-h-12">
                         <img
                            src="{{ $service->getFirstMediaUrl() }}"
                            alt="{{ $service->name ?: 'Service Image' }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                            loading="lazy"
                        >
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-800 rounded-3xl shadow-xl p-6 border border-gray-100 dark:border-gray-700">
                        <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white leading-tight mb-2">
                            {{ $service->name }}
                        </h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-5 border-b pb-4 border-gray-200 dark:border-gray-700">
                            Professional construction and engineering service.
                        </p>

                        <div class="flex flex-col gap-3">
                            <a href="{{ route('contact') }}"
                               class="inline-flex items-center justify-center gap-2 px-4 py-3 bg-gradient-to-r from-cyan-600 to-teal-600 text-white text-sm font-bold rounded-xl shadow-md shadow-cyan-500/30 hover:shadow-lg transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                Request a Quote
                            </a>

                            <a href="tel:7572871737"
                               class="inline-flex items-center justify-center gap-2 px-4 py-3 bg-white dark:bg-gray-900 text-gray-900 dark:text-white border-2 border-gray-300 dark:border-gray-700 text-sm font-semibold rounded-xl hover:border-teal-500 transition-all duration-300">
                                <svg class="w-5 h-5 text-teal-600 dark:text-teal-400" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.772-1.548a1 1 0 011.06-.54l4.435.74A1 1 0 0118 16.847V17a1 1 0 01-1 1h-2C7.22 18 2 12.78 2 6V3z"/></svg>
                                Call: (757) 287-1737
                            </a>
                        </div>
                    </div>
                </div>

                @if ($service->description)
                    <div class="lg:col-span-6 pt-0">
                        <div class="bg-white dark:bg-gray-900/50 rounded-3xl shadow-xl p-8 border border-gray-100 dark:border-gray-800">
                            <h3 class="text-2xl font-extrabold text-gray-900 dark:text-white mb-4 border-b pb-2 border-cyan-500/50">
                                Detailed Overview
                            </h3>

                            <article class="prose max-w-none dark:prose-invert prose-base
                                            prose-headings:text-cyan-600 prose-headings:dark:text-cyan-400
                                            prose-blockquote:border-teal-500 prose-blockquote:bg-teal-50 prose-blockquote:dark:bg-gray-800/60
                                            prose-a:text-teal-600 prose-a:dark:text-teal-400">
                                {!! $service->description !!}
                            </article>
                        </div>
                    </div>
                @endif
            </div>

            <div class="lg:hidden space-y-6">
                <div class="text-center">
                    <span class="inline-block mb-2 text-xs font-semibold tracking-widest uppercase text-teal-600 dark:text-teal-400 bg-teal-50 dark:bg-teal-900/30 px-2 py-1 rounded-full">
                        Service
                    </span>
                    <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white leading-tight">
                        {{ $service->name }}
                    </h1>
                </div>

                <div class="relative rounded-2xl overflow-hidden shadow-xl">
                    <img
                        src="{{ $service->getFirstMediaUrl() }}"
                        alt="{{ $service->name ?: 'Service Image' }}"
                        class="w-full h-auto max-h-80 object-cover"
                        loading="lazy"
                    >
                </div>

                <div class="flex flex-col gap-3">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-cyan-600 to-teal-600 text-white text-base font-bold rounded-lg shadow-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        Request This Service
                    </a>
                    <a href="tel:7572871737"
                       class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white dark:bg-gray-800 text-gray-900 dark:text-white border-2 border-gray-300 dark:border-gray-600 text-base font-semibold rounded-lg hover:border-cyan-500 transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.772-1.548a1 1 0 011.06-.54l4.435.74A1 1 0 0118 16.847V17a1 1 0 01-1 1h-2C7.22 18 2 12.78 2 6V3z"/></svg>
                        Call: (757) 287-1737
                    </a>
                </div>

                @if ($service->description)
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6 border border-gray-200 dark:border-gray-700">
                        <div class="mb-4 pb-3 border-b border-gray-200 dark:border-gray-700">
                            <h2 class="text-xl font-bold text-gray-900 dark:text-white flex items-center gap-3">
                                <div class="w-1 h-5 bg-gradient-to-b from-cyan-500 to-teal-500 rounded-full"></div>
                                Service Overview
                            </h2>
                        </div>

                        <article class="prose max-w-none dark:prose-invert prose-sm
                                         prose-headings:text-cyan-600 prose-headings:dark:text-cyan-400
                                         prose-blockquote:border-teal-500 prose-blockquote:bg-teal-50 prose-blockquote:dark:bg-gray-800/60
                                         prose-a:text-teal-600 prose-a:dark:text-teal-400">
                            {!! $service->description !!}
                        </article>
                    </div>
                @endif
            </div>

        @else
            <div class="max-w-4xl mx-auto">
                @if ($service->description)
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 md:p-10 border border-gray-200 dark:border-gray-700 mb-8">
                        <div class="mb-6 pb-4 border-b border-gray-200 dark:border-gray-700">
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white flex items-center gap-3">
                                <div class="w-1 h-8 bg-gradient-to-b from-cyan-500 to-teal-500 rounded-full"></div>
                                Service Overview
                            </h2>
                        </div>

                        <article class="prose max-w-none dark:prose-invert prose-lg
                                         prose-headings:text-cyan-600 prose-headings:dark:text-cyan-400
                                         prose-blockquote:border-teal-500 prose-blockquote:bg-teal-50 prose-blockquote:dark:bg-gray-800/60
                                         prose-a:text-teal-600 prose-a:dark:text-teal-400">
                            {!! $service->description !!}
                        </article>
                    </div>
                @endif

                <div class="text-center">
                    <div class="inline-flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact') }}"
                           class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-cyan-600 to-teal-600 text-white text-base font-bold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            Request This Service
                        </a>

                        <a href="tel:7572871737"
                           class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white dark:bg-gray-800 text-gray-900 dark:text-white border-2 border-gray-300 dark:border-gray-600 text-base font-semibold rounded-lg hover:border-cyan-500 transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.772-1.548a1 1 0 011.06-.54l4.435.74A1 1 0 0118 16.847V17a1 1 0 01-1 1h-2C7.22 18 2 12.78 2 6V3z"/></svg>
                            Call Us: (757) 287-1737
                        </a>
                    </div>
                </div>
            </div>
        @endif

    </div>
</section>
