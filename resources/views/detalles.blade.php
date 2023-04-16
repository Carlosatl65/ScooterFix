@extends ('layouts.menu')


@section ('cuerpo_pagina')

<br><br>
<div class="container">
<h1 class="text-center fw-bolder text-success">SCOOTERFIX <i class="bi bi-scooter"></i></h1> 
<h4 class="text-center text-decoration-underline fst-italic">TABLA DE DETALLES</h4>
<br><br>

<div class="row">
  <div class="col-9">
    <a href="{{route('detal.create')}}" class="btn btn-outline-dark">Nuevo</a>
  </div>
  <div class="col-3 d-flex justify-content-end">
    <form action="" class="d-flex" method="get">
      <input class="form-control me-2" type="search" placeholder="Buscar" name="txt_buscar">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
</div>

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
            <a type="button" class="btn btn-warning btn-sm" href="{{route('detal.update',$item->id_detalle)}}"><i class="bi bi-pencil-fill"></i></a>
            <a type="button" class="btn btn-danger btn-sm" href="{{route('detal.borrar',$item->id_detalle)}}"><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="d-flex justify-content-end">
{{$conjunto->links()}}
</div>
</div>

@endsection