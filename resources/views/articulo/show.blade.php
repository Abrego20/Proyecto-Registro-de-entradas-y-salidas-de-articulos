{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Crear Artículo')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-5" style="background: #1a1a2e; border-radius: 20px; padding: 30px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);">
    <h1 class="text-center" style="color: #0fbcf9; font-family: 'Orbitron', sans-serif;">Lista de Artículos</h1>
    <h5 class="text-center" style="color: #a6a9b6; font-family: 'Roboto', sans-serif;">Artículos Registrados</h5>
    <hr style="border: 1px solid #0fbcf9;">

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Precio Unitario</th>
                <th scope="col">Stock Actual</th>
                <th scope="col">Descripción</th>
                <th scope="col">Fecha Creación</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ejemplo de fila de datos -->
            <tr>
                <td>Artículo 1</td>
                <td>$10.00</td>
                <td>100</td>
                <td>Descripción del artículo 1</td>
                <td>2024-09-30</td>
                <td>
                    <button class="btn btn-warning btn-sm">Editar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td>Artículo 2</td>
                <td>$15.50</td>
                <td>50</td>
                <td>Descripción del artículo 2</td>
                <td>2024-09-29</td>
                <td>
                    <button class="btn btn-warning btn-sm">Editar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
            </tr>
            <!-- Más filas se pueden agregar aquí -->
        </tbody>
    </table>
</div>
@endsection
