{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Crear Entrada de Artículo')

{{-- Definimos el contenido --}}
@section('content')

<div class="container mt-5" style="background: #1a1a2e; border-radius: 20px; padding: 30px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);">
    <h1 class="text-center" style="color: #0fbcf9; font-family: 'Orbitron', sans-serif;">Lista de Entradas de Artículos</h1>
    <h5 class="text-center" style="color: #a6a9b6; font-family: 'Roboto', sans-serif;">Artículos Registrados</h5>
    <hr style="border: 1px solid #0fbcf9;">

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Cantidad</th>
                <th scope="col">Costo Unitario</th>
                <th scope="col">Usuario Registro</th>
                <th scope="col">Fecha Entrada</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ejemplo de fila de datos -->
            <tr>
                <td>10</td>
                <td>$5.00</td>
                <td>Usuario1</td>
                <td>2024-09-30</td>
                <td>
                    <button class="btn btn-warning btn-sm">Editar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>$7.50</td>
                <td>Usuario2</td>
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

