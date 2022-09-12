<?php

namespace App\Http\Controllers;

use App\Models\MasterModul;
use App\Http\Requests\StoreMasterModulRequest;
use App\Http\Requests\UpdateMasterModulRequest;

class MasterModulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modul = MasterModul::with('permissions')->paginate(20);
        return view('master.modul.index', [
            'moduls' => $modul
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
     * @param  \App\Http\Requests\StoreMasterModulRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMasterModulRequest $request)
    {
        MasterModul::create($request->all());
        return redirect()->route('user.modul.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasterModul  $masterModul
     * @return \Illuminate\Http\Response
     */
    public function show(MasterModul $masterModul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasterModul  $masterModul
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterModul $masterModul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMasterModulRequest  $request
     * @param  \App\Models\MasterModul  $masterModul
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMasterModulRequest $request, MasterModul $masterModul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasterModul  $masterModul
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterModul $masterModul)
    {
        //
    }
}
