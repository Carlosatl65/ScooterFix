@extends ('layouts.menu')


@section ('cuerpo_pagina')

<br><br>
<div class="container">
<h1 class="text-center fw-bolder text-success">SCOOTERFIX <i class="bi bi-scooter"></i></h1> 
<h4 class="text-center text-decoration-underline fst-italic">TABLA DE PRODUCTOS</h4>
<br><br>
<table class="table table-sm table-striped table-hover table-bordered align-middle text-center">
  <thead>
    <tr class="table-dark">
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Vehículo</th>
      <th scope="col">Ubicación</th>
      <th scope="col">Unidades</th>
      <th scope="col">Precio</th>
      <th scope="col">Valor de Venta</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach($conjunto as $item)
    <tr>
        <th>{{$item->nombre}}</th>
        <th>{{$item->descripcion}}</th>
        <th>{{$item->id_vehiculo}}</th>
        <th>{{$item->id_ubicacion}}</th>
        <th>{{$item->unidades}}</th>
        <th>{{$item->precio_compra}}</th>
        <th>{{$item->valor_venta}}</th>
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