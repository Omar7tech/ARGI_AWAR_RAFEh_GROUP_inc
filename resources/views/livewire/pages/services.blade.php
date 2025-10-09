<section class="py-16 bg-white dark:bg-gray-950 font-sans min-h-screen transition-colors duration-300">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="text-center max-w-4xl mx-auto mb-16">
            <span
                class="inline-block mb-4 text-sm font-semibold tracking-widest uppercase text-teal-600 dark:text-teal-400 bg-teal-50 dark:bg-teal-900/30 px-3 py-1 rounded-full">
                Our Expertise
            </span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white mb-4 leading-tight">
                Professional Construction &
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-teal-500 dark:from-blue-400 dark:to-teal-300">
                    Engineering Services
                </span>
            </h1>
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Building the future, one project at a time. Explore our comprehensive suite of solutions tailored for excellence and durability.
            </p>
        </div>

        @if ($services->isNotEmpty())
            <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($services as $service)
                    @php
                        $imageUrl = $service->getFirstMediaUrl() ?: asset('icons/placeholder.png');
                    @endphp

                    <div class="group relative bg-white dark:bg-gray-900 rounded-3xl shadow-xl overflow-hidden transform hover:scale-[1.02] transition-all duration-500 ease-in-out hover:shadow-2xl">
                        <div class="relative h-56 overflow-hidden">
                            <img src="{{ $imageUrl }}" alt="{{ $service->name ?: 'Service Image' }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
                        </div>

                        <div class="p-6 pt-4">
                            @if ($service->name)
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 line-clamp-2">
                                    {{ $service->name }}
                                </h3>
                            @endif

                            
                            <a href="{{ route('service.show' , $service)  }}"
                                class="mt-4 w-full text-center inline-flex items-center justify-center gap-2 px-6 py-2.5 bg-blue-600 text-white text-sm font-semibold rounded-xl shadow-lg hover:bg-blue-700 transition duration-300 transform group-hover:translate-x-0 group-hover:opacity-100">
                                
                                <span>View Service</span>
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
            </div>
        @else
            <div
                class="flex flex-col items-center justify-center py-24 bg-gray-50 dark:bg-gray-800 border border-dashed border-gray-300 dark:border-gray-700 rounded-2xl shadow-inner">
                <div class="relative mb-6">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-blue-100 to-teal-100 dark:from-blue-900/50 dark:to-teal-900/50 rounded-full flex items-center justify-center shadow-lg">
                        <svg class="w-12 h-12 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">
                    Our Full Services Portfolio is Being Built 🚧
                </h3>
                <p class="text-center text-md text-gray-600 dark:text-gray-400 max-w-lg mb-6">
                    We're finalizing the details of our comprehensive service offerings to ensure the highest quality. Please check back soon for our full list of professional solutions.
                </p>

                <div class="flex gap-2">
                    <div class="w-3 h-3 bg-blue-500 rounded-full animate-pulse" style="animation-delay: 0ms"></div>
                    <div class="w-3 h-3 bg-teal-500 rounded-full animate-pulse" style="animation-delay: 150ms"></div>
                    <div class="w-3 h-3 bg-gray-500 rounded-full animate-pulse" style="animation-delay: 300ms"></div>
                </div>
            </div>
            @endif
    </div>
</section>