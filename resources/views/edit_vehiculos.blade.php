<link rel="stylesheet" href="{{asset('build/assets/app-67dcdfd2.css')}}"/>
<br><br><br><br><h1 class="text-center fw-bolder">FORMULARIO DE EDITAR DE VEHICULOS</h1>
<div class="card position-absolute top-50 start-50 translate-middle" style="width: 35rem;">
     <div class="card-body">
        <form action="{{route('veh.edit', $registro->idvehiculo)}}" method="post">
            @method ('put')
            @csrf ()
            <div class="form-group">
                <label class="form-label">Nombre de Vehículo</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{$registro->nombre}}">
            </div>
            <div class="form-group">
                <label class="form-label">Modelo de Vehículo</label>
                <input type="text" class="form-control" name="modelo" placeholder="Modelo" value="{{$registro->modelo}}">
            </div><br>
            <button class="btn btn-primary">Editar</button>
        </form>
    </div>
</div>