<?php

namespace App\Helpers;

class Badword
{
    public static function contains($text)
    {
        $badWords = include app_path('Badwords/pt-br.php');

        // normaliza caracteres especiais
        $normalized = strtolower(
            strtr($text, [
                '@' => 'a', '4' => 'a',
                '3' => 'e',
                '1' => 'i',
                '0' => 'o',
                '$' => 's'
            ])
        );

        foreach ($badWords as $word) {
            if (str_contains($normalized, $word)) {
                return true;
            }
        }

        return false;
    }
}
