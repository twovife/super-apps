<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class MasterRoleController extends Controller
{
    public function index()
    {
        $role = Role::with('permissions')->paginate(20);
        return view('master.role.index', [
            'roles' => $role,
        ]);
    }
}
