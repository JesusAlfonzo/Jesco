<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index()
    {
        return view('Roles.lista-de-roles');
    }
    
    public function create()
    {
        return view('Roles.registrar-rol');
    }
}
