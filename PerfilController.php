<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;

class PerfilController extends Controller
{
    public function index()
	{
		$perfis = Perfil::with('usuario')->get();
		return view('perfis.index', compact('perfis'));
	}
	public function editar()
	{
		return view('perfis.edit');
	}
	
	public function criar()
	{
		$usuarios = Usuario::all();
		
		return view('perfis.edit', compact('usuarios'));
	
}
