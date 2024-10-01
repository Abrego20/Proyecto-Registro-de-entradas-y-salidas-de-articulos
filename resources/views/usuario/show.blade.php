{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- definimos el titulo --}}
@section('title', 'Productos')


{{-- Definimos el contenido --}}
@section('content')

<div class="container mt-5" style="background-color: #1c1c1c; padding: 30px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
    <div class="row">
        <div class="col-md-12">
            <!-- Título y botón para agregar usuario -->
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="text-center" style="color: #00bfff; font-size: 3rem;">Usuarios</h1>
                <a class="btn btn-primary btn-lg" href="/usuarios/create" style="background-color: #00bfff; border: none;">
                    <i class="bi bi-person-plus"></i> Agregar Usuario
                </a>
            </div>
            <hr style="border-top: 2px solid #00bfff;">

            <!-- Tabla de usuarios -->
            <div class="table-responsive">
                <table class="table table-dark table-hover">
                    <thead style="background-color: #00bfff;">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Fecha de Registro</th>
                            <th scope="col" class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Juan Pérez</td>
                            <td>juan.perez@example.com</td>
                            <td>Administrador</td>
                            <td>2024-09-25</td>
                            <td class="text-center">
                                <div class="btn-group" role="group" aria-label="Acciones">
                                    <a class="btn btn-warning btn-sm me-2" href="/usuarios/update">
                                        <i class="bi bi-pencil-square"></i> Modificar
                                    </a>
                                    <button class="btn btn-danger btn-sm" onclick="confirmDelete('{{ csrf_token() }}')">
                                        <i class="bi bi-trash"></i> Eliminar
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Ana Gómez</td>
                            <td>ana.gomez@example.com</td>
                            <td>Usuario</td>
                            <td>2024-09-20</td>
                            <td class="text-center">
                                <div class="btn-group" role="group" aria-label="Acciones">
                                    <a class="btn btn-warning btn-sm me-2" href="/usuarios/update">
                                        <i class="bi bi-pencil-square"></i> Modificar
                                    </a>
                                    <button class="btn btn-danger btn-sm" onclick="confirmDelete('{{ csrf_token() }}')">
                                        <i class="bi bi-trash"></i> Eliminar
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Alert de confirmación -->
            <div id="confirm-delete-alert" class="alert alert-warning alert-dismissible fade d-none" role="alert" style="background-color: #333; border-color: #ff0000;">
                <strong>¿Estás seguro?</strong> Estás a punto de eliminar un usuario.
                <button type="button" class="btn btn-danger" id="confirm-delete-btn">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="alert" aria-label="Close">Cancelar</button>
            </div>

        </div>
    </div>
</div>



@endsection

@section('scripts')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="{{ asset('js/product.js') }}"></script>
@endsection
