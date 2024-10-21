<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integridade_cutanea extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function nss_biologicas()
    {
        return $this->hasMany(Nss_biologicas::class);
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
    public function integridade_direito()
    {
        return $this->belongsTo(Integridade_direito::class);
    }
    public function integridade_esquerdo()
    {
        return $this->belongsTo(Integridade_esquerdo::class);
    }
    public function sinais_infeccao()
    {
        return $this->belongsToMany(Sinais_infeccao::class,'sinais_integridade');
    }
}
