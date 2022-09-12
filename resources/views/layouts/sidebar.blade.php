<div id="sidebar-wrapper" class="p-4 pr-0 text-gray-900 dark:text-white">
    <x-sidebar-btn :active="request()->routeIs('homepage')" href="/" :class="'mb-3'">
        <x-slot name="icons">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z">
            </path>
        </x-slot>
        Home Page
    </x-sidebar-btn>

    {{-- <x-link-group :title="'Employee'">
        <x-slot name="sideMenu">
            <x-sidebar-btn :href="route('emp.index')" :active="request()->routeIs('emp.*')">
                <x-slot name="icons">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z">
                    </path>
                </x-slot>
                Employee
            </x-sidebar-btn>
        </x-slot>
    </x-link-group> --}}

    <x-sidebar-dropdown :active="request()->routeIs('emp.*')" :name="'Employee'">
        <x-slot name="sidebarItem">
            <x-sidebar-dropdown-item :href="route('emp.employee.index')" :active="request()->routeIs('emp.employee.*')">Employee</x-sidebar-dropdown-item>
            <x-sidebar-dropdown-item :href="route('emp.courier.index')" :active="request()->routeIs('emp.courier.*')">Couriers</x-sidebar-dropdown-item>
        </x-slot>
    </x-sidebar-dropdown>

    <x-sidebar-dropdown :active="request()->routeIs('user.*')" :name="'User & Roles'">
        <x-slot name="sidebarItem">
            <x-sidebar-dropdown-item :href="route('user.user.index')" :active="request()->routeIs('user.user.*')">User Manager</x-sidebar-dropdown-item>
            <x-sidebar-dropdown-item :href="route('user.permission.index')" :active="request()->routeIs('user.permission.*')">Permission</x-sidebar-dropdown-item>
            <x-sidebar-dropdown-item :href="route('user.role.index')" :active="request()->routeIs('user.role.*')">Role</x-sidebar-dropdown-item>
            <x-sidebar-dropdown-item :href="route('user.modul.index')" :active="request()->routeIs('user.modul.*')">Modul</x-sidebar-dropdown-item>
        </x-slot>
    </x-sidebar-dropdown>
</div>
