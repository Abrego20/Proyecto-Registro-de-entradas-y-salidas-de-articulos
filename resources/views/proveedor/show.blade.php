{{-- Heredamos la estructura del archivo app.blade.php --}}

@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Proveedor')

{{-- Definimos el contenido --}}
@section('content')
    <div class="container mt-5" style="background: #1a1a2e; border-radius: 20px; padding: 30px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);">
        <h2 class="text-center" style="color: #0fbcf9; font-family: 'Orbitron', sans-serif;">Lista de Proveedores</h2>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Fecha de Registro</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Proveedor 1</td>
                    <td>1234567890</td>
                    <td>Calle Ejemplo 123</td>
                    <td>2024-09-30</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Proveedor 2</td>
                    <td>0987654321</td>
                    <td>Avenida Ejemplo 456</td>
                    <td>2024-09-29</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
