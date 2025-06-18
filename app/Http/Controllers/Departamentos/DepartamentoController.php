<?php

namespace App\Http\Controllers\Departamentos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        return view ('Departamentos.lista-de-departamentos');
    }

    public function create()
    {
        return view('Departamentos.registrar-departamento');
    }
}
