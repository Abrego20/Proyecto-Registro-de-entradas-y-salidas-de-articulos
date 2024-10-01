{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Informe Productos')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-5" style="background: #1a1a2e; border-radius: 20px; padding: 30px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);">
    <h1 class="text-center" style="color: #0fbcf9; font-family: 'Orbitron', sans-serif;">Informe de Productos</h1>
    <h5 class="text-center" style="color: #a6a9b6; font-family: 'Roboto', sans-serif;">Lista de Informes</h5>
    <hr style="border: 1px solid #0fbcf9;">

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th style="color: #0fbcf9;">Detalle</th>
                <th style="color: #0fbcf9;">Fecha de Informe</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="color: #f1f1f1;">Detalles del producto 1</td>
                <td style="color: #f1f1f1;">2024-09-30</td>
                <td>
                <button class="btn btn-warning btn-sm">Editar</button>
                <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td style="color: #f1f1f1;">Detalles del producto 2</td>
                <td style="color: #f1f1f1;">2024-09-29</td>
                <td>
            <button class="btn btn-warning btn-sm">Editar</button>
            <button class="btn btn-danger btn-sm">Eliminar</button> 
            </td>
            </tr>
            
        </tbody>
    </table>
</div>
@endsection
