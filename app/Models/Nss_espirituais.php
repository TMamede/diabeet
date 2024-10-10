<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nss_espirituais extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function questionarios()
    {
        return $this->hasMany(Questionario::class);
    }
}
