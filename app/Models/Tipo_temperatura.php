<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_temperatura extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function regulacoes_termica()
    {
        return $this->hasMany(Regulacao_termica::class);
    }
}
