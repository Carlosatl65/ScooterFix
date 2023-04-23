<link rel="stylesheet" href="{{asset('build/assets/app-67dcdfd2.css')}}"/>
<br><br><br><br><h1 class="text-center fw-bolder text-warning">EDITAR UBICACION</h1>
<div class="card position-absolute top-50 start-50 translate-middle" style="width: 35rem;">
     <div class="card-body">
        <form action="{{route('ubi.edit', $registro->id_ubicacion)}}" method="post">
            @method ('put')
            @csrf ()
            <div class="form-group">
                <label class="form-label">Nombre de Ubicación</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre de ubicación" value="{{$registro->nombre}}" required>
            </div>
            <div class="form-group">
                <label class="form-label">Número de Fila</label>
                <input type="number" class="form-control" name="fila" placeholder="Fila" value="{{$registro->fila}}" required>
            </div>
            <div class="form-group">
                <label class="form-label">Número de Anaquel</label>
                <input type="number" class="form-control" name="anaquel" placeholder="Anaquel" value="{{$registro->anaquel}}" required>
            </div><br>
            <button class="btn btn-warning">Editar</button>
        </form>
    </div>
</div>