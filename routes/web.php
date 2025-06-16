<?php

use App\Http\Controllers\Compras\OrdenCompraController;
use App\Http\Controllers\Compras\DetalleCompraController;
use App\Http\Controllers\Compras\ProveedorController;
use App\Http\Controllers\Compras\ImpuestoController;
use App\Http\Controllers\Almacen\InventarioController;
use App\Http\Controllers\Almacen\Productos\ListaProductosController;
use App\Http\Controllers\Almacen\Productos\PresentacionController;
use App\Http\Controllers\Almacen\Productos\CategoriaController;
use App\Http\Controllers\Almacen\Productos\MarcasController;
use App\Http\Controllers\Almacen\Productos\UnidadesMedidaController;
use App\Http\Controllers\Laboratorio\ExamenesController;
use App\Http\Controllers\Laboratorio\PacientesController;
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

    // Orden de Compra
    Route::get('orden-de-compra', OrdenCompraController::class)
        ->middleware(['auth', 'verified'])
        ->name('orden-de-compra');

    // Detalle de Compra
    Route::get('detalle-de-compra', DetalleCompraController::class)
        ->middleware(['auth', 'verified'])
        ->name('detalle-de-compra');

    // Proveedores
    Route::get('proveedores', ProveedorController::class)
        ->middleware(['auth', 'verified'])
        ->name('proveedores');

    // Impuestos
    Route::get('impuestos', ImpuestoController::class)
        ->middleware(['auth', 'verified'])
        ->name('impuestos');



// Modulo de Almacen

    // Inventario
    Route::get('inventario', InventarioController::class)
        ->middleware(['auth', 'verified'])
        ->name('inventario');

    // Lista de Productos
    Route::get('lista-de-productos', ListaProductosController::class)
        ->middleware(['auth', 'verified'])
        ->name('lista-de-productos');

    // Presentacion de Productos
    Route::get('presentacion', PresentacionController::class)
        ->middleware(['auth', 'verified'])
        ->name('presentacion');

    // Categoria de Productos
    Route::get('categoria', CategoriaController::class)
        ->middleware(['auth', 'verified'])
        ->name('categoria');

    // Marcas de Productos
    Route::get('marcas', MarcasController::class)
        ->middleware(['auth', 'verified'])
        ->name('marcas');

    // Unidades de Medida
    Route::get('unidades-de-medida', UnidadesMedidaController::class)
        ->middleware(['auth', 'verified'])
        ->name('unidades-de-medida');


// Modulo de Laboratorio

    // Examenes
    Route::get('examenes', ExamenesController::class)
        ->middleware(['auth', 'verified'])
        ->name('examenes');

    // Pacientes
    Route::get('pacientes', PacientesController::class)
        ->middleware(['auth', 'verified'])
        ->name('pacientes');


// Settings
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
