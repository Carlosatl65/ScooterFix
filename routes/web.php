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

//página Productos
Route::get('/productos',[ProductosController::class,'index']); //ingresar a página productos
Route::get('/productos/create',[ProductosController::class,'create'])->name('prod.create'); //llamar a función del botón crear
Route::post('/productos/insertar',[ProductosController::class,'insertar'])->name('prod.insertar'); //llamar a función insertar datos en las tablas
//editar
Route::get('/productos/update/{id_producto}',[ProductosController::class,'update'])->name('prod.update');//llamar a función del botón editar
Route::put('/productos/edit/{id_producto}',[ProductosController::class,'edit'])->name('prod.edit');//llamar a función editar datos en las tablas
//eliminar
Route::get('/productos/borrar/{id_producto}',[ProductosController::class,'borrar'])->name('prod.borrar');//llamar a función del botón eliminar
Route::delete('/productos/delete/{id_producto}',[ProductosController::class,'delete'])->name('prod.delete');//llamar a función delete datos en las tablas

/* -------------------------------------------------------------------------------------------------- */

//página Vehículos
Route::get('/vehiculos',[VehiculosController::class,'index']); //ingresar a página vehículos
Route::get('/vehiculos/create',[VehiculosController::class,'create'])->name('veh.create');//llamar a función del botón crear
Route::post('/vehiculos/insertar',[VehiculosController::class,'insertar'])->name('veh.insertar');//llamar a función insertar datos en las tablas
//editar
Route::get('/vehiculos/update/{idvehiculo}',[VehiculosController::class,'update'])->name('veh.update');//llamar a función del botón editar
Route::put('/vehiculos/edit/{idvehiculo}',[VehiculosController::class,'edit'])->name('veh.edit');//llamar a función editar datos en las tablas
//eliminar
Route::get('/vehiculos/borrar/{idvehiculo}',[VehiculosController::class,'borrar'])->name('veh.borrar');//llamar a función del botón eliminar
Route::delete('/vehiculos/delete/{idvehiculo}',[VehiculosController::class,'delete'])->name('veh.delete');//llamar a función delete datos en las tablas

/* -------------------------------------------------------------------------------------------------- */

//página Ubicaciones
Route::get('/ubicaciones',[UbicacionController::class,'index']); //ingresar a página ubicaciones
Route::get('/ubicaciones/create',[UbicacionController::class,'create'])->name('ubi.create');//llamar a función del botón crear
Route::post('/ubicaciones/insertar',[UbicacionController::class,'insertar'])->name('ubi.insertar');//llamar a función insertar datos en las tablas
//editar
Route::get('/ubicaciones/update/{id_ubicacion}',[UbicacionController::class,'update'])->name('ubi.update');//llamar a función del botón editar
Route::put('/ubicaciones/edit/{id_ubicacion}',[UbicacionController::class,'edit'])->name('ubi.edit');//llamar a función editar datos en las tablas
//eliminar
Route::get('/ubicaciones/borrar/{id_ubicacion}',[UbicacionController::class,'borrar'])->name('ubi.borrar');//llamar a función del botón eliminar
Route::delete('/ubicaciones/delete/{id_ubicacion}',[UbicacionController::class,'delete'])->name('ubi.delete');//llamar a función delete datos en las tablas

/* -------------------------------------------------------------------------------------------------- */

//página Proveedores
Route::get('/proveedores',[ProveedoresController::class,'index']); //ingresar a página proveedores
Route::get('/proveedores/create',[ProveedoresController::class,'create'])->name('prov.create');//llamar a función del botón crear
Route::post('/proveedores/insertar',[ProveedoresController::class,'insertar'])->name('prov.insertar');//llamar a función insertar datos en las tablas
//editar
Route::get('/proveedores/update/{id_proveedor}',[ProveedoresController::class,'update'])->name('prov.update');//llamar a función del botón editar
Route::put('/proveedores/edit/{id_proveedor}',[ProveedoresController::class,'edit'])->name('prov.edit');//llamar a función editar datos en las tablas
//eliminar
Route::get('/proveedores/borrar/{id_proveedor}',[ProveedoresController::class,'borrar'])->name('prov.borrar');//llamar a función del botón eliminar
Route::delete('/proveedores/delete/{id_proveedor}',[ProveedoresController::class,'delete'])->name('prov.delete');//llamar a función delete datos en las tablas

/* -------------------------------------------------------------------------------------------------- */

//página Entradas
Route::get('/entradas',[EntradasController::class,'index']); //ingresar a página entradas
Route::get('/entradas/create',[EntradasController::class,'create'])->name('entr.create');//llamar a función del botón crear
Route::post('/entradas/insertar',[EntradasController::class,'insertar'])->name('entr.insertar');//llamar a función insertar datos en las tablas
//editar
Route::get('/entradas/update/{id_entradas}',[EntradasController::class,'update'])->name('entr.update');//llamar a función del botón editar
Route::put('/entradas/edit/{id_entradas}',[EntradasController::class,'edit'])->name('entr.edit');//llamar a función editar datos en las tablas
//eliminar
Route::get('/entradas/borrar/{id_entradas}',[EntradasController::class,'borrar'])->name('entr.borrar');//llamar a función del botón eliminar
Route::delete('/entradas/delete/{id_entradas}',[EntradasController::class,'delete'])->name('entr.delete');//llamar a función delete datos en las tablas

/* -------------------------------------------------------------------------------------------------- */

//página Detalles
Route::get('/detalles',[DetallesController::class,'index']); //ingresar a página detalles
Route::get('/detalles/create',[DetallesController::class,'create'])->name('detal.create');//llamar a función del botón crear
Route::post('/detalles/insertar',[DetallesController::class,'insertar'])->name('detal.insertar');//llamar a función insertar datos en las tablas
//editar
Route::get('/detalles/update/{id_detalle}',[DetallesController::class,'update'])->name('detal.update');//llamar a función del botón editar
Route::put('/detalles/edit/{id_detalle}',[DetallesController::class,'edit'])->name('detal.edit');//llamar a función editar datos en las tablas
//eliminar
Route::get('/detalles/borrar/{id_detalle}',[DetallesController::class,'borrar'])->name('detal.borrar');//llamar a función del botón eliminar
Route::delete('/detalles/delete/{id_detalle}',[DetallesController::class,'delete'])->name('detal.delete');//llamar a función delete datos en las tablas
