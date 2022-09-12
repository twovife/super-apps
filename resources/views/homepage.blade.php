<x-app-layout>
    <div class="py-4 flex justify-start items-center">
        <h1 class="text-3xl font-medium">Home Page</h1>
        <div class="ml-auto flex justify-center items-center gap-2">
            <x-button-link :href="route('homepage')" :btntype="'secondary'">
                <x-slot name="icons">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                    </path>
                </x-slot>
                {{ __('Back') }}
            </x-button-link>
        </div>
    </div>

    <x-body-area>
        <x-body-st>Welcome, Super Apps</x-body-st>
        <x-body-content>Jika anda bisa mengakses halaman ini, berarti anda bukan manusia</x-body-content>
    </x-body-area>
</x-app-layout>
