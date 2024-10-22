<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinais_infeccao extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function integridades()
    {
        return $this->belongsToMany(Integridade_cutanea::class);
    }
}
