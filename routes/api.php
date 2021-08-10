<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerProductos;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("categorias/get", [ControllerProductos::class, "getCategorias"]);

Route::get("productos/get", [ControllerProductos::class, "getProductos"]);


Route::post("productos/post", [ControllerProductos::class, "crearProducto"]);