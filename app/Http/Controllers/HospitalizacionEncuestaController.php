<?php

namespace App\Http\Controllers;

use App\Models\HospitalizacionEncuesta;
use Illuminate\Http\Request;

class HospitalizacionEncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('encuestas.encuesta_hospitalizacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HospitalizacionEncuesta  $hospitalizacionEncuesta
     * @return \Illuminate\Http\Response
     */
    public function show(HospitalizacionEncuesta $hospitalizacionEncuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HospitalizacionEncuesta  $hospitalizacionEncuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(HospitalizacionEncuesta $hospitalizacionEncuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HospitalizacionEncuesta  $hospitalizacionEncuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HospitalizacionEncuesta $hospitalizacionEncuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HospitalizacionEncuesta  $hospitalizacionEncuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(HospitalizacionEncuesta $hospitalizacionEncuesta)
    {
        //
    }
}
