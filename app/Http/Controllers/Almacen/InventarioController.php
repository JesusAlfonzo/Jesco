<?php

namespace App\Http\Controllers\Almacen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function __invoke(Request $request)
    {
        // Aquí puedes agregar la lógica para manejar la solicitud
        // Por ejemplo, cargar datos de la base de datos o procesar formularios

        // Retornar una vista específica para el inventario
        return view('almacen.inventario');
    }
}
