<link rel="stylesheet" href="{{asset('build/assets/app-67dcdfd2.css')}}"/>

<br><br><br><br><h1 class="text-center fw-bolder text-warning">EDITAR DETALLES DE INGRESOS</h1>
<div class="card position-absolute top-50 start-50 translate-middle" style="width: 35rem;">
     <div class="card-body">
        <form action="{{route('detal.edit', $registro->id_detalle)}}" method="post">
            @method ('put')
            @csrf ()
            <div class="form-group">
                <label class="form-label">Producto</label>
                <input type="text" class="form-control" name="id_producto" placeholder="Id" value="{{$registro->id_producto}}">
            </div>
            <div class="form-group">
                <label class="form-label">Entrada</label>
                <input type="text" class="form-control" name="id_entradas" placeholder="Id" value="{{$registro->id_entradas}}">
            </div>
            <div class="form-group">
                <label class="form-label">Cantidad</label>
                <input type="number" class="form-control" name="cantidad" placeholder="Cantidad" value="{{$registro->cantidad}}">
            </div>
            <div class="form-group">
                <label class="form-label">Valor Unitario</label>
                <input type="number" step="0.01" class="form-control" name="valor_unitario" placeholder="Valor U." value="{{$registro->valor_unitario}}">
            </div>
            <div class="form-group">
                <label class="form-label">Valor Total</label>
                <input type="number" step="0.01" class="form-control" name="valor_total" placeholder="Valor T." value="{{$registro->valor_total}}">
            </div><br>
            <button class="btn btn-warning">Editar</button>
        </form>
    </div>
</div>
        