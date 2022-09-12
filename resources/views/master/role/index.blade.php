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
        <x-sub-title-flex :title="'Filters'"></x-sub-title-flex>
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
                                Role Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Permission
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $nomor = 1;
                        @endphp
                        @foreach ($roles as $role)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $nomor }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $role->name }}
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex gap-1">
                                        @foreach ($role->permissions as $permission)
                                            <span
                                                class="rounded-lg bg-gray-700 px-2 py-1 text-white">{{ $permission->name }}</span>
                                        @endforeach
                                    </div>
                                </td>
                            </tr>
                            @php
                                $nomor++;
                            @endphp
                        @endforeach

                    </tbody>
                </table>
                <div class="px-6 py-2">
                    {{ $roles->links() }}
                </div>
            </div>
        </x-body-content>
    </x-body-area>


    <div id="formStore" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <form action="{{ route('user.permission.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Form Input Permission
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="formStore">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">

                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <x-label for="name">Permission Name</x-label>
                                <x-input name="name" id="name" placeholder="Modulname Permission" required
                                    type="text"></x-input>
                            </div>
                        </div>

                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <x-button-action type="submit">
                            {{ __('Submit') }}
                        </x-button-action>
                        <x-button-action data-modal-toggle="formStore" type="button" :btntype="'secondary'">
                            {{ __('Cancel') }}
                        </x-button-action>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
