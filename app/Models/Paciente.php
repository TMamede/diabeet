<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function scopeSearch($query, $value)
    {
        $query->where('nome', 'like', "%{$value}%")->orWhereHas('user', function ($query) use ($value) {
            $query->where('name', 'like', "%{$value}%");
        });
    }

    public function questionarios()
    {
        return $this->hasMany(Questionario::class);
    }
    public function orientacao_sexual()
    {
        return $this->belongsTo(Orientacao_sexual::class);
    }
    public function estado_civil()
    {
        return $this->belongsTo(Estado_civil::class);
    }
    public function etnia()
    {
        return $this->belongsTo(Etnia::class);
    }
    public function endereco()
    {
        return $this->belongsTo(Endereco::class);
    }
    public function beneficio()
    {
        return $this->belongsTo(Beneficio::class);
    }
    public function reside()
    {
        return $this->belongsTo(Reside::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function historico()
    {
        return $this->belongsTo(Historico::class);
    }
    public function medicamentos()
    {
        return $this->belongsToMany(Medicamento::class, 'medicamentos_paciente');
    }
    public function resultados()
    {
        return $this->hasMany(Resultado::class);
    }
}
