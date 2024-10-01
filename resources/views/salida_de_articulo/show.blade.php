{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Salida de Artículo')

{{-- Definimos el contenido --}}
@section('content')
    <div class="container mt-5" style="background: #1a1a2e; border-radius: 20px; padding: 30px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);">
        <h2 class="text-center" style="color: #0fbcf9; font-family: 'Orbitron', sans-serif;">Lista de Salidas de Artículos</h2>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio Venta</th>
                    <th scope="col">Usuario Registro</th>
                    <th scope="col">Fecha Salida</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10</td>
                    <td>$200.00</td>
                    <td>Usuario1</td>
                    <td>2024-09-30</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Eliminar</button> 
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>$150.00</td>
                    <td>Usuario2</td>
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
