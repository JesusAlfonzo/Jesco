<?php

namespace App\Http\Controllers\Laboratorio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('Laboratorio.pacientes');
    }
}
