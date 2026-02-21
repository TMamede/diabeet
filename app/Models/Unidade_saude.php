<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade_saude extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeSearch($query, $value)
    {
        $query->where('nome', 'ilike', "%{$value}%");
    }

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }

    public function endereco()
    {
        return $this->belongsTo(Endereco::class);
    }
}
