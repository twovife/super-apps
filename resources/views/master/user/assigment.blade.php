<x-app-layout>
    <div class="py-4 flex justify-start items-center">
        <h1 class="text-3xl font-medium">Master Relevation</h1>
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
        <x-sub-title-flex :title="'Filter'"></x-sub-title-flex>
        <x-body-content>

        </x-body-content>
    </x-body-area>


    <x-body-area>
        <x-body-st>Relevation</x-body-st>
        <x-body-content>
            <div class="grid gap-6 mb-6 lg:grid-cols-2">
                <div>
                    <label for="first_name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
                    <input readonly type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="John" value="{{ $users->username }}">
                </div>
                <div>
                    <label for="last_name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                    <input readonly type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Doe" value="{{ $users->employee->nama }}">
                </div>
                <div>
                    <label for="company"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Divisi</label>
                    <input readonly type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Flowbite" value="{{ $users->employee->divisi }}">
                </div>
                <div>
                    <label for="company"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">HUB</label>
                    <input readonly type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Flowbite" value="{{ $users->employee->hub ?? 'Cabang Utama' }}">
                </div>
                <div>
                    <label for="phone"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                    <input readonly type="tel" id="phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="jne.kdr@jne.co.id">
                </div>
            </div>
            <form action="{{ route('user.user.revelation', $users->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="grid lg:grid-cols-2">
                    <div>
                        <h1 class="text-xl font-semibold mb-3">
                            Roles
                        </h1>
                        <div class="grid grid-cols-2 lg:grid-cols-4">
                            @foreach ($roles as $role)
                                <div class="flex items-center mb-4">
                                    <input id="{{ 'role' . $role->id }}" name="roles[]" type="checkbox"
                                        value="{{ $role->name }}"
                                        {{ $users->roles->where('name', $role->name)->first() ? 'checked' : '' }}
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="{{ 'role' . $role->id }}"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ Str::upper($role->name) }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <h1 class="text-xl font-semibold mb-3">
                            Permissions
                        </h1>
                        <div class="grid grid-cols-2 lg:grid-cols-4">
                            @foreach ($permissions as $permission)
                                <div class="flex items-center mb-4">
                                    <input id="{{ 'permit' . $permission->id }}" name="permissions[]" type="checkbox"
                                        {{ $users->permissions->where('name', $permission->name)->first() ? 'checked' : '' }}
                                        value="{{ $permission->name }}"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="{{ 'permit' . $permission->id }}"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ Str::upper($permission->name) }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </x-body-content>
    </x-body-area>


</x-app-layout>
