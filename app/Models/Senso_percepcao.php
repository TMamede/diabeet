<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senso_percepcao extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function nss_biologicas()
    {
        return $this->hasMany(Nss_biologicas::class);
    }

    public function estado_unha()
    {
        return $this->belongsTo(Estado_unhas::class);
    }

    public function teste_sensopercepcao()
    {
        return $this->belongsTo(Teste_senso_percepcao::class);
    }

    public function sintomas_percepcao()
    {
        return $this->belongsToMany(Sintomas_percepcao::class,'sintomas_senso');
    }
}
