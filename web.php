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

Route::delete('/usuarios/{id}', [UsuarioController::class, 'excluir']);

Route::get('/perfis/criar', [PerfilController::class, 'criar']);

Route::post('/perfis', [PerfilController::class, 'salvar']);

Route::delete('/perfis/{id}', [PerfilController::class, 'excluir']);


