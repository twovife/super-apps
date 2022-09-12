@props(['active'])

@php
$classes = $active === true ? 'flex item-center p-2 gap-2 rounded-tl-md rounded-bl-xl font-medium bg-indigo-500 dark:bg-indigo-600 text-white w-full' : 'flex item-center p-2 gap-2 rounded-tl-md rounded-bl-xl font-medium hover:bg-indigo-100 dark:hover:bg-gray-700 w-full';
@endphp

<li>
    <a type="button" {{ $attributes->merge(['class' => $classes]) }}>
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
            </path>
        </svg>
        <span>{{ $slot }}</span>
    </a>
</li>
