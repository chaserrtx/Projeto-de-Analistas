<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use App\Models\Usuario;

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
	
	public function salvar(Request $request)
	{
		Perfil::create([
			'usuario_id' => $request->usuario_id,
			'telefone' => $request->telefone,
			'biografia' => $request->biografia		
		]);
		return redirect('/perfis');
	}
	
	public function excluir($id)
	{
		Perfil::findOrFail($id)->delete();
		return redirect('/perfis');
	}
}
