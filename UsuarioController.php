<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
		$usuarios = Usuario::all();
		
		return view('usuarios.index', compact('usuarios'));
	}
	public function criar()
	{
		return view('usuarios.crear');
	}
	
	public function salvar(Request $request)
	{
		Usuario::create([
		'nome' => $request->nome,
		'email' => $request->email,
		'senha' => $request->senha
		]);
		
		return redirect('/usuarios');
}		
	public function editar($id)
	{
		$usuario = Usuario::findOrFail($id);
		
		return view('usuarios.editar', compact('usuario'));
}
}
