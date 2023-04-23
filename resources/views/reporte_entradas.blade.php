<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes Entradas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <img src="{{public_path(). '/images/Logo ScooterFix.png'}}" alt="" width="150" height="150">
        </div>
        <h1 class="text-center fw-bolder text-success">SCOOTERFIX</h1> 
        <h4 class="text-center font-italic"><u>TABLA DE ENTRADAS</u></h4>
    </div>
    <div class="container-fluid">
        <br><br>
        <table class="table table-sm table-bordered align-middle text-center">
            <thead>
                <tr class="bg-success text-white">
                    <th scope="col">Fecha de ingreso</th>
                    <th scope="col">Proovedor</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Iva 0%</th>
                    <th scope="col">Iva 12%</th>
                    <th scope="col">Pago Total</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($conjunto as $item)
            <tr>
                <td>{{$item->fecha_entrada}}</td>
                <td>{{$item->proveedores->nombre_proveedor}}</td>
                <td>{{$item->subtotal}}</td>
                <td>{{$item->iva_0}}</td>
                <td>{{$item->iva_12}}</td>
                <td>{{$item->total_pagar}}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4"></td>
                <th class="bg-success text-white">SUMATORIA TOTAL</th>
                <td class="text-danger">{{$suma}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
