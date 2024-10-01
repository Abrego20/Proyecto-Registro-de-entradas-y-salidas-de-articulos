<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        .navbar {
            background-color: #007bff; /* Azul */
        }
        .nav-link {
            color: black; /* Color del texto */
        }
        .nav-link:hover {
            color: #e3f2fd; /* Color de texto al pasar el mouse */
        }
        .nav-item i {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="Entrada.ico" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"><i class="bi bi-house"></i>Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i>Usuario</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/usuario/show"><i class="bi bi-eye"></i>Mostrar</a></li>
                            <li><a class="dropdown-item" href="/usuario/create"><i class="bi bi-plus-circle"></i>Crear</a></li>
                            <li><a class="dropdown-item" href="/usuario/update"><i class="bi bi-plus-circle"></i>Actualizacion</a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-box"></i>Artículo</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/articulo/show"><i class="bi bi-eye"></i>Mostrar</a></li>
                            <li><a class="dropdown-item" href="/articulo/create"><i class="bi bi-plus-circle"></i>Crear</a></li>
                            <li><a class="dropdown-item" href="/articulo/update"><i class="bi bi-plus-circle"></i>actualizar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-file-earmark-plus"></i>Entrada de Artículo</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/entrada_de_articulo/show"><i class="bi bi-eye"></i>Mostrar</a></li>
                            <li><a class="dropdown-item" href="/entrada_de_articulo/create"><i class="bi bi-plus-circle"></i>Crear</a></li>
                            <li><a class="dropdown-item" href="/entrada_de_articulo/update"><i class="bi bi-plus-circle"></i>actualizar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-arrow-up-down"></i>Movimiento Inventario</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/movimiento_inventario/show"><i class="bi bi-eye"></i>Mostrar</a></li>
                            <li><a class="dropdown-item" href="/movimiento_inventario/create"><i class="bi bi-plus-circle"></i>Crear</a></li>
                            <li><a class="dropdown-item" href="/movimiento_inventario/update"><i class="bi bi-plus-circle"></i>actualizar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-clock-history"></i>Historial Inventario</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/historial_inventario/show"><i class="bi bi-eye"></i>Mostrar</a></li>
                            <li><a class="dropdown-item" href="/historial_inventario/create"><i class="bi bi-plus-circle"></i>Crear</a></li>                            
                            <li><a class="dropdown-item" href="/historial_inventario/update"><i class="bi bi-plus-circle"></i>actualizar </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-file-earmark-text"></i>Salida de Artículo</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/salida_de_articulo/show"><i class="bi bi-eye"></i>Mostrar</a></li>
                            <li><a class="dropdown-item" href="/salida_de_articulo/create"><i class="bi bi-plus-circle"></i>Crear</a></li>
                            <li><a class="dropdown-item" href="/salida_de_articulo/update"><i class="bi bi-plus-circle"></i>actualizar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-file-earmark-bar-graph"></i>Informe</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/informe/show"><i class="bi bi-eye"></i>Mostrar</a></li>
                            <li><a class="dropdown-item" href="/informe/create"><i class="bi bi-plus-circle"></i>Crear</a></li>
                            <li><a class="dropdown-item" href="/informe/update"><i class="bi bi-plus-circle"></i>actualizar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-truck"></i>Proveedor</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/proveedor/show"><i class="bi bi-eye"></i>Mostrar</a></li>
                            <li><a class="dropdown-item" href="/proveedor/create"><i class="bi bi-plus-circle"></i>Crear</a></li>
                            <li><a class="dropdown-item" href="/proveedor/update"><i class="bi bi-plus-circle"></i>actualizar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-tags"></i>Categoria</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/categoria/show"><i class="bi bi-eye"></i>Mostrar</a></li>
                            <li><a class="dropdown-item" href="/categoria/create"><i class="bi bi-plus-circle"></i>Crear</a></li>
                            <li><a class="dropdown-item" href="/categoria/update"><i class="bi bi-plus-circle"></i>actualizar </a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        @yield('content') 
        @yield('scripts') 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>