<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionario extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function scopeSearch($query, $value)
    {
        $query->whereHas('paciente', function ($query) use ($value) {
            $query->where('nome', 'like', "%{$value}%");
        })
            ->orWhereHas('user', function ($query) use ($value) {
                $query->where('name', 'like', "%{$value}%");
            });
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function nss_biologica()
    {
        return $this->belongsTo(Nss_biologicas::class, 'nss_biologicas_id');
    }

    public function nss_sociais()
    {
        return $this->belongsTo(Nss_sociais::class);
    }

    public function nss_espiritual()
    {
        return $this->belongsTo(Nss_espirituais::class, 'nss_espirituais_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function prontuario()
    {
        return $this->hasOne(Prontuario::class);
    }

    public function autocuidado()
    {
        return $this->hasOne(QuestionarioAutoCuidado::class);
    }

    public function qualidade()
    {
        return $this->hasOne(QuestionarioQualidade::class);
    }
}
