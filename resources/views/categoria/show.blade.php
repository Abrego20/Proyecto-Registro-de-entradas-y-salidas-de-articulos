{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Lista de Categorías')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-5" style="background: #1a1a2e; border-radius: 20px; padding: 30px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);">
    <h1 class="text-center" style="color: #0fbcf9; font-family: 'Orbitron', sans-serif;">Lista de Categorías</h1>
    <hr style="border: 1px solid #0fbcf9;">

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Fecha Creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Categoría 1</td>
                <td>Descripción de la categoría 1</td>
                <td>2024-09-30</td>
                <td>
                    <button class="btn btn-warning btn-sm">Editar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td>Categoría 2</td>
                <td>Descripción de la categoría 2</td>
                <td>2024-09-29</td>
                <td>
                    <button class="btn btn-warning btn-sm">Editar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
            </tr>
            <!-- Puedes agregar más filas aquí -->
        </tbody>
    </table>
</div>
@endsection
