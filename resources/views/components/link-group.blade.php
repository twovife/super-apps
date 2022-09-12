@props(['title' => 'Empty'])

<div class="link-group">
    <div class="text-gray-700 dark:text-white text-sm italic mb-1">{{ $title }}</div>
    @isset($sideMenu)
        <div class="space-y-1 mb-2">
            {{ $sideMenu }}
        </div>
    @endisset
</div>
