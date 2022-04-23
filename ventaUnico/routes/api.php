<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;



route::get('consultaProductos',[ProductosController::class,'consultaProductos']);
route::get('consultarProducto',[ProductosController::class,'consultarProducto']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
