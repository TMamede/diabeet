<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problema_sono extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sonos()
    {
        return $this->belongsToMany(Sono::class,'problema_repouso');
    }
}
