<section class="py-16 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800 font-inter min-h-screen transition-colors duration-300">
    <div class="container mx-auto px-4 max-w-7xl">

        <!-- COMPACT INTRODUCTORY SECTION -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <div class="inline-block mb-3">
                <span class="px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-600 dark:text-cyan-400 rounded-full text-xs font-semibold tracking-wide uppercase">
                    Portfolio
                </span>
            </div>

            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-3 leading-tight">
                Showcasing the Structural Excellence of
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-600 via-teal-600 to-blue-600 dark:from-cyan-400 dark:via-teal-400 dark:to-blue-400 animate-gradient">
                    Awar Rafeh Group
                </span>
            </h1>

            <p class="text-sm text-gray-600 dark:text-gray-400">
                Explore our successful projects across diverse sectors
            </p>
        </div>

        @if ($ourWorks->isNotEmpty())
            <div class="grid gap-6 grid-cols-1 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($ourWorks as $index => $work)
                    @php
                        $imageUrl = $work->getFirstMediaUrl() ?: asset('icons/placeholder.png');
                        $hasText = filled($work->title) || filled($work->description);
                    @endphp

                    <div>
                        <div class="relative  rounded-2xl overflow-hidden shadow-xl h-40 md:h-80 bg-white dark:bg-gray-800">

                            <!-- Image -->
                            <div class="absolute inset-0">
                                <img src="{{ $imageUrl }}"
                                     alt="{{ $work->title ?: 'Our Work' }}"
                                     class="w-full h-full object-cover" loading="lazy">
                            </div>

                            <!-- Content overlay -->
                            @if ($hasText)
                                <div class="absolute inset-0 flex flex-col justify-end p-4 md:p-6 z-10">
                                    @if ($work->title)
                                        <h3 class="text-sm md:text-base font-semibold text-white mb-2 line-clamp-2 drop-shadow-lg">
                                            {{ $work->title }}
                                        </h3>
                                    @endif

                                    @if ($work->description)
                                        <button
                                            data-modal-target="work-modal-{{ $work->id }}"
                                            data-modal-toggle="work-modal-{{ $work->id }}"
                                            type="button"
                                            class="cursor-pointer inline-flex items-center gap-1 md:gap-2 px-2 md:px-4 py-1.5 md:py-2 bg-cyan-500 text-white text-[10px] md:text-xs font-medium rounded-lg shadow-lg w-fit">
                                            <svg class="w-3 h-3 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            View Details
                                        </button>
                                    @endif
                                </div>
                            @endif

                        </div>
                    </div>

                    <!-- Modal for this work -->
                    @if ($work->description)
                        <div id="work-modal-{{ $work->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-3xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-2xl shadow-2xl dark:bg-gray-800">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-700 border-gray-200">
                                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                            {{ $work->title }}
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="work-modal-{{ $work->id }}">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-5 space-y-4">
                                        <!-- Image -->
                                        <div class="relative h-64 md:h-80 bg-gray-200 dark:bg-gray-700 rounded-lg overflow-hidden">
                                            <img src="{{ $imageUrl }}"
                                                 alt="{{ $work->title }}"
                                                 class="w-full h-full object-cover">
                                        </div>

                                        <!-- Description -->
                                        <p class="text-base leading-relaxed text-gray-700 dark:text-gray-300 whitespace-pre-line">
                                            {{ $work->description }}
                                        </p>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex items-center p-5 border-t border-gray-200 rounded-b dark:border-gray-700">
                                        <button data-modal-hide="work-modal-{{ $work->id }}" type="button" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @else
            <!-- COMPACT EMPTY STATE -->
            <div class="flex flex-col items-center justify-center py-20 bg-white dark:bg-gray-800 rounded-2xl shadow-xl">
                <div class="relative mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-cyan-100 to-teal-100 dark:from-cyan-900/30 dark:to-teal-900/30 rounded-full flex items-center justify-center">
                        <svg class="w-10 h-10 text-cyan-600 dark:text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <div class="absolute -top-1 -right-1 w-5 h-5 bg-cyan-500 rounded-full animate-ping opacity-75"></div>
                </div>

                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                    Our Portfolio is Growing
                </h3>
                <p class="text-center text-sm text-gray-600 dark:text-gray-400 max-w-md mb-4">
                    We're currently updating our showcase. Check back soon!
                </p>

                <div class="flex gap-2">
                    <span class="w-2 h-2 bg-cyan-500 rounded-full animate-bounce" style="animation-delay: 0ms"></span>
                    <span class="w-2 h-2 bg-teal-500 rounded-full animate-bounce" style="animation-delay: 150ms"></span>
                    <span class="w-2 h-2 bg-blue-500 rounded-full animate-bounce" style="animation-delay: 300ms"></span>
                </div>
            </div>
        @endif
    </div>

</section>


