<link rel="stylesheet" href="{{asset('build/assets/app-67dcdfd2.css')}}"/>

<br><br><br><br><h1 class="text-center fw-bolder text-danger">CONFIRMACIÓN DE ELIMINAR DETALLES DE INGRESOS</h1>
<div class="card position-absolute top-50 start-50 translate-middle" style="width: 35rem;">
     <div class="card-body">
        <form action="{{route('detal.delete', $registro->id_detalle)}}" method="post">
            @method ('delete')
            @csrf ()
            <div class="form-group">
                <label class="form-label">Producto</label>
                <input type="text" class="form-control" name="id_producto" placeholder="Id" value="{{$registro->id_producto}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Entrada</label>
                <input type="text" class="form-control" name="id_entradas" placeholder="Id" value="{{$registro->id_entradas}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Cantidad</label>
                <input type="number" class="form-control" name="cantidad" placeholder="Cantidad" value="{{$registro->cantidad}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Valor Unitario</label>
                <input type="number" step="0.01" class="form-control" name="valor_unitario" placeholder="Valor U." value="{{$registro->valor_unitario}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Valor Total</label>
                <input type="number" step="0.01" class="form-control" name="valor_total" placeholder="Valor T." value="{{$registro->valor_total}}" disabled>
            </div><br>
            <button class="btn btn-danger">Borrar</button>
        </form>
    </div>
</div>
        