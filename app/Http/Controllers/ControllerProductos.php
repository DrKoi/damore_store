<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\Producto;
class ControllerProductos extends Controller
{
    public function getCategorias(){
        $categorias = array();
        $categorias[] = "Matizadores";
        $categorias[] = "Máscaras";
        $categorias[] = "etc1";
        $categorias[] = "etc2";

        return $categorias;
    }

    public function getProductos(){
        $productos = Producto::all();
        return $productos;
    }

    public function crearProducto(Request $request){

        $input = $request->all();
        $producto = new Producto();
        $producto->nobmre = $input["nombre"];
        $producto->categoria = $input["categoria"];
        $producto->precio = $input["precio"];

        $producto->save();
        return $producto;
    }
}
