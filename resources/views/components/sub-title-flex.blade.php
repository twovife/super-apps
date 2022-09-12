@props(['title' => 'Defauld'])

<div class="flex justify-start">
    <x-body-st>{{ $title }}</x-body-st>
    <div class="ml-auto flex gap-2">
        {{ $slot }}
    </div>
</div>
