<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/productos', [ProductoController::class, 'inicio'])->name('productos.home');
Route::get('/productos/crear', [ProductoController::class, 'crear'])->name('productos.crear');
Route::post('/productos/guardar', [ProductoController::class, 'guardar'])->name('productos.guardar');
Route::get('/empleados', [EmpleadoController::class, 'inicio'])->name('empleados.home');
Route::get('/empleados/crear', [EmpleadoController::class, 'crear'])->name('empleados.crear');
Route::post('/empleados/guardar', [EmpleadoController::class, 'guardar'])->name('empleados.guardar');
Route::get('/proveedores', [ProveedorController::class, 'inicio'])->name('proveedores.home');
Route::get('/proveedores/crear', [ProveedorController::class, 'crear'])->name('proveedores.crear');
Route::post('/proveedores/guardar', [ProveedorController::class, 'guardar'])->name('proveedores.guardar');

