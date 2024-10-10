<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulacao_hormonal extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function nss_biologicas()
    {
        return $this->hasMany(Nss_biologicas::class);
    }
}
