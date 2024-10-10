<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimento_consumo extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function nutricoes()
    {
        return $this->hasMany(Nutricao::class);
    }
}
