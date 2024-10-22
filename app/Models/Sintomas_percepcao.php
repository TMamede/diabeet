<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sintomas_percepcao extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sensos_percepcao()
    {
        return $this->belongsToMany(Senso_percepcao::class);
    }
}
