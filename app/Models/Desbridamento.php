<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desbridamento extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cuidados_ferida()
    {
        return $this->hasMany(Cuidado_ferida::class);
    }
}
