<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;

class ProveedoresController extends Controller
{
    public function index(Request $request){
        $conjunto = Proveedores::paginate(5); //nombre del modelo Vehiculos
        return view('proveedores',['conjunto'=> $conjunto]); //se envia los datos por conjunto
    }

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
            return redirect('/proveedores');
        }catch(Throwable $error){
            return $error->getMessage();
        }

    }
}
