<?php

namespace App\Http\Controllers;

use App\Models\MasterModul;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class MaterPermissionController extends Controller
{
    public function index()
    {
        $permission = Permission::with('modul')->paginate(20);
        return view('master.permission.index', [
            'permissions' => $permission,
            'mastermoduls' => MasterModul::all()
        ]);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255', 'unique:permissions'],
        // ]);

        $permission = Permission::create([
            'name' => $request->name,
            'master_modul_id' => $request->master_modul_id
        ]);


        if ($permission) {
            $superroles = Role::where('name', 'super admin')->first();
            if ($superroles) {
                $superroles->givePermissionTo([$request->name]);
            }
        }

        return redirect()->route('user.permission.index');
    }
}
