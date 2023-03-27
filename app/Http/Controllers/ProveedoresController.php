<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function index(Request $request){
        $conjunto = Proveedores::All(); //nombre del modelo Vehiculos
        return view('proveedores',['conjunto'=> $conjunto]); //se envia los datos por conjunto
    }
}
