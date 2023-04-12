<?php

namespace App\Http\Controllers;

use App\Models\Detalles;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;

class DetallesController extends Controller
{
    public function index(Request $request){
        $conjunto = Detalles::paginate(5); //nombre del modelo Vehiculos
        return view('detalles',['conjunto'=> $conjunto]); //se envia los datos por conjunto
    }

    public function create(Request $request){
        return view('form_detal_crear');
    }

    public function insertar(Request $request){
        
        $objeto = new Detalles(); //igual a como esta en el modelo (Instancia)
        $objeto->id_producto=$request->id_producto;
        $objeto->id_entradas=$request->id_entradas;
        $objeto->cantidad=$request->cantidad;
        $objeto->valor_unitario=$request->valor_unitario;
        $objeto->valor_total=$request->valor_total;
        try{
            $objeto->save();
            return redirect('/detalles');
        }catch(Throwable $error){
            return $error->getMessage();
        }

    }
}
