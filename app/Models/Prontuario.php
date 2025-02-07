<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prontuario extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function questionario()
    {
        return $this->belongsTo(Questionario::class);
    }

    public function origens()
    {
        return $this->belongsToMany(Origem::class,'prontuario_origem');
    }

    public function motivos()
    {
        return $this->belongsToMany(Motivo::class,'prontuario_motivo');
    }
    
    public function diagnosticos()
    {
        return $this->belongsToMany(Diagnostico::class, 'prontuario_diagnostico');
    }

    public function intervencoes()
    {
        return $this->belongsToMany(Intervencao::class, 'prontuario_intervencao');
    }
    

}
