<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    use HasFactory;

    public function prontuarios()
    {
        return $this->belongsToMany(Prontuario::class,'prontuario_diagnostico');
    }

    public function intervencaos()
    {
        return $this->belongsToMany(Intervencao::class, 'diagnostico_intervencao');
    }
    
    public function motivos()
    {
        return $this->belongsToMany(Motivo::class,'motivo_diagnostico');
    }
}
