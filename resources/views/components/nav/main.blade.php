<nav
    class="sticky top-0 z-50 bg-white{{-- /95 --}} border-b border-gray-200 dark:bg-gray-900{{-- /95 --}} dark:border-gray-700 ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('icons/logo-cropped-nobg.PNG') }}" class="h-12" alt="Flowbite Logo" />
            {{--             <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>--}} </a>

        <div class="flex md:order-2 items-center space-x-3 md:space-x-0 rtl:space-x-reverse">
            <x-nav.button-theme-toggle />
            <x-nav.button-menu />
        </div>

        <x-nav.links />
    </div>
</nav>
