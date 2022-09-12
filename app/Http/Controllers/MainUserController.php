<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class MainUserController extends Controller
{
    public function index()
    {
        $usernames = User::with('employee')->paginate(20);
        // return $usernames;
        return view('master.user.index', [
            'usernames' => $usernames
        ]);
    }



    public function assignment(User $user)
    {
        // return $user->permissions;
        return view('master.user.assigment', [
            'users' => $user,
            'roles' => Role::all(),
            'permissions' => Permission::all()
        ]);
    }

    public function revelation(User $user, Request $request)
    {

        if ($request->roles) {
            $user->roles()->detach();
            foreach ($request->roles as $value) {
                $user->assignRole($value);
            };
        }

        if ($request->permissions) {
            $user->permissions()->detach();
            foreach ($request->permissions as $value) {
                $user->assignRole($value);
            };
        }

        return redirect()->route('user.user.index')->with('green', 'Data Berhasil Diubah');
    }
}
