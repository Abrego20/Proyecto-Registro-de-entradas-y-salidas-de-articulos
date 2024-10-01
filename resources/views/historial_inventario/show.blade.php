{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Historial de Inventario')

{{-- Definimos el contenido --}}
@section('content')

    <h5 class="text-center" style="color: #blue;">Historial Registrado</h5>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Registro</th>
                <th scope="col">Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ejemplo de fila de datos -->
            <tr>
                <td>2024-09-30</td>
                <td>Artículo A</td>
                <td>10</td>
                <td>
                    <button class="btn btn-warning btn-sm">Editar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td>2024-09-29</td>
                <td>Artículo B</td>
                <td>5</td>
                <td>
                    <button class="btn btn-warning btn-sm">Editar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
            </tr>
            <!-- Más filas se pueden agregar aquí -->
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
