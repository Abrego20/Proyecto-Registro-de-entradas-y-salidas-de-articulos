{{-- Heredemos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'Historial de Inventario')

{{-- Definimos el contenido --}}
@section('content')

<body>
<div class="container mt-5" style="background: #1a1a2e; border-radius: 20px; padding: 30px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);">
    <h2 class="text-center" style="color: #0fbcf9; font-family: 'Orbitron', sans-serif;">Actualizacion de Historial de Inventario</h2>
    <form class="mb-4">
        <div class="form-group">
            <label for="fecha" style="color: #f1f1f1;">Fecha</label>
            <input type="date" class="form-control" id="fecha" required style="background: transparent; border: 1px solid #0fbcf9; color: #f1f1f1;">
        </div>
        <div class="form-group">
            <label for="registro" style="color: #f1f1f1;">Registro</label>
            <input type="text" class="form-control" id="registro" placeholder="Ingresa el registro" required style="background: transparent; border: 1px solid #0fbcf9; color: #f1f1f1;">
        </div>
        <div class="form-group">
            <label for="cantidad" style="color: #f1f1f1;">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" placeholder="Ingresa la cantidad" required style="background: transparent; border: 1px solid #0fbcf9; color: #f1f1f1;">
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-block" style="background-color: #0fbcf9; border-radius: 30px;">Registrar</button>
    </form>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection