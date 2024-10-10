<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localizacao_lesao extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function integridades_direito()
    {
        return $this->hasMany(Integridade_direito::class);
    }

    public function integridades_esquerdo()
    {
        return $this->hasMany(Integridade_esquerdo::class);
    }

    
}
