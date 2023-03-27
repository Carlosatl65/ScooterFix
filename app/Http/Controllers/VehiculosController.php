<?php

namespace App\Http\Controllers;

use App\Models\Vehiculos;
use Illuminate\Http\Request;

class VehiculosController extends Controller
{
    public function index(Request $request){
        $conjunto = Vehiculos::All(); //nombre del modelo Vehiculos
        return view('vehiculos',['conjunto'=> $conjunto]); //se envia los datos por conjunto
    }
}
