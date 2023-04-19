<?php

namespace App\Http\Controllers;

use App\Models\Vehiculos;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;
use PDF;

class VehiculosController extends Controller
{
    public function index(Request $request){
        //$conjunto = Vehiculos::All(); //nombre del modelo Vehiculos
        $conjunto = Vehiculos::paginate(5);
        return view('vehiculos',['conjunto'=> $conjunto]); //se envia los datos por conjunto
    }

    //insertar
    public function create(Request $request){
        return view('form_veh_crear');
    }

    public function insertar(Request $request){
        
        $objeto = new Vehiculos(); //igual a como esta en el modelo (Instancia)
        $objeto->nombre=$request->nombre;
        $objeto->modelo=$request->modelo;
        try{
            $objeto->save();
            return redirect('/vehiculos');
        }catch(Throwable $error){
            return $error->getMessage();
        }

    }

    //editar
    public function update($idvehiculo){
        $id_vehiculo = Vehiculos::find($idvehiculo);
        return view('edit_vehiculos',['registro' => $id_vehiculo]);
    }

    public function edit(Request $request, $idvehiculo){
        $id_vehiculo = Vehiculos::find($idvehiculo);
        $id_vehiculo->nombre = $request->nombre;
        $id_vehiculo->modelo = $request->modelo;
        try{
            $id_vehiculo ->save();
            return redirect('/vehiculos');
        }catch(Throwable $error){
            return $error->getMessage();
        }
    }

    //borrar
    public function borrar($idvehiculo){
        $id_vehiculo = Vehiculos::find($idvehiculo);
        return view('delete_vehiculos',['registro' => $id_vehiculo]);
    }

    public function delete($idvehiculo){
        $id_vehiculo = Vehiculos::find($idvehiculo);
        try{
            $id_vehiculo ->delete();
            return redirect('/vehiculos');
        }catch(Throwable $error){
            return $error->getMessage();
        }
    }


    //reportes
    public function reporte(){
        $conjunto = Vehiculos::All();
        /* $datos=[
            'nombre'=> $conjunto['nombre'],
            'modelo'=> $conjunto['modelo']
        ]; */

        return PDF::loadView('reporte_vehiculos',compact('conjunto'))->stream('Reporte de Vehiculos.pdf');
        //return view('reporte_vehiculo');
    }

}
