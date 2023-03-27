@extends ('layouts.menu')


@section ('cuerpo_pagina')

<br><br>
<div class="container">
<h1 class="text-center fw-bolder text-success">SCOOTERFIX <i class="bi bi-scooter"></i></h1> 
<h4 class="text-center text-decoration-underline fst-italic">TABLA DE DETALLES</h4>
<br><br>
<table class="table table-sm table-striped table-hover table-bordered align-middle text-center">
  <thead>
    <tr class="table-dark">
      <th scope="col">Producto</th>
      <th scope="col">Entrada</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Valor Unitario</th>
      <th scope="col">Valor Total</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach($conjunto as $item)
    <tr>
        <th>{{$item->id_producto}}</th>
        <th>{{$item->id_entradas}}</th>
        <th>{{$item->cantidad}}</th>
        <th>{{$item->valor_unitario}}</th>
        <th>{{$item->valor_total}}</th>
        <td>
            <button type="button" class="btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i></button>
            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection