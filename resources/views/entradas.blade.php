@extends ('layouts.menu')


@section ('cuerpo_pagina')

<br><br>
<div class="container">
<h1 class="text-center fw-bolder text-success">SCOOTERFIX <i class="bi bi-scooter"></i></h1> 
<h4 class="text-center text-decoration-underline fst-italic">TABLA DE ENTRADAS</h4>
<br><br>

<div class="row">
  <div class="col-9">
    <a href="{{route('entr.create')}}" class="btn btn-outline-dark">Nuevo</a>
  </div>
  <div class="col-3 d-flex justify-content-end">
      <a class="btn btn-outline-success" href="{{route('entr.reporte')}}">Imprimir PDF</a>
  </div>
</div>

<br><br>
<table class="table table-sm table-striped table-hover table-bordered align-middle text-center">
  <thead>
    <tr class="table-dark">
      <th scope="col">Fecha de ingreso</th>
      <th scope="col">Proovedor</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Iva 0%</th>
      <th scope="col">Iva 12%</th>
      <th scope="col">Pago Total</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach($conjunto as $item)
    <tr>
        <th>{{$item->fecha_entrada}}</th>
        <th>{{$item->proveedores->nombre_proveedor}}</th>
        <th>{{$item->subtotal}}</th>
        <th>{{$item->iva_0}}</th>
        <th>{{$item->iva_12}}</th>
        <th>{{$item->total_pagar}}</th>
        <td>
            <a type="button" class="btn btn-warning btn-sm" href="{{route('entr.update',$item->id_entradas)}}"><i class="bi bi-pencil-fill"></i></a>
            <a type="button" class="btn btn-danger btn-sm" href="{{route('entr.borrar',$item->id_entradas)}}"><i class="bi bi-trash-fill"></i></a>
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