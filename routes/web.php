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

Route::get('/productos',[ProductosController::class,'index']); //ingresar a página productos
Route::get('/productos/create',[ProductosController::class,'create'])->name('prod.create'); //llamar a función del botón crear
Route::post('/productos/insertar',[ProductosController::class,'insertar'])->name('prod.insertar'); //llamar a función insertar datos en las tablas

Route::get('/vehiculos',[VehiculosController::class,'index']); //ingresar a página vehículos
Route::get('/vehiculos/create',[VehiculosController::class,'create'])->name('veh.create');//llamar a función del botón crear
Route::post('/vehiculos/insertar',[VehiculosController::class,'insertar'])->name('veh.insertar');//llamar a función insertar datos en las tablas
//editar
Route::get('/vehiculos/update/{idvehiculo}',[VehiculosController::class,'update'])->name('veh.update');//llamar a función del botón editar
Route::put('/vehiculos/edit/{idvehiculo}',[VehiculosController::class,'edit'])->name('veh.edit');//llamar a función editar datos en las tablas
//eliminar
Route::get('/vehiculos/borrar/{idvehiculo}',[VehiculosController::class,'borrar'])->name('veh.borrar');//llamar a función del botón eliminar
Route::delete('/vehiculos/delete/{idvehiculo}',[VehiculosController::class,'delete'])->name('veh.delete');//llamar a función delete datos en las tablas


Route::get('/ubicaciones',[UbicacionController::class,'index']); //ingresar a página ubicaciones
Route::get('/ubicaciones/create',[UbicacionController::class,'create'])->name('ubi.create');//llamar a función del botón crear
Route::post('/ubicaciones/insertar',[UbicacionController::class,'insertar'])->name('ubi.insertar');//llamar a función insertar datos en las tablas

Route::get('/proveedores',[ProveedoresController::class,'index']); //ingresar a página proveedores
Route::get('/proveedores/create',[ProveedoresController::class,'create'])->name('prov.create');//llamar a función del botón crear
Route::post('/proveedores/insertar',[ProveedoresController::class,'insertar'])->name('prov.insertar');//llamar a función insertar datos en las tablas

Route::get('/entradas',[EntradasController::class,'index']); //ingresar a página entradas
Route::get('/entradas/create',[EntradasController::class,'create'])->name('entr.create');//llamar a función del botón crear
Route::post('/entradas/insertar',[EntradasController::class,'insertar'])->name('entr.insertar');//llamar a función insertar datos en las tablas

Route::get('/detalles',[DetallesController::class,'index']); //ingresar a página detalles
Route::get('/detalles/create',[DetallesController::class,'create'])->name('detal.create');//llamar a función del botón crear
Route::post('/detalles/insertar',[DetallesController::class,'insertar'])->name('detal.insertar');//llamar a función insertar datos en las tablas