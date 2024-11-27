<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervencao extends Model
{
    use HasFactory;

    public function prontuarios()
    {
        return $this->belongsToMany(Prontuario::class,'prontuario_intervencao');
    }

    public function diagnosticos()
    {
        return $this->belongsToMany(Diagnostico::class, 'diagnostico_intervencao');
    }
}
