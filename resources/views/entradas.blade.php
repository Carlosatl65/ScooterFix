@extends ('layouts.menu')


@section ('cuerpo_pagina')

<br><br>
<div class="container">
<h1 class="text-center fw-bolder text-success">SCOOTERFIX <i class="bi bi-scooter"></i></h1> 
<h4 class="text-center text-decoration-underline fst-italic">TABLA DE ENTRADAS</h4>
<br><br>
<a href="{{route('entr.create')}}" class="btn btn-outline-dark">Nuevo</a>
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
        <th>{{$item->id_proveedor}}</th>
        <th>{{$item->subtotal}}</th>
        <th>{{$item->iva_0}}</th>
        <th>{{$item->iva_12}}</th>
        <th>{{$item->total_pagar}}</th>
        <td>
            <button type="button" class="btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i></button>
            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
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