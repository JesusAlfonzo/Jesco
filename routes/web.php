<?php

use App\Http\Controllers\Compras\ProveedorController;
use App\Http\Controllers\Compras\ImpuestoController;
use App\Http\Controllers\Almacen\InventarioController;
use App\Http\Controllers\Almacen\Productos\ProductoController;
use App\Http\Controllers\Almacen\Productos\PresentacionController;
use App\Http\Controllers\Almacen\Productos\CategoriaController;
use App\Http\Controllers\Almacen\Productos\MarcasController;
use App\Http\Controllers\Almacen\Productos\UnidadesMedidaController;
use App\Http\Controllers\Compras\CompraController;
use App\Http\Controllers\Laboratorio\ExamenesController;
use App\Http\Controllers\Laboratorio\PacientesController;
use App\Http\Controllers\Empleados\EmpleadosController;
use App\Http\Controllers\Departamentos\DepartamentoController;
use App\Http\Controllers\Roles\RolController;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Dashboard
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


    
// Modulo de Compras

    Route::prefix('compras')->group(function () {
    Route::get('orden-de-compra', [CompraController::class, 'index'])->middleware(['auth', 'verified'])
        ->name('orden-de-compra');
    Route::get('detalle-de-compra', [CompraController::class, 'show'])->middleware(['auth', 'verified'])
        ->name('detalle-de-compra');
});

    // Proveedores
    Route::get('proveedores', [ProveedorController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('proveedores');

    // Impuestos
    Route::get('impuestos', [ImpuestoController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('impuestos');



// Modulo de Almacen

    // Inventario
    Route::get('inventario', [InventarioController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('inventario');

    // Lista de Productos
    Route::get('lista-de-productos', [ProductoController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('lista-de-productos');

    // Presentacion de Productos
    Route::get('presentacion', [PresentacionController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('presentacion');

    // Categoria de Productos
    Route::get('categoria', [CategoriaController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('categoria');

    // Marcas de Productos
    Route::get('marcas', [MarcasController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('marcas');

    // Unidades de Medida
    Route::get('unidades-de-medida', [UnidadesMedidaController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('unidades-de-medida');


// Modulo de Laboratorio

    // Examenes

    Route::prefix('examen')->group(function(){
        Route::get('examenes', [ExamenesController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('examenes');

        Route::get('registrar-examen', [ExamenesController::class, 'create'])
        ->middleware(['auth', 'verified'])
        ->name('registrar-examen');
    });
    

    // Pacientes
    Route::get('pacientes', [PacientesController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('pacientes');


// Modulo de Empleados

    // Lista de Empleados
    Route::get('empleados', [EmpleadosController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('empleados');

    Route::get('registrar-empleado', [EmpleadosController::class, 'create'])
        ->middleware(['auth', 'verified'])
        ->name('registrar-empleado');


// Modulo de Departamentos

    // Lista de Departamentos
    Route::get('departamentos', [DepartamentoController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('departamentos');

    Route::get('registrar-departamento', [DepartamentoController::class, 'create'])
        ->middleware(['auth', 'verified'])
        ->name('registrar-departamento');


// Modulo de roles

        Route::get('roles', [RolController::class, 'index'])
            ->middleware(['auth', 'verified'])
            ->name('roles');

        Route::get('registrar-rol', [RolController::class, 'create'])
            ->middleware(['auth', 'verified'])
            ->name('registrar-rol');




// Settings
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
