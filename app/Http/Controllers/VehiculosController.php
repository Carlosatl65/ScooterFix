<?php

namespace App\Http\Controllers;

use App\Models\Vehiculos;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;

class VehiculosController extends Controller
{
    public function index(Request $request){
        //$conjunto = Vehiculos::All(); //nombre del modelo Vehiculos
        $conjunto = Vehiculos::paginate(5);
        return view('vehiculos',['conjunto'=> $conjunto]); //se envia los datos por conjunto
    }

    public function create(Request $request){
        return view('form_veh_crear');
    }

    public function insertar(Request $request){
        
        $objeto = new Vehiculos(); //igual a como esta en el modelo (Instancia)
        $objeto->idvehiculo=$request->idvehiculo;
        $objeto->nombre=$request->nombre;
        $objeto->modelo=$request->modelo;
        try{
            $objeto->save();
            return redirect('/vehiculos');
        }catch(Throwable $error){
            return $error->getMessage();
        }

    }

}
