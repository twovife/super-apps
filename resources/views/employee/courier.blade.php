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

    <x-body-area>
        <div class="flex justify-start">
            <x-body-st>Filters</x-body-st>
        </div>
    </x-body-area>


    <x-body-area>
        <x-body-st>Existing Employee</x-body-st>
        <x-body-content>

            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Id
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Nama
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Jabatan
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Divisi
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Kendaraan
                            </th>
                            <th scope="col" class="py-3 px-6">
                                HUB
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($couriers as $courier)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $courier->id }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $courier->nama }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $courier->jabatan }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $courier->divisi }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ ($courier->kurir->kendaraan == 'kmtr' ? 'Motor' : $courier->kurir->kendaraan == 'kmbl') ? 'Mobil' : 'Office' }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $courier->kurir->hub }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="px-6 py-2">
                    {{ $couriers->links() }}
                </div>
            </div>
        </x-body-content>
    </x-body-area>


</x-app-layout>
