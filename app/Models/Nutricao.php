<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutricao extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function nss_biologicas()
    {
        return $this->hasMany(Nss_biologicas::class);
    }

    public function alimento_consumo()
    {
        return $this->belongsTo(Alimento_consumo::class);
    }

    public function refeicoes()
    {
        return $this->belongsToMany(Refeicao::class);
    }

    public function restricoes_alimentar()
    {
        return $this->belongsToMany(Restricao_alimento::class);
    }
}
