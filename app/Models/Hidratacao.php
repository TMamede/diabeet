<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hidratacao extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tipos_pele()
    {
        return $this->belongsToMany(Tipo_pele::class, 'hidratacao_tipo_pele');
    }
    public function nss_biologicas()
    {
        return $this->hasMany(Nss_biologicas::class);
    }
}
