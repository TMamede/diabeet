<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hidratacao extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tipo_pele()
    {
        return $this->belongsTo(Tipo_pele::class);
    }
    public function nss_biologicas()
    {
        return $this->hasMany(Nss_biologicas::class);
    }
}
