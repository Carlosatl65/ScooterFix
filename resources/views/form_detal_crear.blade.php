<link rel="stylesheet" href="{{asset('build/assets/app-67dcdfd2.css')}}"/>

<br><br><br><br><h1 class="text-center fw-bolder">FORMULARIO DE INGRESO DE DETALLES DE INGRESOS</h1>
<div class="card position-absolute top-50 start-50 translate-middle" style="width: 35rem;">
     <div class="card-body">
        <form action="{{route('detal.insertar')}}" method="post">
            @csrf ()
            <div class="form-group">
                <label class="form-label">Producto</label>
                <!-- <input type="text" class="form-control" name="id_producto" placeholder="Id"> -->
                <select class="form-select form-select-sm" name="id_producto" id="">
                    @foreach($selec_producto as $option)
                    <option value="{{$option->id_producto}}">{{$option->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Entrada</label>
                <!-- <input type="text" class="form-control" name="id_entradas" placeholder="Id"> -->
                <select class="form-select form-select-sm" name="id_entradas" id="">
                    @foreach($selec_entrada as $option)
                    <option value="{{$option->id_entradas}}">Factura N° {{$option->id_entradas}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Cantidad</label>
                <input type="number" class="form-control" name="cantidad" placeholder="Cantidad" required>
            </div>
            <div class="form-group">
                <label class="form-label">Valor Unitario</label>
                <input type="number" step="0.01" class="form-control" name="valor_unitario" placeholder="Valor U." required>
            </div>
            <div class="form-group">
                <label class="form-label">Valor Total</label>
                <input type="number" step="0.01" class="form-control" name="valor_total" placeholder="Valor T." required>
            </div><br>
            <button class="btn btn-primary">Crear</button>
        </form>
    </div>
</div>
        