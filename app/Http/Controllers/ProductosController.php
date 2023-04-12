<?php

namespace App\Http\Controllers;

use App\Models\Productos;
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
    public function create(Request $request){
        return view('form_prod_crear');
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
}
