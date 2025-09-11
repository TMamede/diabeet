<?php

namespace App\Models;

use App\Services\MailpitHttp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Atributos liberados para atribuição em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'coren',
        'profile_photo',
        'user_type',
    ];

    /**
     * Atributos ocultos na serialização.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casts de atributos.
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

    // ========= Permissões / Tipos =========
    public function isGerenciador(): bool
    {
        return $this->user_type === 'gerenciador';
    }

    public function isEnfermeiro(): bool
    {
        return $this->user_type === 'enfermeiro';
    }

    // ========= Scopes / Acessors =========
    public function scopeSearch($query, $value)
    {
        $query->where('name', 'like', "%{$value}%")
            ->orWhere('coren', 'like', "%{$value}%"); // corrigido o like
    }

    public function getProfilePhotoUrlAttribute(): string
    {
        return $this->profile_photo
            ? asset('storage/profile/' . ltrim($this->profile_photo, '/')) // corrigido o path
            : asset('images/default-avatar.png');
    }

    // ========= Relacionamentos =========
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

    // ========= Reset de senha via API do Mailpit =========
    /**
     * Sobrescreve o envio do e-mail de reset de senha para usar a API HTTP do Mailpit.
     */
    public function sendPasswordResetNotification($token): void
    {
        // URL padrão do Laravel para o reset
        $url = route('password.reset', [
            'token' => $token,
            'email' => $this->email,
        ]);

        // Renderiza HTML por Blade se existir; senão usa um fallback simples
        if (view()->exists('mail.password-reset')) {
            $html = view('mail.password-reset', [
                'url'  => $url,
                'user' => $this,
            ])->render();
        } else {
            $html = <<<HTML
                <div style="font-family: system-ui, -apple-system, Segoe UI, Roboto, sans-serif">
                  <h2>Redefinição de senha</h2>
                  <p>Olá, {$this->name}!</p>
                  <p>Para definir uma nova senha, clique no link abaixo:</p>
                  <p><a href="{$url}">Definir nova senha</a></p>
                  <p style="color:#666">Se não foi você, ignore este e-mail.</p>
                </div>
            HTML;
        }

        $text = "Para redefinir sua senha do SoPeP, acesse: {$url}";

        try {
            /** @var MailpitHttp $client */
            $client = app(MailpitHttp::class);

            $resp = $client->send([
                "From"    => ["Email" => env('MAIL_FROM_ADDRESS'), "Name" => env('MAIL_FROM_NAME')],
                "To"      => [["Email" => $this->email, "Name" => $this->name]],
                "Subject" => "Redefinição de senha",
                "Text"    => $text,
                "HTML"    => $html,
                "Tags"    => ["password-reset", "sopep"],
            ]);

            if ($resp['status'] < 200 || $resp['status'] >= 300) {
                Log::warning('Falha ao enviar reset de senha via Mailpit API', $resp);
            }
        } catch (\Throwable $e) {
            Log::error('Erro ao enviar reset de senha via Mailpit API: ' . $e->getMessage(), [
                'user_id' => $this->id,
                'email'   => $this->email,
            ]);
        }
    }
}
