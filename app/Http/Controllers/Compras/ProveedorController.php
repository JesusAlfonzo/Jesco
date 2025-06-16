<?php

namespace App\Http\Controllers\Compras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function __invoke(Request $request)
    {
        // Aquí puedes agregar la lógica para manejar la solicitud
        // Por ejemplo, cargar datos de la base de datos o procesar formularios

        // Retornar una vista específica para los proveedores
        return view('compras.proveedores');
    }
}
