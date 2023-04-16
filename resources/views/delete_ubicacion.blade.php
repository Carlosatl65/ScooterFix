<link rel="stylesheet" href="{{asset('build/assets/app-67dcdfd2.css')}}"/>
<br><br><br><br><h1 class="text-center fw-bolder text-danger">CONFIRMACIÓN DE ELIMINAR UBICACION</h1>
<div class="card position-absolute top-50 start-50 translate-middle" style="width: 35rem;">
     <div class="card-body">
        <form action="{{route('ubi.delete', $registro->id_ubicacion)}}" method="post">
            @method ('delete')
            @csrf ()
            <div class="form-group">
                <label class="form-label">Nombre de Ubicación</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre de ubicación" value="{{$registro->nombre}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Número de Fila</label>
                <input type="number" class="form-control" name="fila" placeholder="Fila" value="{{$registro->fila}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Número de Anaquel</label>
                <input type="number" class="form-control" name="anaquel" placeholder="Anaquel" value="{{$registro->anaquel}}" disabled>
            </div><br>
            <button class="btn btn-danger">Borrar</button>
        </form>
    </div>
</div>