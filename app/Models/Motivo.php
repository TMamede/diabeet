<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motivo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function prontuarios()
    {
        return $this->belongsToMany(Prontuario::class, 'prontuario_motivo');
    }

    public function origem()
    {
        return $this->belongsTo(Origem::class);
    }

    public function diagnosticos()
    {
        return $this->belongsToMany(Diagnostico::class, 'motivo_diagnostico');
    }
}
