<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frequencia_exercicio extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function exercicios_fisico()
    {
        return $this->hasMany(Exercicio_fisico::class);
    }
}
