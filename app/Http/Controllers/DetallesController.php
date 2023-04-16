<?php

namespace App\Http\Controllers;

use App\Models\Detalles;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;

class DetallesController extends Controller
{
    public function index(Request $request){
        //$conjunto = Detalles::All(); //nombre del modelo Vehiculos
        $conjunto = Detalles::paginate(5);
        return view('detalles',['conjunto'=> $conjunto]); //se envia los datos por conjunto
    }

    //insertar
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

    //editar
    public function update($id_detalle){
        $id_detalle1 = Detalles::find($id_detalle);
        return view('edit_ubicaciones',['registro' => $id_detalle1]);
    }

    public function edit(Request $request, $id_detalle){
        $id_detalle1 = Detalles::find($id_detalle);
        $id_detalle1->id_producto = $request->id_producto;
        $id_detalle1->id_entradas = $request->id_entradas;
        $id_detalle1->cantidad = $request->cantidad;
        $id_detalle1->valor_unitario = $request->valor_unitario;
        $id_detalle1->valor_total = $request->valor_total;
        try{
            $id_detalle1 ->save();
            return redirect('/detalles');
        }catch(Throwable $error){
            return $error->getMessage();
        }
    }

    //borrar
    public function borrar($id_detalle){
        $id_detalle1 = Detalles::find($id_detalle);
        return view('delete_ubicaciones',['registro' => $id_detalle1]);
    }

    public function delete($id_detalle){
        $id_detalle1 = Detalles::find($id_detalle);
        try{
            $id_detalle1 ->delete();
            return redirect('/detalles');
        }catch(Throwable $error){
            return $error->getMessage();
        }
    }

}
