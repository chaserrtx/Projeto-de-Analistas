<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('index');
});

Route::get('/usuarios', function () {
	return view('usuarios.index');
});

Route::get('/usuarios/crear', function () {
	return view('usuarios.crear');
});

Route::get('/perfis', function () {
	return view('perfis.index');
});

Route::get('/perfis/editar', function () {
	return view('perfis.edit');
});
