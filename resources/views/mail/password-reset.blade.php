@php
    // Tempo de expiração do link (minutos) a partir da config do Laravel
    $passwordBroker = config('auth.defaults.passwords');
    $expireMinutes = config("auth.passwords.$passwordBroker.expire", 60);
@endphp
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Redefinição de senha — SoPeP</title>
    <style>
        /* Preheader escondido */
        .preheader {
            display: none !important;
            visibility: hidden;
            opacity: 0;
            color: transparent;
            height: 0;
            width: 0;
            overflow: hidden;
            mso-hide: all;
        }

        /* Reset básico para alguns clientes */
        img {
            border: 0;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        table {
            border-collapse: collapse;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body style="margin:0; padding:0; background:#f5f7fb;">

    <!-- Preheader (texto que aparece na lista de e-mails) -->
    <div class="preheader">
        Link para redefinir sua senha do SoPeP. Expira em {{ $expireMinutes }} minutos.
    </div>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f5f7fb;">
        <tr>
            <td align="center" style="padding:24px 12px;">
                <!-- Container -->
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                    style="max-width:600px; background:#ffffff; border-radius:16px; overflow:hidden; box-shadow:0 4px 24px rgba(0,0,0,0.06);">
                    <!-- Header -->
                    <tr>
                        <td style="background:linear-gradient(90deg,#4f46e5,#2563eb); padding:20px 24px;"
                            align="left">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="left">
                                        <img src="{{ asset('bluepe.svg') }}" alt="SoPeP" width="120"
                                            style="display:block; max-width:120px; height:auto;" />
                                    </td>
                                    <td align="right"
                                        style="font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif; color:#E0E7FF; font-size:12px;">
                                        Sistema de Prescrição para Pé Diabético
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Título -->
                    <tr>
                        <td style="padding:28px 28px 0 28px;" align="left">
                            <h1
                                style="margin:0; font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size:22px; line-height:1.35; color:#0f172a; font-weight:700;">
                                Redefinição de senha
                            </h1>
                        </td>
                    </tr>

                    <!-- Saudação -->
                    <tr>
                        <td style="padding:12px 28px 0 28px;" align="left">
                            <p
                                style="margin:0; font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size:15px; line-height:1.6; color:#334155;">
                                Olá, <strong>{{ $user->name }}</strong>!
                            </p>
                        </td>
                    </tr>

                    <!-- Corpo -->
                    <tr>
                        <td style="padding:12px 28px 0 28px;" align="left">
                            <p
                                style="margin:0; font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size:15px; line-height:1.6; color:#334155;">
                                Recebemos uma solicitação para redefinir a sua senha de acesso ao
                                <strong>SoPeP</strong>.
                                Para continuar, clique no botão abaixo. Por segurança, este link expira em
                                <strong>{{ $expireMinutes }} minutos</strong>.
                            </p>
                        </td>
                    </tr>

                    <!-- Botão -->
                    <tr>
                        <td style="padding:20px 28px 8px 28px;" align="left">
                            <table role="presentation" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" bgcolor="#4f46e5" style="border-radius:12px;">
                                        <a href="{{ $url }}"
                                            style="display:inline-block; padding:12px 20px; font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size:15px; font-weight:600; color:#ffffff; background-color:#4f46e5; border:1px solid #4f46e5; border-radius:12px;">
                                            Definir nova senha
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Fallback URL -->
                    <tr>
                        <td style="padding:0 28px 0 28px;" align="left">
                            <p
                                style="margin:0; font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size:12px; line-height:1.6; color:#64748b;">
                                Se o botão não funcionar, copie e cole este link no seu navegador:
                                <br>
                                <a href="{{ $url }}"
                                    style="color:#2563eb; word-break:break-all;">{{ $url }}</a>
                            </p>
                        </td>
                    </tr>

                    <!-- Aviso -->
                    <tr>
                        <td style="padding:20px 28px 0 28px;" align="left">
                            <p
                                style="margin:0; font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size:13px; line-height:1.6; color:#334155;">
                                Não foi você quem solicitou? Você pode ignorar esta mensagem com segurança.
                            </p>
                        </td>
                    </tr>

                    <!-- Divider -->
                    <tr>
                        <td style="padding:24px 28px 0 28px;" align="left">
                            <hr style="border:none; border-top:1px solid #e5e7eb; margin:0;">
                        </td>
                    </tr>

                    <!-- Rodapé -->
                    <tr>
                        <td style="padding:16px 28px 28px 28px;" align="left">
                            <p
                                style="margin:0; font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size:12px; line-height:1.6; color:#64748b;">
                                © {{ date('Y') }} <strong>SoPeP</strong> — Sistema para acompanhamento e prescrição
                                em pé diabético.
                                <br>
                                Este e-mail foi enviado automaticamente. Não responda.
                            </p>
                        </td>
                    </tr>

                </table>
                <!-- /Container -->
            </td>
        </tr>
    </table>
</body>

</html>
