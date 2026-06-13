<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PerfilController;

Route::get('/', function () {
	return view('index');
});

Route::get('/usuarios', 
[UsuarioController::class, 'index']);

Route::get('/usuarios/criar', 
[UsuarioController::class, 'criar']);

Route::post('/usuarios', [UsuarioController::class, 'salvar']);

Route::get('/perfis', [PerfilController::class, 'index']);

Route::get('/perfis/editar', [PerfilController::class, 'editar']);

Route::get('/usuarios/{id}/editar', [UsuarioController::class, 'editar']);

