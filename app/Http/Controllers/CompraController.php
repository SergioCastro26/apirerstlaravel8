<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Producto;
use App\Models\CompraDetalle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Mixed_;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Compra::all();
        return $compras;
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
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compra = new Compra();
        $compra->idCliente = $request->idCliente;
        $compra->fechaCompra = date("Y-m-d H:i:s");

        $productosCompra = $request->compras;
        $total = 0;

        foreach ($productosCompra as $key => $value) {
            $resultados[] = array("idProducto"=>$productosCompra[$key]["idProducto"],
            "cantidad"=>$productosCompra[$key]["cantidad"],"valor"=>$productosCompra[$key]["valor"]);
            $Valor = $productosCompra[$key]["valor"];
            $total = $total + $Valor[0];
        }
        $compra->total = $total;

        $compra->save();

        $compra->compraDetalle()->createMany($resultados);
        return $compra;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $compra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit(Compra $compra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compra $compra)
    {
        $compra = Compra::findOrFail($request->id);
        $compra->idCliente = $request->idCliente;

        foreach ($request->idProducto as $key => $value) {
            $resultados[] = array("idProducto"=>$request->idProducto[$key],
            "cantidad"=>$request->cantidad[$key], "valor"=>$request->valor[$key]);
        }

        $compra->CompraDetalle()->createMany($resultados);
        $compra->save();

        return $compra;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $compra = Compra::destroy($request->id);
        return $compra;
    }
}
