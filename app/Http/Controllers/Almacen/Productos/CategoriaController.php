<?php

namespace App\Http\Controllers\Almacen\Productos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function __invoke(Request $request)
    {
        // Aquí puedes manejar la lógica para la categoría de productos
        // Por ejemplo, retornar una vista o procesar datos

        return view('almacen.productos.categoria');
    }
}
