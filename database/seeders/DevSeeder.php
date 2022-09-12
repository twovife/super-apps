<?php

namespace Database\Seeders;

use App\Models\HrEmployee;
use App\Models\OprHub;
use App\Models\OprHubArea;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $response = Http::get('http://192.168.1.252:1986/kardiv/', [
            'username' => 'oprapps',
            'api_key' => 'e84567a3b7c29ffa864e'
        ])->json('data');

        foreach ($response as $value) {

            $employee = HrEmployee::updateOrCreate(
                ['id' => $value['id']],
                [
                    'id' => $value['id'],
                    'nama' => $value['nama'],
                    'jabatan' => $value['jabatan'],
                    'divisi' => $value['divisi'],
                    'unit' => $value['unit'] ?? $value['divisi'],
                    'status' => $value['is_active'],

                ]
            );

            if ($value['divisi'] == 'DELIVERY BANJARAN') {
                $hub = 'BANJARAN';
                $employee->kurir()->updateOrCreate(
                    ['hc_employee_id' => $value['id']],
                    [
                        'hc_employee_id' => $value['id'],
                        'kurir' => $value['kurir'],
                        'kendaraan' => $value['kendaraan'],
                        'hub' => $hub
                    ]
                );
            } elseif ($value['divisi'] == 'PERWAKILAN NGADILUWIH') {
                $hub = 'NGADILUWIH';
                $employee->kurir()->updateOrCreate(
                    ['hc_employee_id' => $value['id']],
                    [
                        'hc_employee_id' => $value['id'],
                        'kurir' => $value['kurir'],
                        'kendaraan' => $value['kendaraan'],
                        'hub' => $hub
                    ]
                );
            } elseif ($value['divisi'] == 'PERWAKILAN PARE') {
                $hub = 'PARE';
                $employee->kurir()->updateOrCreate(
                    ['hc_employee_id' => $value['id']],
                    [
                        'hc_employee_id' => $value['id'],
                        'kurir' => $value['kurir'],
                        'kendaraan' => $value['kendaraan'],
                        'hub' => $hub
                    ]
                );
            } elseif ($value['divisi'] == 'PERWAKILAN BANYAKAN') {
                $hub = 'BANYAKAN';
                $employee->kurir()->updateOrCreate(
                    ['hc_employee_id' => $value['id']],
                    [
                        'hc_employee_id' => $value['id'],
                        'kurir' => $value['kurir'],
                        'kendaraan' => $value['kendaraan'],
                        'hub' => $hub
                    ]
                );
            } else {
                $employee->kurir()->delete();
            }
        }

        $hubs = [
            ['id' => 1, 'hub' => 'BANJARAN'],
            ['id' => 2, 'hub' => 'NGADILUWIH'],
            ['id' => 3, 'hub' => 'PARE'],
            ['id' => 4, 'hub' => 'BANYAKAN'],
        ];


        $areas = [
            ['id' => 1, 'opr_hub_id' => 1, 'area' => 'A'],
            ['id' => 2, 'opr_hub_id' => 1, 'area' => 'C'],
            ['id' => 3, 'opr_hub_id' => 2, 'area' => 'A'],
            ['id' => 4, 'opr_hub_id' => 2, 'area' => 'C'],
            ['id' => 5, 'opr_hub_id' => 3, 'area' => 'C'],
            ['id' => 6, 'opr_hub_id' => 4, 'area' => 'C'],
        ];

        foreach ($hubs as $hub) {
            OprHub::updateOrCreate(['id' => $hub['id']], [
                'id' => $hub['id'],
                'hub' => $hub['hub']
            ]);
        };

        foreach ($areas as $area) {
            OprHubArea::updateOrCreate(['id' => $area['id']], [
                'id' => $area['id'],
                'opr_hub_id' => $area['opr_hub_id'],
                'area' => $area['area']
            ]);
        };

        // OprHub::insert($hub);
        // OprHubArea::insert($area);

        $role = Role::updateOrCreate([
            'name' => 'super admin',
            'guard_name' => 'web'
        ]);

        Role::find($role->id)->givePermissionTo(Permission::all());

        if (!User::where('username', 'superman')->first()) {
            User::factory()->create();
        }
        User::where('username', 'superman')->first()->syncRoles('super admin');
    }
}
