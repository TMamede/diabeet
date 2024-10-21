<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emocional extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cuidados()
    {
        return $this->belongsToMany(Cuidado::class,'emocionals_cuidados');
    }
}
