<?php

namespace App\Http\Controllers\Laboratorio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamenesController extends Controller
{
    public function index(Request $request)
    {
        return view('Laboratorio.examenes');
    }
    
    public function create(Request $request)
    {
        return view('Laboratorio.registrar-examen');
    }
}
