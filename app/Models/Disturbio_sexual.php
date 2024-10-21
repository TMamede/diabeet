<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disturbio_sexual extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sexualidades()
    {
        return $this->belongsToMany(Sexualidade::class,'disturbios_sexualidade');
    }
}
