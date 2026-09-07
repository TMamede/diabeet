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
            $pattern = '/(?<![\p{L}\p{N}])' . preg_quote($word, '/') . '(?![\p{L}\p{N}])/u';
            if (preg_match($pattern, $normalized)) {
                return true;
            }
        }

        return false;
    }
}
