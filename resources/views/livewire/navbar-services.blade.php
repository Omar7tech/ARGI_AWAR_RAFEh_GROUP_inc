@if ($services->isNotEmpty())
    <div
        class="md:hidden md:group-hover:block md:absolute relative md:left-0 mt-2 md:mt-0 w-full md:w-100 bg-white rounded-lg shadow-xl border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <ul class="py-2 text-sm">
            @foreach ($services as $service)
                <li>
                    <a wire:navigate href="{{ route('service.show', $service) }}" wire:current="true"
                        class="block px-4 py-2.5 transition-colors text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white
data-[current]:text-cyan-700 data-[current]:bg-cyan-50 md:data-[current]:bg-transparent md:data-[current]:text-cyan-700
dark:data-[current]:text-cyan-400 dark:data-[current]:bg-cyan-900/20 md:dark:data-[current]:bg-transparent">
                        {{ $service->name }}
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="border-t border-gray-200 dark:border-gray-700 py-2">
            <a href="#"
                class="block px-4 py-2.5 text-cyan-600 hover:bg-cyan-50 dark:text-cyan-400 dark:hover:bg-cyan-900/20 transition-colors font-medium">
                Call Us →
            </a>
        </div>
    </div>
@endif
