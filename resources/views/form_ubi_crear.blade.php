<form action="{{route('ubi.insertar')}}" method="post">
    @csrf ()
    <div class="form-group">
        <label for="exampleFormControlInput1">Identificador de Ubicación</label>
        <input type="text" class="form-control" id="" name="id_ubicacion" placeholder="Id">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Número de Fila</label>
        <input type="text" class="form-control" id="" name="fila" placeholder="Fila">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Número de Anaquel</label>
        <input type="text" class="form-control" id="" name="anaquel" placeholder="Anaquel">
    </div>
    <button class="btn btn-primary">Crear</button>
</form>