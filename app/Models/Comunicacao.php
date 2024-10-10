<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunicacao extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function nss_sociais()
    {
        return $this->hasMany(Nss_sociais::class);
    }
}
