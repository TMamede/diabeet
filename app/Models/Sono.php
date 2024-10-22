<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sono extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function nss_biologicas()
    {
        return $this->hasMany(Nss_biologicas::class);
    }
    
    public function problemas_sono()
    {
        return $this->belongsToMany(Problema_sono::class);
    }

    public function qualidade_sono()
    {
        return $this->belongsTo(Qualidade_sono::class);
    }
}
