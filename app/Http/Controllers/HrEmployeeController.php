<?php

namespace App\Http\Controllers;

use App\Models\HrEmployee;
use App\Http\Requests\StoreHrEmployeeRequest;
use App\Http\Requests\UpdateHrEmployeeRequest;
use App\Models\HrCourier;
use Illuminate\Support\Facades\Http;

class HrEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dump($this->checkUpdate()->getData());
        if (request()->_update_show) {
            $new_employee = $this->checkUpdate()->getData();
        }
        return view('employee.index', [
            'employees' => HrEmployee::with('kurir')->paginate(20),
            'new_emps' =>  $new_employee ?? null
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHrEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHrEmployeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HrEmployee  $hrEmployee
     * @return \Illuminate\Http\Response
     */
    public function show(HrEmployee $hrEmployee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HrEmployee  $hrEmployee
     * @return \Illuminate\Http\Response
     */
    public function edit(HrEmployee $hrEmployee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHrEmployeeRequest  $request
     * @param  \App\Models\HrEmployee  $hrEmployee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHrEmployeeRequest $request, HrEmployee $hrEmployee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HrEmployee  $hrEmployee
     * @return \Illuminate\Http\Response
     */
    public function destroy(HrEmployee $hrEmployee)
    {
        //
    }


    private function checkUpdate()
    {
        $response = Http::get('http://192.168.1.252:1986/kardiv/', [
            'username' => 'oprapps',
            'api_key' => 'e84567a3b7c29ffa864e'
        ])->object();
        $existingEmployee = HrEmployee::pluck('id')->values()->all();
        $show = collect($response->data)->whereNotIn('id', $existingEmployee)->values()->all();

        return response()->json($show);
    }


    public function importNew()
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

        return redirect()->route('emp.employee.index')->with('success', 'sukses update data');
    }
}
