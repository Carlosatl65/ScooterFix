@extends ('layouts.menu')


@section ('cuerpo_pagina')

<br><br>
<div class="container">
<h1 class="text-center fw-bolder text-success">SCOOTERFIX <i class="bi bi-scooter"></i></h1> 
<h4 class="text-center text-decoration-underline fst-italic">TABLA DE UBICACIONES</h4>
<br><br>
<div class="row">
  <div class="col-9">
    <a href="{{route('ubi.create')}}" class="btn btn-outline-dark">Nuevo</a>
  </div>
  <div class="col-3 d-flex justify-content-end">
      <a class="btn btn-outline-success" href="{{route('ubi.reporte')}}">Imprimir PDF</a>
  </div>
</div>

<br><br>
<table class="table table-sm table-striped table-hover table-bordered align-middle text-center">
  <thead>
    <tr class="table-dark">
      <th scope="col">Nombre de Lugar</th>
      <th scope="col">Fila</th>
      <th scope="col">Anaquel</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach($conjunto as $item)
    <tr>
        <th>{{$item->nombre}}</th>
        <th>{{$item->fila}}</th>
        <th>{{$item->anaquel}}</th>
        <td>
            <a type="button" class="btn btn-warning btn-sm" href="{{route('ubi.update',$item->id_ubicacion)}}"><i class="bi bi-pencil-fill"></i></a>
            <a type="button" class="btn btn-danger btn-sm" href="{{route('ubi.borrar',$item->id_ubicacion)}}"><i class="bi bi-trash-fill"></i></a>
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