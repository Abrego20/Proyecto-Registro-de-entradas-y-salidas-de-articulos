<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/informe/create', function () {
    return view('informe/create');
});

Route::get('/informe/show', function () {
    return view('informe/show');
});

Route::get('/informe/update', function () {
    return view('informe/update');
});

Route::get('/articulo/create', function () {
    return view('articulo/create');
});

Route::get('/articulo/show', function () {
    return view('articulo/show');
});

Route::get('/articulo/update', function () {
    return view('articulo/update');
});


Route::get('/entrada_de_articulo/create', function () {
    return view('entrada_de_articulo/create');
});

Route::get('/entrada_de_articulo/show', function () {
    return view('entrada_de_articulo/show');
});

Route::get('/entrada_de_articulo/update', function () {
    return view('entrada_de_articulo/update');
});

Route::get('/proveedor/create', function () {
    return view('proveedor/create');
});


Route::get('/proveedor/show', function () {
    return view('proveedor/show');
});

Route::get('/proveedor/update', function () {
    return view('proveedor/update');
});

Route::get('/categoria/create', function () {
    return view('categoria/create');
});

Route::get('/categoria/show', function () {
    return view('categoria/show');
});

Route::get('/categoria/update', function () {
    return view('categoria/update');
});

Route::get('/movimiento_inventario/create', function () {
    return view('movimiento_inventario/create');
});

Route::get('/movimiento_inventario/show', function () {
    return view('movimiento_inventario/show');
});


Route::get('/movimiento_inventario/update', function () {
    return view('movimiento_inventario/update');
});


Route::get('/salida_de_articulo/create', function () {
    return view('salida_de_articulo/create');
});

Route::get('/salida_de_articulo/show', function () {
    return view('salida_de_articulo/show');
});

Route::get('/salida_de_articulo/update', function () {
    return view('salida_de_articulo/update');
}); 

Route::get('/historial_inventario/create', function () {
    return view('historial_inventario/create');
});

Route::get('/historial_inventario/show', function () {
    return view('historial_inventario/show');
});

Route::get('/historial_inventario/update', function () {
    return view('historial_inventario/update');
});

Route::get('/inicio/create', function () {
    return view('inicio/create');
});

Route::get('/usuario/show', function () {
    return view('usuario/show');
});

Route::get('/usuario/create', function () {
    return view('usuario/create');
});

Route::get('/usuario/update', function () {
    return view('usuario/update');
});