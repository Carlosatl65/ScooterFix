<?php

namespace App\Http\Controllers;

use App\Models\Entradas;
use Illuminate\Http\Request;

class EntradasController extends Controller
{
    public function index(Request $request){
        $conjunto = Entradas::All(); //nombre del modelo Vehiculos
        return view('entradas',['conjunto'=> $conjunto]); //se envia los datos por conjunto
    }
}
