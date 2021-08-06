<?php

namespace App\Http\Controllers;

use App\tiposmascotas;
use Illuminate\Http\Request;


class tiposmascotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = tiposmascotas::latest()->get();
        return response()->json($mascotas, 200);
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
     * @param  \App\tiposmascotas  $tiposmascotas
     * @return \Illuminate\Http\Response
     */
    public function show(tiposmascotas $tiposmascotas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tiposmascotas  $tiposmascotas
     * @return \Illuminate\Http\Response
     */
    public function edit(tiposmascotas $tiposmascotas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tiposmascotas  $tiposmascotas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tiposmascotas $tiposmascotas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tiposmascotas  $tiposmascotas
     * @return \Illuminate\Http\Response
     */
    public function destroy(tiposmascotas $tiposmascotas)
    {
        //
    }
}
