<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nss_sociais extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function questionarios()
    {
        return $this->hasMany(Questionario::class);
    }

    public function cuidado()
    {
        return $this->belongsTo(Cuidado::class);
    }

    public function comunicacao()
    {
        return $this->belongsTo(Comunicacao::class);
    }

    public function aprendizagem()
    {
        return $this->belongsTo(Aprendizagem::class);
    }

    public function recreacoes()
    {
        return $this->belongsToMany(Recreacao::class);
    }
}
