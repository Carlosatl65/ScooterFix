<?php

namespace App\Http\Controllers;

use App\Models\Detalles;
use Illuminate\Http\Request;

class DetallesController extends Controller
{
    public function index(Request $request){
        $conjunto = Detalles::All(); //nombre del modelo Vehiculos
        return view('detalles',['conjunto'=> $conjunto]); //se envia los datos por conjunto
    }
}
