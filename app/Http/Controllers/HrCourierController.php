<?php

namespace App\Http\Controllers;

use App\Models\HrCourier;
use App\Http\Requests\StoreHrCourierRequest;
use App\Http\Requests\UpdateHrCourierRequest;
use App\Models\HrEmployee;

class HrCourierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courier_lists = HrEmployee::with('kurir')->whereHas('kurir', function ($query) {
            $query->whereNotNull('id');
        });
        // dump($courier_lists->get());
        return view('employee.courier', [
            'couriers' => $courier_lists->orderBy('divisi', 'asc')->orderBy('nama', 'asc')->paginate(20)
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
     * @param  \App\Http\Requests\StoreHrCourierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHrCourierRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HrCourier  $hrCourier
     * @return \Illuminate\Http\Response
     */
    public function show(HrCourier $hrCourier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HrCourier  $hrCourier
     * @return \Illuminate\Http\Response
     */
    public function edit(HrCourier $hrCourier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHrCourierRequest  $request
     * @param  \App\Models\HrCourier  $hrCourier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHrCourierRequest $request, HrCourier $hrCourier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HrCourier  $hrCourier
     * @return \Illuminate\Http\Response
     */
    public function destroy(HrCourier $hrCourier)
    {
        //
    }
}
