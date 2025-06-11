<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade_saude extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeSearch($query, $value){
        $query->where('nome', 'like', "%{$value}%");
    }

    public function questionarios()
    {
        return $this->hasMany(Questionario::class);
    }

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }
}
