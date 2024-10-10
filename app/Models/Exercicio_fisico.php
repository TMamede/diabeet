<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercicio_fisico extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function frequencias_exercicio()
    {
        return $this->belongsTo(Frequencia_exercicio::class);
    }
    public function nss_biologicas()
    {
        return $this->hasMany(Nss_biologicas::class);
    }
}
