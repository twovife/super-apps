<x-app-layout>
    <div class="py-4 flex justify-start items-center">
        <h1 class="text-3xl font-medium">Master Employee</h1>
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


    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Product name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Color
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Category
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Price
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>



</x-app-layout>
