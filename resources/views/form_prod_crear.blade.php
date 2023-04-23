<link rel="stylesheet" href="{{asset('build/assets/app-67dcdfd2.css')}}"/>
<br><h1 class="text-center fw-bolder">FORMULARIO DE INGRESO DE PRODUCTOS</h1>
<div class="card position-absolute top-50 start-50 translate-middle" style="width: 35rem;">
     <div class="card-body">
        <form action="{{route('prod.insertar')}}" method="post">
            @csrf ()
            <div class="form-group">
                <label class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <label class="form-label">Descripción del Producto</label>
                <textarea class="form-control"  rows="3" name="descripcion" placeholder="Descripción..." required></textarea>
            </div>
            <div class="form-group">
                <label class="form-label">Vehículo</label>
                <!-- <input type="text" class="form-control"  name="id_vehiculo" placeholder="Vehículo"> -->
                <select class="form-select form-select-sm" name="id_vehiculo" id="">
                    @foreach($selec_vehiculos as $option)
                    <option value="{{$option->idvehiculo}}">{{$option->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Ubicacion</label>
                <!-- <input type="text" class="form-control" name="id_ubicacion" placeholder="Ubicación"> -->
                <select class="form-select form-select-sm" name="id_ubicacion" id="">
                    @foreach($selec_ubicaciones as $option)
                    <option value="{{$option->id_ubicacion}}">{{$option->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Unidades</label>
                <input type="number" class="form-control" name="unidades" placeholder="Unidades" required>
            </div>
            <div class="form-group">
                <label class="form-label">Precio de Compra</label>
                <input type="number" step="0.01" class="form-control" name="precio_compra" placeholder="Precio de compra" required>
            </div>
            <div class="form-group">
                <label class="form-label">Valor de Venta</label>
                <input type="number" step="0.01" class="form-control" name="valor_venta" placeholder="Valor de venta" required>
            </div><br>
            <button class="btn btn-primary">Crear</button>
        </form>
    </div>
</div>
        