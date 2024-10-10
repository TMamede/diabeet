<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nss_biologicas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function questionarios()
    {
        return $this->hasMany(Questionario::class);
    }

    public function regulacao_neuro()
    {
        return $this->belongsTo(Regulacao_neuro::class);
    }

    public function percepcao_sentidos()
    {
        return $this->belongsTo(Percepcao_sentido::class);
    }

    public function hidratacao()
    {
        return $this->belongsTo(Hidratacao::class);
    }

    public function nutricao()
    {
        return $this->belongsTo(Nutricao::class);
    }

    public function sono()
    {
        return $this->belongsTo(Sono::class);
    }

    public function exercicio_fisico()
    {
        return $this->belongsTo(Exercicio_fisico::class);
    }

    public function abrigo()
    {
        return $this->belongsTo(Abrigo::class);
    }

    public function regulacao_hormonal()
    {
        return $this->belongsTo(Regulacao_hormonal::class);
    }

    public function oxigenacao()
    {
        return $this->belongsTo(Oxigenacao::class);
    }
    
    public function regulacao_termica()
    {
        return $this->belongsTo(Regulacao_termica::class);
    }
    
    public function sexualidade()
    {
        return $this->belongsTo(Sexualidade::class);
    }
    
    public function eliminacao()
    {
        return $this->belongsTo(Eliminacao::class);
    }

    public function locomocao()
    {
        return $this->belongsTo(Locomocao::class);
    }

    public function regulacao_vascular()
    {
        return $this->belongsTo(Regulacao_vascular::class);
    }

    public function senso_percepcao()
    {
        return $this->belongsTo(Senso_percepcao::class);
    }

    public function integridade_cutanea()
    {
        return $this->belongsTo(Integridade_cutanea::class);
    }

    public function cuidado_ferida()
    {
        return $this->belongsTo(Cuidado_ferida::class);
    }

    
}
