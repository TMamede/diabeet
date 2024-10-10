<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }
    public function unidades_saude()
    {
        return $this->hasMany(Unidade_saude::class);
    }
}
