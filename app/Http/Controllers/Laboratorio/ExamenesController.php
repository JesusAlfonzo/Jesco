<?php

namespace App\Http\Controllers\Laboratorio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamenesController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('Laboratorio.examenes');
    }
}
