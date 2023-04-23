<link rel="stylesheet" href="{{asset('build/assets/app-67dcdfd2.css')}}"/>
<br><br><br><br><h1 class="text-center fw-bolder text-warning">EDITAR PROVEEDOR</h1>
<div class="card position-absolute top-50 start-50 translate-middle" style="width: 35rem;">
     <div class="card-body">
        <form action="{{route('prov.edit', $registro->id_proveedor)}}" method="post">
            @method ('put')
            @csrf ()
            <div class="form-group">
                <label class="form-label">Nombre de Proveedor</label>
                <input type="text" class="form-control" name="nombre_proveedor" placeholder="Nombre" value="{{$registro->nombre_proveedor}}" required>
            </div>
            <div class="form-group">
                <label class="form-label">Ubicación de Proveedor</label>
                <input type="text" class="form-control" name="ubicacion_proveedor" placeholder="Ubicación" value="{{$registro->ubicacion_proveedor}}" required>
            </div>
            <div class="form-group">
                <label class="form-label">Celular de Proveedor</label>
                <input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" name="celular_proveedor" placeholder="Celular" value="{{$registro->celular_proveedor}}" required>
            </div>
            <div class="form-group">
                <label class="form-label">Correo de Proveedor</label>
                <input type="email" class="form-control" name="correo_proveedor" placeholder="@gmail.com" value="{{$registro->correo_proveedor}}" required>
            </div><br>
            <button class="btn btn-warning">Editar</button>
        </form>
    </div>
</div>