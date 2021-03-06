<?php

namespace App\Http\Controllers;

use App\Models\CompraDetalle;
use App\Http\Requests\StoreCompraDetalleRequest;
use App\Http\Requests\UpdateCompraDetalleRequest;

class CompraDetalleController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompraDetalleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompraDetalleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompraDetalle  $compraDetalle
     * @return \Illuminate\Http\Response
     */
    public function show(CompraDetalle $compraDetalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompraDetalle  $compraDetalle
     * @return \Illuminate\Http\Response
     */
    public function edit(CompraDetalle $compraDetalle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompraDetalleRequest  $request
     * @param  \App\Models\CompraDetalle  $compraDetalle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompraDetalleRequest $request, CompraDetalle $compraDetalle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompraDetalle  $compraDetalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompraDetalle $compraDetalle)
    {
        //
    }
}
