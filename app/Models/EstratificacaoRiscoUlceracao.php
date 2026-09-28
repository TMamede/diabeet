<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstratificacaoRiscoUlceracao extends Model
{
    use HasFactory;

    protected $table = 'estratificacoes_risco_ulceracao';

    protected $guarded = ['id'];

    protected $casts = [
        'psp' => 'boolean',
        'dap' => 'boolean',
        'deformidade_pe' => 'boolean',
        'historico_ulcera_pe' => 'boolean',
        'amputacao_previa' => 'boolean',
        'doenca_renal_terminal' => 'boolean',
        'risco' => 'integer',
    ];

    public function questionario()
    {
        return $this->belongsTo(Questionario::class);
    }
}
