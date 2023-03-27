<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;

class UbicacionController extends Controller
{
    public function index(Request $request){
        $conjunto = Ubicacion::All(); //nombre del modelo Vehiculos
        return view('ubicaciones',['conjunto'=> $conjunto]); //se envia los datos por conjunto
    }

    public function create(Request $request){
        return view('form_ubi_crear');
    }

    public function insertar(Request $request){
        
        $otra = new Ubicacion(); //igual a como esta en el modelo (Instancia)
        $otra->id_ubicacion=$request->id_ubicacion;
        $otra->fila=$request->fila;
        $otra->anaquel=$request->anaquel;
        try{
            $otra->save();
            return 'Datos Guardados';
        }catch(Throwable $error){
            return $error->getMessage();
        }

    }
}
