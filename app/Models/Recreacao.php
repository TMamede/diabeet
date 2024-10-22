<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recreacao extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function nss_sociais()
    {
        return $this->belongsToMany(Nss_sociais::class);
    }
}
