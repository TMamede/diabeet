<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abrigo extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function nss_biologicas()
    {
        return $this->hasMany(Nss_biologicas::class);
    }
    public function zona_moradia()
    {
        return $this->belongsTo(Zona_moradia::class);
    }
    public function rede_esgoto()
    {
        return $this->belongsTo(Rede_esgoto::class);
    }
}
