<?php

namespace App\Http\Controllers\Empleados;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index(Request $request)
    {
        return view('empleados.lista-de-empleados');
    }

    public function create(Request $request)
    {
        return view('empleados.registrar-empleado');
    }
}
