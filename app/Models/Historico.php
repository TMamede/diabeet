<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }
    public function tipo_diabetes()
    {
        return $this->belongsTo(Tipo_diabetes::class);
    }
    public function comorbidades()
    {
        return $this->belongsToMany(Comorbidade::class);
    }
    public function alergias()
    {
        return $this->belongsToMany(Alergia::class);
    }
    
}
