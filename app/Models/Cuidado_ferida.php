<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidado_ferida extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function avaliacao_ferida()
    {
        return $this->belongsTo(Avaliacao_ferida::class);
    }

    public function desbridamento()
    {
        return $this->belongsTo(Desbridamento::class);
    }

    public function coberturas_ferida()
    {
        return $this->belongsToMany(Cobertura_ferida::class);
    }
    
    public function limpezas_lesao()
    {
        return $this->belongsToMany(Limpeza_lesao::class);
    }

    public function nss_biologicas()
    {
        return $this->hasMany(Nss_biologicas::class);
    }
}
