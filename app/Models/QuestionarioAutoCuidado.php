<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionarioAutoCuidado extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function alimenatacaoG()
    {
        return $this->belongsTo(AlimenatacaoG::class);
    }

    public function alimenatacaoE()
    {
        return $this->belongsTo(AlimenatacaoE::class);
    }

    public function atividadeFisica()
    {
        return $this->belongsTo(AtividadeFisica::class);
    }

    public function monitor()
    {
        return $this->belongsTo(Monitor::class);
    }

    public function cuidadoPes()
    {
        return $this->belongsTo(Cuidado_pes::class);
    }

    public function medicacao()
    {
        return $this->belongsTo(Medicacao::class);
    }

    public function tabagismo()
    {
        return $this->belongsTo(Tabagismo::class);
    }

    public function questionario()
    {
        return $this->belongsTo(Questionario::class);
    }
}
