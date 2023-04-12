<?php

namespace App\Http\Controllers;

use App\Models\Entradas;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;

class EntradasController extends Controller
{
    public function index(Request $request){
        //$conjunto = Entradas::All(); //nombre del modelo Vehiculos
        $conjunto = Entradas::paginate(5);
        return view('entradas',['conjunto'=> $conjunto]); //se envia los datos por conjunto
    }

    public function create(Request $request){
        return view('form_entr_crear');
    }

    public function insertar(Request $request){
        
        $objeto = new Entradas(); //igual a como esta en el modelo (Instancia)
        $objeto->fecha_entrada=$request->fecha_entrada;
        $objeto->id_proveedor=$request->id_proveedor;
        $objeto->subtotal=$request->subtotal;
        $objeto->iva_0=$request->iva_0;
        $objeto->iva_12=$request->iva_12;
        $objeto->total_pagar=$request->total_pagar;
        try{
            $objeto->save();
            return redirect('/entradas');
        }catch(Throwable $error){
            return $error->getMessage();
        }

    }
}
