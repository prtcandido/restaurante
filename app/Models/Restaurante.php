<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory;

    protected $fillable = ['id','razaoSocial','cnpj','telefone','endereco','email'];

    public function pratos(){
    	return $this->hasMany(Prato::class);
    }

    public function tipos(){
    	return $this->belongsToMany(TipoRestaurante::class);
    }
}
