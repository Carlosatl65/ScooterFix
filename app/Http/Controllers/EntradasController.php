<?php

namespace App\Http\Controllers;

use App\Models\Entradas;
use App\Models\Proveedores;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;
use PDF;

class EntradasController extends Controller
{
    public function index(Request $request){
        //$conjunto = Entradas::All(); //nombre del modelo Vehiculos
        $conjunto = Entradas::with('proveedores')->paginate(10);
        return view('entradas',['conjunto'=> $conjunto]); //se envia los datos por conjunto
    }

    //insertar
    public function create(Request $request){
        $selec_proveedor = Proveedores::All();
        return view('form_entr_crear', ['selec_proveedor'=> $selec_proveedor]);
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
            notify()->preset('alerta-agregar');
            return redirect('/entradas');
        }catch(Throwable $error){
            return $error->getMessage();
        }

    }

    //editar
    public function update($id_entradas){
        $id_entradas1 = Entradas::find($id_entradas);
        $selec_proveedor = Proveedores::All();
        return view('edit_entradas',['registro' => $id_entradas1],['selec_proveedor'=>$selec_proveedor]);
    }

    public function edit(Request $request, $id_entradas){
        $id_entradas1 = Entradas::find($id_entradas);
        $id_entradas1->fecha_entrada = $request->fecha_entrada;
        $id_entradas1->id_proveedor = $request->id_proveedor;
        $id_entradas1->subtotal = $request->subtotal;
        $id_entradas1->iva_0 = $request->iva_0;
        $id_entradas1->iva_12 = $request->iva_12;
        $id_entradas1->total_pagar = $request->total_pagar;
        try{
            $id_entradas1 ->save();
            notify()->preset('alerta-editar');
            return redirect('/entradas');
        }catch(Throwable $error){
            return $error->getMessage();
        }
    }

    //borrar
    public function borrar($id_entradas){
        $id_entradas1 = Entradas::find($id_entradas);
        $selec_proveedor = Proveedores::find($id_entradas1['id_proveedor']);
        return view('delete_entradas',['registro' => $id_entradas1], ['selec_proveedor'=>$selec_proveedor]);
    }

    public function delete($id_entradas){
        $id_entradas1 = Entradas::find($id_entradas);
        try{
            $id_entradas1 ->delete();
            notify()->preset('alerta-borrar');
            return redirect('/entradas');
        }catch(Throwable $error){
            //return $error->getMessage();
            notify()->preset('alerta-error');
            return redirect('/entradas');
        }
    }
    
    //reportes
    public function reporte(){
        $conjunto = Entradas::with('proveedores')->get();
        $suma_total=0;
        foreach($conjunto as $item){
            $suma_total = $item->total_pagar + $suma_total;
        };
        $datos=[
            'conjunto'=>$conjunto,
            'suma'=>$suma_total 
        ];
        return PDF::loadView('reporte_entradas',$datos)->stream('Reporte de Entradas.pdf');
        
    }

}
