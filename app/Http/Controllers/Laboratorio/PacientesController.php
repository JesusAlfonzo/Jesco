<?php

namespace App\Http\Controllers\Laboratorio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function index(Request $request)
    {
        return view('Laboratorio.pacientes');
    }
}
