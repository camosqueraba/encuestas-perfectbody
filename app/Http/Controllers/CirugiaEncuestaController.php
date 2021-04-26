<?php

namespace App\Http\Controllers;

use App\Models\CirugiaEncuesta;
use Illuminate\Http\Request;

class CirugiaEncuestaController extends Controller
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
        return view('encuestas.encuesta_cirugia');
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
     * @param  \App\Models\CirugiaEncuesta  $cirugiaEncuesta
     * @return \Illuminate\Http\Response
     */
    public function show(CirugiaEncuesta $cirugiaEncuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CirugiaEncuesta  $cirugiaEncuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(CirugiaEncuesta $cirugiaEncuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CirugiaEncuesta  $cirugiaEncuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CirugiaEncuesta $cirugiaEncuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CirugiaEncuesta  $cirugiaEncuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(CirugiaEncuesta $cirugiaEncuesta)
    {
        //
    }
}
