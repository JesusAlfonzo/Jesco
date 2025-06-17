<?php

namespace App\Http\Controllers\Almacen\Productos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    public function index(Request $request)
    {
        // Aquí puedes manejar la lógica para las marcas de productos
        // Por ejemplo, retornar una vista o procesar datos

        return view('almacen.productos.marcas');
    }
}
