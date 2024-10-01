{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- definimos el titulo --}}
@section('title', 'Productos')


{{-- Definimos el contenido --}}
@section('content')


<div class="container mt-5" style="background-color: #1c1c1c; padding: 30px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Título del formulario -->
            <h1 class="text-center" style="color: #00bfff; font-size: 3rem;">Crear Usuario</h1>
            <hr style="border-top: 2px solid #00bfff;">

            <!-- Formulario -->
            <form action="/usuarios/store" method="POST">
                {{-- Protección CSRF --}}
                @csrf
                
                <!-- Campo de nombre -->
                <div class="form-group mb-3">
                    <label for="nombre" style="color: #fff;">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre completo">
                </div>

                <!-- Campo de email -->
                <div class="form-group mb-3">
                    <label for="email" style="color: #fff;">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico">
                </div>

                <!-- Campo de contraseña -->
                <div class="form-group mb-3">
                    <label for="password" style="color: #fff;">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                </div>

                <!-- Selección de rol -->
                <div class="form-group mb-3">
                    <label for="rol" style="color: #fff;">Rol</label>
                    <select name="rol" id="rol" class="form-control">
                        <option value="Administrador" style="background-color: #333; color: #fff;">Administrador</option>
                        <option value="Usuario" style="background-color: #333; color: #fff;">Usuario</option>
                    </select>
                </div>

                <!-- Botones -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg" style="background-color: #00bfff; border: none;">Crear Usuario</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="{{ asset('js/product.js') }}"></script>
@endsection
