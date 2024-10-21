<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restricao_alimento extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function nutricoes()
    {
        return $this->belongsToMany(Nutricao::class,'restricao_alimentos_nutricao');
    }
}
