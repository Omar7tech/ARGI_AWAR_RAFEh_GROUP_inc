<footer class="bg-gray-50/50 dark:bg-gray-950 border-t border-gray-200/50 dark:border-gray-800 ">
    <div class="container mx-auto px-4 max-w-7xl pt-8 pb-4">
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8 md:gap-6 lg:gap-8 mb-8">
            <div class="col-span-2 lg:col-span-2 space-y-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('icons/logo-cropped-nobg.png') }}" alt="" class=" w-16" loading="lazy">
                    <span class="self-center text-2xl font-bold whitespace-nowrap text-gray-900 dark:text-white">Awar Rafeh Group</span>
                </a>
                <p class="text-sm text-gray-500 dark:text-gray-400 max-w-xs">
                    Building strong foundations with precision and dedication across the Washington Metropolitan Area.
                </p>
            </div>
            <div class="space-y-3">
                <h3 class="text-sm font-semibold text-gray-700 uppercase dark:text-gray-200 tracking-wider">Company</h3>
                <ul class="space-y-2 text-sm">
                    <li><a wire:navigate href="{{ route('welcome') }}" class="text-gray-500 dark:text-gray-400 hover:text-cyan-600 dark:hover:text-teal-400 transition-colors">Home</a></li>
                    <li><a wire:navigate href="{{ route('about') }}" class="text-gray-500 dark:text-gray-400 hover:text-cyan-600 dark:hover:text-teal-400 transition-colors">About Us</a></li>
                    <li><a wire:navigate href="{{ route('our-work') }}" class="text-gray-500 dark:text-gray-400 hover:text-cyan-600 dark:hover:text-teal-400 transition-colors">Our Work</a></li>
                    <li><a wire:navigate href="{{ route('services') }}" class="text-gray-500 dark:text-gray-400 hover:text-cyan-600 dark:hover:text-teal-400 transition-colors">Services</a></li>
                </ul>
            </div>
            <div class="space-y-3">
                <h3 class="text-sm font-semibold text-gray-700 uppercase dark:text-gray-200 tracking-wider">Resources</h3>
                <ul class="space-y-2 text-sm">
                    <li><a wire:navigate href="{{ route('privacy-policy') }}" class="text-gray-500 dark:text-gray-400 hover:text-cyan-600 dark:hover:text-teal-400 transition-colors">Privacy Policy</a></li>
                    <li><a wire:navigate href="{{ route('terms-and-conditions') }}" class="text-gray-500 dark:text-gray-400 hover:text-cyan-600 dark:hover:text-teal-400 transition-colors">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="space-y-3 col-span-2 md:col-span-1">
                <h3 class="text-sm font-semibold text-gray-700 uppercase dark:text-gray-200 tracking-wider">Contact</h3>
                <ul class="space-y-2 text-sm">
                    <li><a wire:navigate href="{{ route('contact') }}" class="text-gray-500 dark:text-gray-400 hover:text-cyan-600 dark:hover:text-teal-400 transition-colors">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <hr class="my-6 border-gray-200 dark:border-gray-800" />
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between text-center sm:text-left space-y-3 sm:space-y-0">
            <span class="text-sm text-gray-500 dark:text-gray-400">
                © 2024 <a href="#" class="hover:underline font-medium">Awar Group Companies</a>. All Rights Reserved.
            </span>
            <div class="text-xs text-gray-400 dark:text-gray-600 space-y-1">
                <span class="inline-block sm:block">Developed by <span class="font-semibold text-gray-600 dark:text-gray-500">Omar Abi Farraj</span></span>
                <span class="inline-block sm:block">Phone: <a href="tel:+96171387946" class="hover:text-cyan-600 dark:hover:text-teal-400 transition-colors">+961 71 387 946</a></span>
            </div>
        </div>

    </div>
</footer>
