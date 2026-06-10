<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfils';
    protected $fillable = [
		'biografia',
		'telefone',
		'usuario_id'
    ];
    
    public function usuario()
    {
		return $this->belongsTo(Usuario::class);
	}
}
