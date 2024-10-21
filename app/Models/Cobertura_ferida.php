<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cobertura_ferida extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cuidados_ferida()
    {
        return $this->belongsToMany(Cuidado_ferida::class,'coberturas_cuidado');
    }
}
