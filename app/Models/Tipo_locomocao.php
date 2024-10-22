<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_locomocao extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function locomocoes()
    {
        return $this->belongsToMany(Locomocao::class);
    }
}
