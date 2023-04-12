<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;

class UbicacionController extends Controller
{
    public function index(Request $request){
        //$conjunto = Ubicacion::All(); //nombre del modelo Vehiculos
        $conjunto = Ubicacion::paginate(5);
        return view('ubicaciones',['conjunto'=> $conjunto]); //se envia los datos por conjunto
    }

    public function create(Request $request){
        return view('form_ubi_crear');
    }

    public function insertar(Request $request){
        
        $objeto = new Ubicacion(); //igual a como esta en el modelo (Instancia)
        $objeto->id_ubicacion=$request->id_ubicacion;
        $objeto->fila=$request->fila;
        $objeto->anaquel=$request->anaquel;
        try{
            $objeto->save();
            return redirect('/ubicaciones');
        }catch(Throwable $error){
            return $error->getMessage();
        }

    }
}
