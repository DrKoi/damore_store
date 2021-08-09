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

    public function crearProducto(){
        $producto = new Producto();
        $producto->nobmre = "Mascara Mayonessa";
        $producto->categoria = "Máscaras";
        $producto->precio = 8900;

        $producto->save();
    }
}
