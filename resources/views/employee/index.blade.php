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
            <div class="ml-auto flex gap-1">
                <form action="{{ route('emp.employee.index') }}" method="get">
                    @csrf
                    <input type="hidden" name="_update_show" value="1">
                    <x-button-action type="submit" :btntype="'primary'">
                        <x-slot name="icons">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                            </path>
                        </x-slot>
                        {{ __('Load Update') }}
                    </x-button-action>
                </form>
                <x-button-link type="button" :href="route('emp.employee.importNew')" :btntype="'primary'">
                    <x-slot name="icons">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                        </path>
                    </x-slot>
                    {{ __('Update Data') }}
                </x-button-link>
            </div>
        </div>
        <x-body-content>

        </x-body-content>
    </x-body-area>

    @if ($new_emps)
        <x-body-area>
            <x-body-st>New Employee</x-body-st>
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
                                    Unit
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($new_emps as $new)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $new->id }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $new->nama }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $new->jabatan }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $new->divisi }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $new->unit }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </x-body-content>
        </x-body-area>
    @endif

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
                                Unit
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $employee->id }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $employee->nama }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $employee->jabatan }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $employee->divisi }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $employee->unit }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="px-6 py-2">
                    {{ $employees->links() }}
                </div>
            </div>
        </x-body-content>
    </x-body-area>


</x-app-layout>
