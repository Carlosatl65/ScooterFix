<link rel="stylesheet" href="{{asset('build/assets/app-67dcdfd2.css')}}"/>
<br><br><br><br><h1 class="text-center fw-bolder">FORMULARIO DE INGRESO DE UBICACIONES</h1>
<div class="card position-absolute top-50 start-50 translate-middle" style="width: 35rem;">
     <div class="card-body">
        <form action="{{route('ubi.insertar')}}" method="post">
            @csrf ()
            <div class="form-group">
                <label class="form-label">Identificador de Ubicación</label>
                <input type="text" class="form-control" name="id_ubicacion" placeholder="Id">
            </div>
            <div class="form-group">
                <label class="form-label">Número de Fila</label>
                <input type="number" class="form-control" name="fila" placeholder="Fila">
            </div>
            <div class="form-group">
                <label class="form-label">Número de Anaquel</label>
                <input type="number" class="form-control" name="anaquel" placeholder="Anaquel">
            </div><br>
            <button class="btn btn-primary">Crear</button>
        </form>
    </div>
</div>
        