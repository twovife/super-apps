<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\HrEmployee;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register', [
            'employees' => HrEmployee::orderBy('divisi', 'asc')->orderBy('nama', 'asc')->get()
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'hr_employee_id' => ['required'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],


        ]);

        $user = User::create([
            'hr_employee_id' => $request->hr_employee_id,
            'username' => $request->username,
            'email' => 'employee@jne.co.id',
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        return redirect()->route('register');
    }
}
