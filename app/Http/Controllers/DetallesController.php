<?php

namespace App\Http\Controllers;

use App\Models\Detalles;
use App\Models\Productos;
use App\Models\Entradas;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;
use PDF;

class DetallesController extends Controller
{
    public function index(Request $request){
        //$conjunto = Detalles::All(); //nombre del modelo Vehiculos
        $conjunto = Detalles::with('producto')->paginate(10);
        return view('detalles',['conjunto'=> $conjunto]); //se envia los datos por conjunto
    }

    //insertar
    public function create(Request $request){
        $selec_producto = Productos::All();
        $selec_entrada = Entradas::All();
        return view('form_detal_crear',['selec_producto'=>$selec_producto],['selec_entrada'=>$selec_entrada]);
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
            notify()->preset('alerta-agregar');
            return redirect('/detalles');
        }catch(Throwable $error){
            return $error->getMessage();
        }

    }

    //editar
    public function update($id_detalle){
        $registro = Detalles::find($id_detalle);
        $selec_producto = Productos::All();
        $selec_entrada = Entradas::All();
        return view('edit_detalles',compact('registro','selec_producto','selec_entrada'));
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
            notify()->preset('alerta-editar');
            return redirect('/detalles');
        }catch(Throwable $error){
            return $error->getMessage();
        }
    }

    //borrar
    public function borrar($id_detalle){
        $registro = Detalles::find($id_detalle);
        $selec_producto = Productos::find($registro['id_producto']);
        $selec_entrada = Entradas::find($registro['id_entradas']);
        return view('delete_detalles',compact('registro','selec_producto','selec_entrada'));
    }

    public function delete($id_detalle){
        $id_detalle1 = Detalles::find($id_detalle);
        try{
            $id_detalle1 ->delete();
            notify()->preset('alerta-borrar');
            return redirect('/detalles');
        }catch(Throwable $error){
            //return $error->getMessage();
            notify()->preset('alerta-error');
            return redirect('/detalles');
        }
    }

    //reportes
    public function reporte(){
        $conjunto = Detalles::with('producto')->get();
        $datos=[
            'conjunto'=>$conjunto
        ];
        return PDF::loadView('reporte_detalles',$datos)->stream('Reporte de Detalles.pdf');
        
    }

}
