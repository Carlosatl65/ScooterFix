<link rel="stylesheet" href="{{asset('build/assets/app-67dcdfd2.css')}}"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">

<br><br><br><br><h1 class="text-center fw-bolder text-danger">CONFIRMACIÓN DE ELIMINAR ENTRADA</h1>
<div class="card position-absolute top-50 start-50 translate-middle" style="width: 35rem;">
     <div class="card-body">
        <form action="{{route('entr.delete', $registro->id_entradas)}}" method="post">
            @method ('delete')
            @csrf ()
            <div class="form-group">
                <label class="form-label">Fecha de ingreso</label>
                <input type="date" class="form-control" name="fecha_entrada" value="{{$registro->fecha_entrada}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Proveedor</label>
                <input type="text" class="form-control" name="id_proveedor" placeholder="Proveedor" value="{{$selec_proveedor->nombre_proveedor}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Subtotal</label>
                <input type="number" step="0.01" class="form-control" name="subtotal" placeholder="Subtotal" value="{{$registro->subtotal}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Iva 0%</label>
                <input type="number" step="0.01" class="form-control" name="iva_0" placeholder="Iva 0%" value="{{$registro->iva_0}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Iva 12%</label>
                <input type="number" step="0.01" class="form-control" name="iva_12" placeholder="Iva 12%" value="{{$registro->iva_12}}" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Total a pagar</label>
                <input type="number" step="0.01" class="form-control" name="total_pagar" placeholder="Total a pagar" value="{{$registro->total_pagar}}" disabled>
            </div><br>
            <button class="btn btn-danger">Borrar</button>
        </form>
    </div>
</div>
        