<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes Detalles</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <img src="{{public_path(). '/images/Logo ScooterFix.png'}}" alt="" width="150" height="150">
        </div>
        <h1 class="text-center fw-bolder text-success">SCOOTERFIX <i class="bi bi-scooter"></i></h1> 
        <h4 class="text-center font-italic"><u>TABLA DE DETALLES</u></h4>
    </div>
    <div class="container-fluid">
        <br><br>
        <table class="table table-sm table-bordered align-middle text-center">
            <thead>
                <tr class="bg-success text-white">
                    <th scope="col">Producto</th>
                    <th scope="col">Entrada</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Valor Unitario</th>
                    <th scope="col">Valor Total</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($conjunto as $item)
            <tr>
                <td>{{$item->producto->nombre}}</td>
                <td>{{$item->id_entradas}}</td>
                <td>{{$item->cantidad}}</td>
                <td>{{$item->valor_unitario}}</td>
                <td>{{$item->valor_total}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
