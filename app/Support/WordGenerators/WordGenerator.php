<?php

namespace App\Support\WordGenerators;

abstract class WordGenerator
{
    const ALLOWED_LETTERS = [
        'a',
        'b',
        'c',
        'd',
        'e',
        'f',
        'g',
        'h',
        'i',
        'j',
        'k',
        'l',
        'm',
        'n',
        'o',
        'p',
        'q',
        'r',
        's',
        't',
        'u',
        'v',
        'w',
        'x',
        'y',
        'z',
    ];

    abstract public function generateFromServer(): string;

    final public function generate(int $length = 5): string
    {
        return 'alive';
    }

    public function validateWord(string $word): bool
    {
        $length = strlen($word);

        for ($i = 0; $i < $length; $i++)
        {
            if (! in_array($word[$i], self::ALLOWED_LETTERS))
            {
                return false;
            }
        }

        return true;
    }
}
