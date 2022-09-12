@props(['active' => false])

@php
$classes = $active === true ? 'flex item-center p-2 gap-2 rounded-tl-md rounded-bl-xl font-medium bg-indigo-500 dark:bg-indigo-600 text-white w-full' : 'flex item-center p-2 gap-2 rounded-tl-md rounded-bl-xl font-medium hover:bg-indigo-100 dark:hover:bg-gray-700 w-full';
@endphp


<a role="button" {{ $attributes->merge(['class' => $classes]) }}>
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        {{ $icons }}
    </svg>
    <span>{{ $slot }}</span>
</a>
