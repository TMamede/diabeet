<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origem extends Model
{
    use HasFactory;

    public function prontuarios()
    {
        return $this->belongsToMany(Prontuario::class,'prontuario_origem');
    }

    public function motivos()
    {
        return $this->hasMany(Motivo::class);
    }

}
