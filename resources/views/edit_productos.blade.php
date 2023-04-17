<link rel="stylesheet" href="{{asset('build/assets/app-67dcdfd2.css')}}"/>
<br><h1 class="text-center fw-bolder text-warning">EDITAR PRODUCTO</h1>
<div class="card position-absolute top-50 start-50 translate-middle" style="width: 35rem;">
     <div class="card-body">
        <form action="{{route('prod.edit', $registro->id_producto)}}" method="post">
            @method ('put')
            @csrf ()
            <div class="form-group">
                <label class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{$registro->nombre}}">
            </div>
            <div class="form-group">
                <label class="form-label">Descripción del Producto</label>
                <textarea class="form-control"  rows="3" name="descripcion" placeholder="Descripción...">{{$registro->descripcion}}</textarea>
            </div>
            <div class="form-group">
                <label class="form-label">Vehículo</label>
                <!-- <input type="text" class="form-control"  name="id_vehiculo" placeholder="Vehículo" value="{{$registro->id_vehiculo}}"> -->
                <select class="form-select form-select-sm" name="id_vehiculo" id="">
                    @foreach($selec_vehiculos as $option)
                    <option value="{{$option->idvehiculo}}" {{$registro->id_vehiculo == $option->idvehiculo ? 'selected':''}}>{{$option->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Ubicacion</label>
                <!-- <input type="text" class="form-control" name="id_ubicacion" placeholder="Ubicación" value="{{$registro->id_ubicacion}}"> -->
                <select class="form-select form-select-sm" name="id_ubicacion">
                    @foreach($selec_ubicaciones as $option)
                    <option value="{{$option->id_ubicacion}}" {{$registro->id_ubicacion == $option->id_ubicacion ? 'selected':''}}>{{$option->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Unidades</label>
                <input type="number" class="form-control" name="unidades" placeholder="Unidades" value="{{$registro->unidades}}">
            </div>
            <div class="form-group">
                <label class="form-label">Precio de Compra</label>
                <input type="number" step="0.01" class="form-control" name="precio_compra" placeholder="Precio de compra" value="{{$registro->precio_compra}}">
            </div>
            <div class="form-group">
                <label class="form-label">Valor de Venta</label>
                <input type="number" step="0.01" class="form-control" name="valor_venta" placeholder="Valor de venta" value="{{$registro->valor_venta}}">
            </div><br>
            <button class="btn btn-warning">Editar</button>
        </form>
    </div>
</div>