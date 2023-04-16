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

    //insertar
    public function create(Request $request){
        return view('form_ubi_crear');
    }

    public function insertar(Request $request){
        
        $objeto = new Ubicacion(); //igual a como esta en el modelo (Instancia)
        $objeto->nombre=$request->nombre;
        $objeto->fila=$request->fila;
        $objeto->anaquel=$request->anaquel;
        try{
            $objeto->save();
            return redirect('/ubicaciones');
        }catch(Throwable $error){
            return $error->getMessage();
        }

    }

    //editar
    public function update($id_ubicacion){
        $id_ubicacion1 = Ubicacion::find($id_ubicacion);
        return view('edit_ubicacion',['registro' => $id_ubicacion1]);
    }

    public function edit(Request $request, $id_ubicacion){
        $id_ubicacion1 = Ubicacion::find($id_ubicacion);
        $id_ubicacion1->nombre = $request->nombre;
        $id_ubicacion1->fila = $request->fila;
        $id_ubicacion1->anaquel = $request->anaquel;
        try{
            $id_ubicacion1 ->save();
            return redirect('/ubicaciones');
        }catch(Throwable $error){
            return $error->getMessage();
        }
    }

    //borrar
    public function borrar($id_ubicacion){
        $id_ubicacion1 = Ubicacion::find($id_ubicacion);
        return view('delete_ubicacion',['registro' => $id_ubicacion1]);
    }

    public function delete($id_ubicacion){
        $id_ubicacion1 = Ubicacion::find($id_ubicacion);
        try{
            $id_ubicacion1 ->delete();
            return redirect('/ubicaciones');
        }catch(Throwable $error){
            return $error->getMessage();
        }
    }

}
