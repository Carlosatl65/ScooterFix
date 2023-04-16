<link rel="stylesheet" href="{{asset('build/assets/app-67dcdfd2.css')}}"/>
<br><h1 class="text-center fw-bolder text-danger">CONFIRMACIÓN DE ELIMINAR PRODUCTO</h1>
<div class="card position-absolute top-50 start-50 translate-middle" style="width: 35rem;">
     <div class="card-body">
        <form action="{{route('prod.delete', $registro->id_producto)}}" method="post">
            @method ('delete')
            @csrf ()
            <div class="form-group">
                <label class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{$registro->nombre}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Descripción del Producto</label>
                <textarea class="form-control"  rows="3" name="descripcion" placeholder="Descripción..." disabled>{{$registro->descripcion}}</textarea>
            </div>
            <div class="form-group">
                <label class="form-label">Vehículo</label>
                <input type="text" class="form-control"  name="id_vehiculo" placeholder="Vehículo" value="{{$registro->id_vehiculo}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Ubicacion</label>
                <input type="text" class="form-control" name="id_ubicacion" placeholder="Ubicación" value="{{$registro->id_ubicacion}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Unidades</label>
                <input type="number" class="form-control" name="unidades" placeholder="Unidades" value="{{$registro->unidades}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Precio de Compra</label>
                <input type="number" step="0.01" class="form-control" name="precio_compra" placeholder="Precio de compra" value="{{$registro->precio_compra}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Valor de Venta</label>
                <input type="number" step="0.01" class="form-control" name="valor_venta" placeholder="Valor de venta" value="{{$registro->valor_venta}}" disabled>
            </div><br>
            <button class="btn btn-danger">Borrar</button>
        </form>
    </div>
</div>