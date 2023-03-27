<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(Request $request){
        $conjunto = Productos::All(); //nombre del modelo Vehiculos
        return view('productos',['conjunto'=> $conjunto]); //se envia los datos por conjunto
    }
}
