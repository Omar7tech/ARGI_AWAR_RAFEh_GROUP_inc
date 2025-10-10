<section class="py-10 bg-gray-50 dark:bg-gray-950 font-inter min-h-screen">
    <div class="container mx-auto px-4 md:px-20">

        @if ($service->getFirstMediaUrl())
            <div class="hidden lg:grid lg:grid-cols-12 lg:gap-8">

                <div class="lg:col-span-5 flex flex-col gap-6 sticky top-25 self-start">

                    <div class="relative rounded-md overflow-hidden shadow-lg aspect-w-16 aspect-h-12 border border-gray-100 dark:border-gray-800">
                         <img
                            src="{{ $service->getFirstMediaUrl() }}"
                            alt="{{ $service->name ?: 'Service Image' }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                            loading="lazy"
                        >
                    </div>

                    @if ($otherServices->isNotEmpty())
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-5 border border-gray-200 dark:border-gray-700">
                            <div class="flex items-center justify-between mb-3 pb-2 border-b border-gray-200 dark:border-gray-700">
                                <h2 class="text-lg font-bold text-gray-900 dark:text-white">
                                    More Services
                                </h2>
                                <a href="{{ route('services') }}"
                                   wire:navigate
                                   class="text-xs font-semibold text-cyan-600 dark:text-cyan-400 hover:text-cyan-700 dark:hover:text-cyan-300 transition-colors flex items-center gap-1">
                                    View All
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="min-h-32 overflow-y-auto space-y-2 pr-2">
                                @foreach ($otherServices as $otherService)
                                    <a href="{{ route('service.show', $otherService) }}"
                                       wire:navigate
                                       class="flex items-center justify-between p-3 rounded-lg hover:bg-cyan-50 dark:hover:bg-gray-700 transition duration-150 group border border-transparent hover:border-cyan-200 dark:hover:border-cyan-800">
                                        <span class="text-sm font-medium text-gray-900 dark:text-white group-hover:text-cyan-600 dark:group-hover:text-cyan-400 transition-colors">
                                            {{ $otherService->name }}
                                        </span>
                                        <svg class="w-4 h-4 text-gray-400 dark:text-gray-500 group-hover:text-cyan-600 dark:group-hover:text-cyan-400 group-hover:translate-x-1 transition-all flex-shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-5 border border-gray-200 dark:border-gray-700">
                        <h2 class="text-lg font-bold text-gray-900 dark:text-white mb-4">
                            Connect with Our Team
                        </h2>

                        <div class="flex flex-col gap-3">
                            <a href="{{ route('contact') }}"
                               class="inline-flex items-center justify-center gap-2 px-4 py-3 bg-gradient-to-r from-cyan-600 to-teal-600 text-white text-base font-bold rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                Contact Us
                            </a>
                             <a href="{{ route('contact') }}"
                               class="inline-flex items-center justify-center gap-2 px-4 py-3 bg-transparent text-gray-900 dark:text-white border-2 border-gray-300 dark:border-gray-700 text-base font-semibold rounded-lg hover:border-teal-500 transition-all duration-300">
                                <svg class="w-5 h-5 text-teal-600 dark:text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                Go to Contact Page
                            </a>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 pt-0">
                    <div class="bg-white dark:bg-gray-800/80 rounded-xl shadow-md p-8 border border-gray-200 dark:border-gray-700">

                        <div class="mb-6 pb-4 border-b border-gray-200 dark:border-gray-700">
                             <span class="inline-block mb-1 text-xs font-semibold tracking-widest uppercase text-gray-600 dark:text-gray-400 bg-gray-200 dark:bg-gray-700/50 px-2 py-0.5 rounded-full">
                                Service
                            </span>
                            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white leading-tight">
                                {{ $service->name }}
                            </h1>
                        </div>

                        @if ($service->description)
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">
                                Details
                            </h3>
                            <article class="prose max-w-none dark:prose-invert prose-base
                                            prose-headings:text-cyan-600 prose-headings:dark:text-cyan-400
                                            prose-blockquote:border-teal-500 prose-blockquote:bg-teal-50 prose-blockquote:dark:bg-gray-800/60
                                            prose-a:text-teal-600 prose-a:dark:text-teal-400">
                                {!! $service->description !!}
                            </article>
                        @endif
                    </div>
                </div>
            </div>
        @endif

        @if (!$service->getFirstMediaUrl() || (isset($service) && $service->getFirstMediaUrl()))
            <div class="lg:hidden space-y-6">

                <div class="max-w-4xl mx-auto text-center p-5 rounded-xl bg-white dark:bg-gray-800 shadow-md border border-gray-200 dark:border-gray-700">
                    <span class="inline-block mb-1 text-xs font-semibold tracking-widest uppercase text-gray-600 dark:text-gray-400 bg-gray-200 dark:bg-gray-700/50 px-2 py-0.5 rounded-full">
                        Service
                    </span>
                    <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white leading-tight">
                        {{ $service->name }}
                    </h1>
                </div>

                @if ($service->getFirstMediaUrl())
                    <div class="relative rounded-xl overflow-hidden shadow-xl border border-gray-200 dark:border-gray-700">
                        <img
                            src="{{ $service->getFirstMediaUrl() }}"
                            alt="{{ $service->name ?: 'Service Image' }}"
                            class="w-full h-auto max-h-80 object-cover"
                            loading="lazy"
                        >
                    </div>
                @endif

                @if ($service->description)
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 border border-gray-200 dark:border-gray-700">
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-4 border-b pb-2 border-gray-200 dark:border-gray-700">
                            Details
                        </h2>

                        <article class="prose max-w-none dark:prose-invert prose-sm
                                         prose-headings:text-cyan-600 prose-headings:dark:text-cyan-400
                                         prose-blockquote:border-teal-500 prose-blockquote:bg-teal-50 prose-blockquote:dark:bg-gray-800/60
                                         prose-a:text-teal-600 prose-a:dark:text-teal-400">
                            {!! $service->description !!}
                        </article>
                    </div>
                @endif

                @if ($otherServices->isNotEmpty())
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-5 border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between mb-3 pb-2 border-b border-gray-200 dark:border-gray-700">
                            <h2 class="text-lg font-bold text-gray-900 dark:text-white">
                                More Services
                            </h2>
                            <a href="{{ route('services') }}"
                               wire:navigate
                               class="text-xs font-semibold text-cyan-600 dark:text-cyan-400 hover:text-cyan-700 dark:hover:text-cyan-300 transition-colors flex items-center gap-1">
                                View All
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                        <div class="space-y-2">
                            @foreach ($otherServices as $otherService)
                                <a href="{{ route('service.show', $otherService) }}"
                                   wire:navigate
                                   class="flex items-center justify-between p-3 rounded-lg hover:bg-cyan-50 dark:hover:bg-gray-700 transition duration-150 group border border-transparent hover:border-cyan-200 dark:hover:border-cyan-800">
                                    <span class="text-sm font-medium text-gray-900 dark:text-white group-hover:text-cyan-600 dark:group-hover:text-cyan-400 transition-colors">
                                        {{ $otherService->name }}
                                    </span>
                                    <svg class="w-4 h-4 text-gray-400 dark:text-gray-500 group-hover:text-cyan-600 dark:group-hover:text-cyan-400 group-hover:translate-x-1 transition-all flex-shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div class="flex flex-col gap-3">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-cyan-600 to-teal-600 text-white text-base font-bold rounded-lg shadow-md">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        Contact Us
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white dark:bg-gray-800 text-gray-900 dark:text-white border-2 border-gray-300 dark:border-gray-600 text-base font-semibold rounded-lg hover:border-cyan-500 transition-all duration-300">
                        <svg class="w-5 h-5 text-teal-600 dark:text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        Go to Contact Page
                    </a>
                </div>
            </div>
        @endif

    </div>
</section>
