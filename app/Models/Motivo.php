<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motivo extends Model
{
    use HasFactory;

    public function prontuarios()
    {
        return $this->belongsToMany(Prontuario::class,'prontuario_motivo');
    }
}
