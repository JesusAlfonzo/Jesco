<?php

namespace App\Http\Controllers\Almacen\Productos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PresentacionController extends Controller
{
    public function index(Request $request)
    {
        return view('Almacen.Productos.presentacion');
    }
}
