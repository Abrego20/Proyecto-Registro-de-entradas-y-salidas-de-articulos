{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- definimos el titulo --}}
@section('title', '')


{{--Definimos el contenido --}}
@section('content')


<div class="container-fluid">
    <div class="row">
        <!-- Barra lateral -->
        <div class="col-md-2 sidebar bg-dark text-white p-4">
            <h4 class="text-center">INVENTARIO DE ARTÍCULOS</h4>
            <nav class="nav flex-column mt-4">
                <a class="nav-link text-white" href="#">Usuarios</a>
                <a class="nav-link text-white" href="#">Artículos</a>
                <a class="nav-link text-white" href="#">Entradas</a>
                <a class="nav-link text-white" href="#">Salidas</a>
                <a class="nav-link text-white" href="#">Proveedores</a>
                <a class="nav-link text-white" href="#">Informes</a>
                <a class="nav-link text-white" href="#">Historial de Inventario</a>
            </nav>
        </div>

        <!-- Contenido principal -->
        <div class="col-md-10">
            <!-- Barra superior -->
            <div class="d-flex justify-content-between align-items-center p-2 bg-primary text-white">
                <h5>BIENVENIDO(A) AL SISTEMA DE INVENTARIO</h5>
                <div>
                    <i class="bi bi-envelope-fill"></i>
                    <i class="bi bi-bell-fill"></i>
                    <i class="bi bi-person-fill"></i>
                </div>
            </div>

            <!-- Tarjetas de resumen -->
            <div class="row mt-4 text-center">
                <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5>Total Inventario</h5>
                            <p class="card-text">Valor: $3,000,000</p>
                            <p>Total Artículos: 500</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5>Entradas de Artículos</h5>
                            <p class="card-text">Valor: $2,500,000</p>
                            <p>Total Entradas: 320</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-body">
                            <h5>Salidas de Artículos</h5>
                            <p class="card-text">Valor: $500,000</p>
                            <p>Total Salidas: 180</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-body">
                            <h5>Reportes Generados</h5>
                            <p class="card-text">5 Reportes</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gráficas -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <h5>Top Artículos por Inventario</h5>
                    <canvas id="topArticulosInventario"></canvas>
                </div>
                <div class="col-md-6">
                    <h5>Movimientos de Inventario</h5>
                    <canvas id="movimientosInventario"></canvas>
                </div>
            </div>

            <!-- Sección de botones -->
            <div class="row mt-4">
                <div class="col-md-12 d-flex justify-content-around">
                    <button class="btn btn-outline-dark">Proveedores</button>
                    <button class="btn btn-outline-dark">Artículos</button>
                    <button class="btn btn-outline-dark">Generar Informe</button>
                    <button class="btn btn-outline-dark">Exportar PDF</button>
                    <button class="btn btn-outline-dark">Historial de Movimientos</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gráficos con Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx1 = document.getElementById('topArticulosInventario').getContext('2d');
    var topArticulosInventario = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['Artículo 1', 'Artículo 2', 'Artículo 3'], // Datos estáticos, reemplazar con datos reales
            datasets: [{
                label: 'Cantidad',
                data: [50, 30, 100],
                backgroundColor: ['#3498DB', '#E74C3C', '#2ECC71'],
            }]
        }
    });

    var ctx2 = document.getElementById('movimientosInventario').getContext('2d');
    var movimientosInventario = new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: ['Entradas', 'Salidas'],
            datasets: [{
                label: 'Movimientos',
                data: [60, 40],
                backgroundColor: ['#3498DB', '#E74C3C'],
            }]
        }
    });
</script>


@endsection