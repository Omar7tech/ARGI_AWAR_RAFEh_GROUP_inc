@props(['url' => '#', 'label' => 'Link'])

@php
    $isActive = request()->fullUrlIs($url) || request()->is(trim(parse_url($url, PHP_URL_PATH), '/'));
@endphp

<li>
    <a wire:navigate
       href="{{ $url }}"
       @if($isActive) wire:current @endif
       class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 dark:text-white md:dark:hover:bg-transparent {{ $isActive ? 'md:text-cyan-700 md:dark:text-cyan-500 bg-cyan-600 md:bg-transparent dark:bg-cyan-600 md:dark:bg-transparent' : 'md:hover:text-cyan-700 md:dark:hover:text-cyan-500 dark:hover:bg-gray-700 dark:hover:text-white' }} relative md:after:content-[''] md:after:absolute md:after:bottom-0 md:after:left-0 md:after:w-0 md:after:h-0.5 md:after:bg-cyan-700 md:dark:after:bg-cyan-500 md:after:transition-all md:after:duration-300 md:hover:after:w-full {{ $isActive ? 'md:after:w-full' : '' }}"
       @if($isActive) aria-current="page" @endif>
        {{ $label }}
    </a>
</li>
