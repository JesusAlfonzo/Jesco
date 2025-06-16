<?php

namespace App\Http\Controllers\Compras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ordenCompraController extends Controller
{
    public function __invoke(Request $request)
    {
        // Aquí puedes manejar la lógica de tu controlador
        // Por ejemplo, retornar una vista o procesar datos

        return view('Compras.orden-de-compra'); // Asegúrate de que esta vista exista
    }
}
