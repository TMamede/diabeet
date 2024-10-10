<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_diabetes extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function historicos()
    {
        return $this->hasMany(Historico::class);
    }
}
