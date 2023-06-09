<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;
use PDF;

class ProveedoresController extends Controller
{
    public function index(Request $request){
        //$conjunto = Proveedores::All(); //nombre del modelo Vehiculos
        $conjunto = Proveedores::paginate(10);
        return view('proveedores',['conjunto'=> $conjunto]); //se envia los datos por conjunto
    }

    //insertar
    public function create(Request $request){
        return view('form_prov_crear');
    }

    public function insertar(Request $request){
        
        $objeto = new Proveedores(); //igual a como esta en el modelo (Instancia)
        $objeto->nombre_proveedor=$request->nombre_proveedor;
        $objeto->ubicacion_proveedor=$request->ubicacion_proveedor;
        $objeto->celular_proveedor=$request->celular_proveedor;
        $objeto->correo_proveedor=$request->correo_proveedor;
        try{
            $objeto->save();
            notify()->preset('alerta-agregar');
            return redirect('/proveedores');
        }catch(Throwable $error){
            return $error->getMessage();
        }

    }

    //editar
    public function update($id_proveedor){
        $id_proveedor1 = Proveedores::find($id_proveedor);
        return view('edit_proveedores',['registro' => $id_proveedor1]);
    }

    public function edit(Request $request, $id_proveedor){
        $id_proveedor1 = Proveedores::find($id_proveedor);
        $id_proveedor1->nombre_proveedor = $request->nombre_proveedor;
        $id_proveedor1->ubicacion_proveedor = $request->ubicacion_proveedor;
        $id_proveedor1->celular_proveedor = $request->celular_proveedor;
        $id_proveedor1->correo_proveedor = $request->correo_proveedor;
        try{
            $id_proveedor1 ->save();
            notify()->preset('alerta-editar');
            return redirect('/proveedores');
        }catch(Throwable $error){
            return $error->getMessage();
        }
    }

    //borrar
    public function borrar($id_proveedor){
        $id_proveedor1 = Proveedores::find($id_proveedor);
        return view('delete_proveedores',['registro' => $id_proveedor1]);
    }

    public function delete($id_proveedor){
        $id_proveedor1 = Proveedores::find($id_proveedor);
        try{
            $id_proveedor1 ->delete();
            notify()->preset('alerta-borrar');
            return redirect('/proveedores');
        }catch(Throwable $error){
            //return $error->getMessage();
            notify()->preset('alerta-error');
            return redirect('/proveedores');
        }
    }

    //reportes
    public function reporte(){
        $conjunto = Proveedores::get();
        $datos=[
            'conjunto'=>$conjunto
        ];
        return PDF::loadView('reporte_proveedores',$datos)->stream('Reporte de Proveedores.pdf');
        
    }

}
