<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCOOTERFIX</title>
    <script src="{{asset('build/assets/app-aa9fb56b.js')}}"></script>
    @notifyCss
    <link rel="stylesheet" href="{{asset('build/assets/app-67dcdfd2.css')}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="https://cdn-icons-png.flaticon.com/512/3127/3127399.png" alt="icono" width="100" height="70" class="img rounded">
            </a>
            <div class="btn-group dropstart justify-content-end">
                <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Opciones
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="productos">Tabla de Productos</a></li>
                    <li><a class="dropdown-item" href="vehiculos">Tabla de Vehículos</a></li>
                    <li><a class="dropdown-item" href="ubicaciones">Tabla Ubicaciones</a></li>
                    <li><a class="dropdown-item" href="entradas">Tabla de Entradas</a></li>
                    <li><a class="dropdown-item" href="detalles">Tabla de Detalles</a></li>
                    <li><a class="dropdown-item" href="proveedores">Tabla de Proovedores</a></li>
                </ul>
            </div>       
        </div>
    </nav>
        
    <main>
        @yield('cuerpo_pagina')
    </main>
    
    <x-notify::notify />
    @notifyJs
</body>
</html>