<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Mantido apenas para compatibilidade com a migration
 * 2024_09_13_121904_create_medicamentos_table, que referencia esta
 * classe via foreignIdFor() ao criar a coluna horario_med_id (removida
 * em seguida pela migration 2026_09_03_130200_remove_horario_med_from_medicamentos_table).
 * Não é usada em nenhum outro lugar do sistema.
 */
class HorarioMed extends Model
{
    protected $guarded = [];
}
