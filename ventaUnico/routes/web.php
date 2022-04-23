<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;


//route::get('consultaProductos',[ProductosController::class,'consultaProductos'])->name('consultaProductos');
//route::get('consultarProducto',[ProductosController::class,'consultarProducto'])->name('consultarProducto');


Route::get('/', function () {
    return view('welcome');
});
