<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionario extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function scopeSearch($query, $value)
{
    $query->whereHas('paciente', function ($query) use ($value) {
            $query->where('nome', 'like', "%{$value}%");
        })
        ->orWhereHas('user', function ($query) use ($value) {
            $query->where('name', 'like', "%{$value}%");
        })
        ->orWhereHas('unidade_saude', function ($query) use ($value) {
            $query->where('nome', 'like', "%{$value}%");
        });
}

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function unidade_saude()
    {
        return $this->belongsTo(Unidade_saude::class);
    }

    public function nss_biologica()
    {
        return $this->belongsTo(Nss_biologicas::class);
    }

    public function nss_sociais()
    {
        return $this->belongsTo(Nss_sociais::class);
    }

    public function nss_espiritual()
    {
        return $this->belongsTo(Nss_espirituais::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function prontuarios()
    {
        return $this->belongsToMany(Prontuario::class);
    }
}
