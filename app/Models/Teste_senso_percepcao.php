<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teste_senso_percepcao extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sensos_percepcao()
    {
        return $this->hasMany(Senso_percepcao::class);
    }
}
