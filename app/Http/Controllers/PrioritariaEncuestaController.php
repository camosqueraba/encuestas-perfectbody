<?php

namespace App\Http\Controllers;

use App\Models\PrioritariaEncuesta;
use Illuminate\Http\Request;

class PrioritariaEncuestaController extends Controller
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
        return view('encuestas.encuesta_prioritaria');
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
     * @param  \App\Models\PrioritariaEncuesta  $prioritariaEncuesta
     * @return \Illuminate\Http\Response
     */
    public function show(PrioritariaEncuesta $prioritariaEncuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrioritariaEncuesta  $prioritariaEncuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(PrioritariaEncuesta $prioritariaEncuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrioritariaEncuesta  $prioritariaEncuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PrioritariaEncuesta $prioritariaEncuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrioritariaEncuesta  $prioritariaEncuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrioritariaEncuesta $prioritariaEncuesta)
    {
        //
    }
}
