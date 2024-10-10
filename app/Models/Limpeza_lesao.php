<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Limpeza_lesao extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cuidados_ferida()
    {
        return $this->belongsToMany(Cuidado_ferida::class);
    }

    
}
