<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comportamento_regulacao_neuro extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function regs_neuro()
    {
        return $this->hasMany(Regulacao_neuro::class);
    }
}
