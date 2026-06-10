<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
	{
		return view('perfis.index');
	}
	public function editar()
	{
		return view('perfis.edit');
	}
}
