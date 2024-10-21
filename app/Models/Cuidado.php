<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidado extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function emocionais()
    {
        return $this->belongsToMany(Emocional::class,'emocionals_cuidados');
    }
    public function nss_sociais()
    {
        return $this->hasMany(Nss_sociais::class);
    }
}
