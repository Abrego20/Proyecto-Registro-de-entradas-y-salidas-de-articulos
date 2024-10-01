{{-- Heredamos la estructura del archivo app.blade.php --}}

@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Proveedor')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-5" style="background: #1a1a2e; border-radius: 20px; padding: 30px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);">
    <h2 class="text-center" style="color: #0fbcf9; font-family: 'Orbitron', sans-serif;">Actualizacion de Proveedor</h2>
    <form>
        <div class="form-group">
            <label for="nombre" style="color: #f1f1f1;">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre" required style="background: transparent; border: 1px solid #0fbcf9; color: #f1f1f1; border-radius: 10px;">
        </div>
        <div class="form-group">
            <label for="telefono" style="color: #f1f1f1;">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" placeholder="Ingresa tu teléfono" required style="background: transparent; border: 1px solid #0fbcf9; color: #f1f1f1; border-radius: 10px;">
        </div>
        <div class="form-group">
            <label for="direccion" style="color: #f1f1f1;">Dirección</label>
            <input type="text" class="form-control" id="direccion" placeholder="Ingresa tu dirección" required style="background: transparent; border: 1px solid #0fbcf9; color: #f1f1f1; border-radius: 10px;">
        </div>
        <div class="form-group">
            <label for="fechaRegistro" style="color: #f1f1f1;">Fecha de Registro</label>
            <input type="date" class="form-control" id="fechaRegistro" required style="background: transparent; border: 1px solid #0fbcf9; color: #f1f1f1; border-radius: 10px;">
        </div>
        <br>
        <button type="submit" class="btn" style="background-color: #0fbcf9; color: #1a1a2e; border-radius: 30px; padding: 10px 20px; font-family: 'Orbitron', sans-serif; font-size: 18px; box-shadow: 0 5px 15px rgba(15, 188, 249, 0.4);">Registrar</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
