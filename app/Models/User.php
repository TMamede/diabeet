<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'coren',
        'profile_photo',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function isGerenciador()
    {
        return $this->user_type === 'gerenciador';
    }

    public function isEnfermeiro()
    {
        return $this->user_type === 'enfermeiro';
    }

    public function scopeSearch($query, $value)
    {
        $query->where('name', 'like', "%{$value}%")
            ->orWhere('coren', 'like', "%%{$value}%"); 
    }

    public function getProfilePhotoUrlAttribute()
{
    return $this->profile_photo
        ? asset('storage/profile' . $this->profile_photo)
        : asset('images/default-avatar.png');
}

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }

    public function questionarios()
    {
        return $this->hasMany(Questionario::class);
    }

    public function contatos()
    {
        return $this->hasMany(Contato::class);
    }
}
