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
        <x-sub-title-flex :title="'Filter'">
            <div class="flex">
                <x-button-link :href="route('register')" :btntype="'primary'">
                    {{ __('Regist New') }}
                </x-button-link>
            </div>
        </x-sub-title-flex>
        <x-body-content>

        </x-body-content>
    </x-body-area>


    <x-body-area>
        <x-body-st>Existing Employee</x-body-st>
        <x-body-content>
            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 capitalize  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                #
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Nama
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Divisi
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Username
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Assigment
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $nomor = 1;
                        @endphp
                        @foreach ($usernames as $username)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $nomor }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $username->employee->nama }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $username->employee->divisi }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $username->username }}
                                </td>
                                <td class="py-4 px-6">
                                    <a href="{{ route('user.user.assignment', $username->id) }}">a</a>
                                </td>
                            </tr>
                            @php
                                $nomor++;
                            @endphp
                        @endforeach

                    </tbody>
                </table>
                <div class="px-6 py-2">
                    {{ $usernames->links() }}
                </div>
            </div>
        </x-body-content>
    </x-body-area>


</x-app-layout>
