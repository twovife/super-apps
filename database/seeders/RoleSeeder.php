<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MasterModul;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'opr pod',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'opr staff',
            'guard_name' => 'web'
        ]);

        MasterModul::create(['modul_name' => 'opr dailyperformance'])->permissions()->createMany(
            [
                'name' => 'opr dailyperformance read',
            ],
            [
                'name' => 'opr dailyperformance create',
            ],
            [
                'name' => 'opr dailyperformance update',
            ],
            [
                'name' => 'opr dailyperformance delete',
            ],
            [
                'name' => 'opr dailyperformance summary',
            ],
        );
        MasterModul::create(['modul_name' => 'opr undel'])->permissions()->createMany(
            [
                'name' => 'opr undel read',
            ],
            [
                'name' => 'opr undel create',
            ],
            [
                'name' => 'opr undel update',
            ],
            [
                'name' => 'opr undel delete',
            ],
        );
        MasterModul::create(['modul_name' => 'opr unstatus'])->permissions()->createMany(
            [
                'name' => 'opr unstatus read',
            ],
            [
                'name' => 'opr unstatus create',
            ],
            [
                'name' => 'opr unstatus update',
            ],
            [
                'name' => 'opr unstatus delete',
            ],
        );

        $opr_staff = Role::where('name', 'opr staff')->first();
        $opr_pod = Role::where('name', 'opr pod')->first();
        $opr_staff->givePermissionTo(Permission::all());
        $opr_pod->givePermissionTo([
            'opr dailyperformance create',
            'opr dailyperformance read',
            'opr undel create',
            'opr undel read',
            'opr unstatus create',
            'opr unstatus read',
            'opr unstatus delete',
        ]);
    }
}
