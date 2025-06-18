<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integridade_cutanea extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function nss_biologica() 
    { 
         return $this->belongsTo(Nss_biologicas::class); 
    }
    public function borda_ferida()
    {
        return $this->belongsTo(Bordas_ferida::class);
    }
    public function quantidade_exudato()
    {
        return $this->belongsTo(Quantidade_exudato::class);
    }
    public function profundidade()
    {
        return $this->belongsTo(Profundidade::class);
    }
    public function aspecto_exudato()
    {
        return $this->belongsTo(Aspecto_exudato::class);
    }
    public function tipo_tecido_ferida()
    {
        return $this->belongsTo(Tipo_tecido_ferida::class);
    }
    public function pele_periferida()
    {
        return $this->belongsTo(Pele_periferida::class);
    }
    public function sinaisInfeccaoDireito()
{
    return $this->belongsToMany(Sinais_infeccao::class, 'sinais_integridade')
        ->withPivot('lado')
        ->wherePivot('lado', 'direito');
}

public function sinaisInfeccaoEsquerdo()
{
    return $this->belongsToMany(Sinais_infeccao::class, 'sinais_integridade')
        ->withPivot('lado')
        ->wherePivot('lado', 'esquerdo');
}
}
