<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Vehiculos;
use App\Models\Ubicacion;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;

class ProductosController extends Controller
{
    public function index(Request $request){
        //$conjunto = Productos::All(); //nombre del modelo Vehiculos
        $conjunto = Productos::paginate(5);
        return view('productos',['conjunto'=> $conjunto]); //se envia los datos por conjunto
    }

    //insertar
    public function create(Request $request){
        $selec_vehiculos = Vehiculos::All(); //pluck('nombre','idvehiculo');
        $selec_ubicaciones = Ubicacion::All();
        return view('form_prod_crear',['selec_vehiculos'=> $selec_vehiculos], ['selec_ubicaciones'=> $selec_ubicaciones]);
    }

    public function insertar(Request $request){
        
        $objeto = new Productos(); //igual a como esta en el modelo (Instancia)
        $objeto->nombre=$request->nombre;
        $objeto->descripcion=$request->descripcion;
        $objeto->id_vehiculo=$request->id_vehiculo;
        $objeto->id_ubicacion=$request->id_ubicacion;
        $objeto->unidades=$request->unidades;
        $objeto->precio_compra=$request->precio_compra;
        $objeto->valor_venta=$request->valor_venta;
        try{
            $objeto->save();
            return redirect('/productos');
        }catch(Throwable $error){
            return $error->getMessage();
        }

    }

    //editar
    public function update($id_producto){
        $selec_vehiculos = Vehiculos::All(); //pluck('nombre','idvehiculo');
        $selec_ubicaciones = Ubicacion::All();
        $registro = Productos::find($id_producto);
        return view('edit_productos',compact('registro','selec_vehiculos','selec_ubicaciones'));
        //return view('edit_productos',['registro' => $id_producto1], ['selec_ubicaciones'=> $selec_ubicaciones],['selec_vehiculos'=> $selec_vehiculos]);
    }

    public function edit(Request $request, $id_producto){
        $id_producto1 = Productos::find($id_producto);
        $id_producto1->nombre=$request->nombre;
        $id_producto1->descripcion=$request->descripcion;
        $id_producto1->id_vehiculo=$request->id_vehiculo;
        $id_producto1->id_ubicacion=$request->id_ubicacion;
        $id_producto1->unidades=$request->unidades;
        $id_producto1->precio_compra=$request->precio_compra;
        $id_producto1->valor_venta=$request->valor_venta;
        try{
            $id_producto1 ->save();
            return redirect('/productos');
        }catch(Throwable $error){
            return $error->getMessage();
        }
    }

    //borrar
    public function borrar($id_producto){
        $registro = Productos::find($id_producto);
        $selec_vehiculos = Vehiculos::find($registro['id_vehiculo']); //pluck('nombre','idvehiculo');
        return view('delete_productos',compact('registro','selec_vehiculos'));
        //return view('delete_productos',['registro' => $id_producto1]);
    }

    public function delete($id_producto){
        $id_producto1 = Productos::find($id_producto);
        try{
            $id_producto1 ->delete();
            return redirect('/productos');
        }catch(Throwable $error){
            return $error->getMessage();
        }
    }

}
