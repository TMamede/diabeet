<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionarioQualidade extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function satisfacao()
    {
        return $this->belongsTo(Satisfacao::class);
    }
    public function impacto()
    {
        return $this->belongsTo(Impacto::class);
    }
    public function preoDiabete()
    {
        return $this->belongsTo(PreoDiabete::class);
    }
    public function questionario()
    {
        return $this->belongsTo(Questionario::class);
    }
}
