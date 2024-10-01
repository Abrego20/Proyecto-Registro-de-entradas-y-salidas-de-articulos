{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Crear Artículo')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-5" style="background: #1a1a2e; border-radius: 20px; padding: 30px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);">
    <h1 class="text-center" style="color: #0fbcf9; font-family: 'Orbitron', sans-serif;">Creación de Artículo</h1>
    <h5 class="text-center" style="color: #a6a9b6; font-family: 'Roboto', sans-serif;">Formulario de Artículos</h5>
    <hr style="border: 1px solid #0fbcf9;">

    <form class="row g-4">
        <div class="col-md-6">
            <label for="nombre" class="form-label" style="color: #f1f1f1;">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre del artículo" required style="background: transparent; border: 1px solid #0fbcf9; color: #f1f1f1; border-radius: 10px;">
        </div>
        <div class="col-md-6">
            <label for="precio" class="form-label" style="color: #f1f1f1;">Precio Unitario</label>
            <input type="number" class="form-control" id="precio" placeholder="Precio del artículo" required style="background: transparent; border: 1px solid #0fbcf9; color: #f1f1f1; border-radius: 10px;">
        </div>
        <div class="col-12">
            <label for="stock" class="form-label" style="color: #f1f1f1;">Stock Actual</label>
            <input type="text" class="form-control" id="stock" placeholder="Stock del artículo" required style="background: transparent; border: 1px solid #0fbcf9; color: #f1f1f1; border-radius: 10px;">
        </div>
        <div class="col-12">
            <label for="descripcion" class="form-label" style="color: #f1f1f1;">Descripción</label>
            <textarea class="form-control" id="descripcion" placeholder="Descripción del artículo" required style="background: transparent; border: 1px solid #0fbcf9; color: #f1f1f1; border-radius: 10px;"></textarea>
        </div>
        <div class="col-md-6">
            <label for="fecha_creacion" class="form-label" style="color: #f1f1f1;">Fecha Creación</label>
            <input type="date" class="form-control" id="fecha_creacion" required style="background: transparent; border: 1px solid #0fbcf9; color: #f1f1f1; border-radius: 10px;">
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn" style="background-color: #0fbcf9; color: #1a1a2e; border-radius: 30px; padding: 10px 20px; font-family: 'Orbitron', sans-serif; font-size: 18px; box-shadow: 0 5px 15px rgba(15, 188, 249, 0.4);">Guardar</button>
        </div>
    </form>
</div>
@endsection