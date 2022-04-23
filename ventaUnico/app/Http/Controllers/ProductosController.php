<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function consultaProductos()
    {
        $consulta = productos::all();
        return response()->json($consulta, 200);
    }

    public function consultarProducto()
    {
        $consulta = productos::find(1);
        return response()->json($consulta, 200);
    }


    public function show(Request $request)
    {
        $producto = productos::findOrFail($request->id);
        return $producto;
    }


}
