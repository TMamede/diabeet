<?php

namespace App\Services;

use GuzzleHttp\Client;
use RuntimeException;

class MailpitHttp
{
    private string $endpoint;
    private Client $client;

    public function __construct(?Client $client = null)
    {
        $raw = env('MAILPIT_API_URL', 'http://127.0.0.1:8025/api/v1/send');
        $this->endpoint = trim($raw, " \t\n\r\0\x0B\"'"); // remove aspas/espaços

        if (!preg_match('#^https?://#i', $this->endpoint)) {
            throw new RuntimeException('MAILPIT_API_URL inválida: '.$this->endpoint);
        }

        $this->client = $client ?: new Client([
            'http_errors' => false,
            'timeout'     => 10,
        ]);
    }

    public function send(array $payload): array
    {
        $options = ['json' => $payload];

        $user = env('MAILPIT_API_USER');
        $pass = env('MAILPIT_API_PASS');
        if (!empty($user) && !empty($pass)) {
            $options['auth'] = [$user, $pass];
        }

        $res = $this->client->post($this->endpoint, $options);

        return [
            'status' => $res->getStatusCode(),
            'body'   => json_decode((string) $res->getBody(), true),
        ];
    }
}
