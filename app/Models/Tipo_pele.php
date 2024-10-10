<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_pele extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function hidratacoes()
    {
        return $this->hasMany(Hidratacao::class);
    }
}
