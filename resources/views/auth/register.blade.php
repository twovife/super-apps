<x-app-layout>
    <div class="flex min-h-fit justify-center items-center">
        <x-auth-card>


            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-label for="username" :value="__('Username')" />

                    <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')"
                        required autofocus />
                </div>

                <div class="mt-4">
                    <x-label for="hr_employee_id">Employee</x-label>
                    <x-select name="hr_employee_id" id="hr_employee_id" placeholder="Select Modul Name" required>
                        @foreach ($employees as $employee)
                            <option value="{{ $employee->id }}">{{ $employee->nama }} - {{ $employee->divisi }}</option>
                        @endforeach
                    </x-select>
                </div>
                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button-action type="submit" class="ml-4">
                        {{ __('Register') }}
                    </x-button-action>
                </div>
            </form>
        </x-auth-card>
    </div>
</x-app-layout>
