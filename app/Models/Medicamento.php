<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pacientes()
    {
        return $this->belongsToMany(Paciente::class, 'medicamentos_paciente');
    }

    public function via(){
        return $this->belongsTo(Via::class);
    }

    public function horario_med(){
        return $this->belongsTo(HorarioMed::class);
    }
}
