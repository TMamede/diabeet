<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analise_tato extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function percepcoes()
    {
        return $this->hasMany(Percepcao_sentido::class);
    }
}
