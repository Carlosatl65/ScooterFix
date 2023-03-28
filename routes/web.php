<?php

use App\Http\Controllers\DetallesController;
use App\Http\Controllers\EntradasController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos',[ProductosController::class,'index']);

Route::get('/vehiculos',[VehiculosController::class,'index']);

Route::get('/ubicaciones',[UbicacionController::class,'index']);
Route::get('/ubicaciones/create',[UbicacionController::class,'create'])->name('ubi.create'); //ruta para acceder a formulario añadir
Route::post('/ubicaciones/insertar',[UbicacionController::class,'insertar'])->name('ubi.insertar');

Route::get('/proveedores',[ProveedoresController::class,'index']);

Route::get('/entradas',[EntradasController::class,'index']);

Route::get('/detalles',[DetallesController::class,'index']);