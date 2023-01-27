<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeverancierRequest;
use App\Http\Requests\UpdateLeverancierRequest;
use App\Models\Leverancier;

class LeverancierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/leverancier/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/leverancier/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLeverancierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeverancierRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leverancier  $leverancier
     * @return \Illuminate\Http\Response
     */
    public function show(Leverancier $leverancier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leverancier  $leverancier
     * @return \Illuminate\Http\Response
     */
    public function edit(Leverancier $leverancier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLeverancierRequest  $request
     * @param  \App\Models\Leverancier  $leverancier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLeverancierRequest $request, Leverancier $leverancier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leverancier  $leverancier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leverancier $leverancier)
    {
        //
    }
}
