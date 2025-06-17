<?php

namespace App\Http\Controllers\Compras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index(Request $request)
    {
        return view('compras.orden-de-compra');
    }

    public function show(Request $request)
    {
        return view('compras.detalle-de-compra');
    }
    
}

