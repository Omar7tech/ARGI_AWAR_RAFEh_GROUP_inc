<div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
    <ul
        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-200 rounded-lg space-y-2 md:space-y-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700">

        <x-nav.link url="{{ route('welcome') }}" label="Home" />

        <li class="relative group">
            <button type="button" onclick="this.nextElementSibling.classList.toggle('hidden')"
                class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-cyan-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-gray-700 md:dark:hover:bg-transparent transition-colors duration-200">
                Services
                <svg class="w-2.5 h-2.5 ms-2.5 transition-transform duration-200 md:group-hover:rotate-180"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            
                <livewire:navbar-services />
            

        </li>

        <x-nav.link url="{{ route('our-work') }}" label="Our Work" />
        <x-nav.link url="{{ route('about') }}" label="About" />
        <x-nav.link url="{{ route('contact') }}" label="Contact" />
    </ul>
</div>
