<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCOOTERFIX</title>
    <script src="{{asset('build/assets/app-aa9fb56b.js')}}"></script>
    <link rel="stylesheet" href="{{asset('build/assets/app-67dcdfd2.css')}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="https://cdn-icons-png.flaticon.com/512/6946/6946412.png" alt="icono" width="100" height="70" class="img rounded">
            </a>
            <div class="btn-group dropstart justify-content-end">
                <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Opciones
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Tabla de Productos</a></li>
                    <li><a class="dropdown-item" href="#">Tabla de Vehículos</a></li>
                    <li><a class="dropdown-item" href="#">Tabla Ubicaciones</a></li>
                    <li><a class="dropdown-item" href="#">Tabla de Entradas</a></li>
                    <li><a class="dropdown-item" href="#">Tabla de Detalles</a></li>
                    <li><a class="dropdown-item" href="#">Tabla de Proovedores</a></li>
                    <li><a class="dropdown-item" href="#">Salir</a></li>
                </ul>
            </div>       
        </div>
    </nav>    
    <main>
        @yield('cuerpo_pagina')
    </main>
</body>
</html>