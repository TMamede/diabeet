<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integridade_direito extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function regiao_pe()
    {
        return $this->belongsTo(Regiao_pe::class);
    }

    public function localizacao_lesao()
    {
        return $this->belongsTo(Localizacao_lesao::class);
    }

    public function integridades_cutanea()
    {
        return $this->hasMany(Integridade_cutanea::class);
    }
}
