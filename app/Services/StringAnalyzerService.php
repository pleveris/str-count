<?php

namespace App\Services;

class StringAnalyzerService
{

        public static function analyzeString(string $inputString): string
    {
        $letterOccurrences = self::countLetterOccurrences($inputString);

        $result = '';
        foreach ($letterOccurrences as $letter => $count) {
            $result .= $letter . ': ' . str_repeat('*', $count) . '\n';
        }

        return $result;
    }

    protected static function countLetterOccurrences(string $input): array
    {
        $letterOccurrences = [];

        $input = strtolower($input);

        foreach (str_split($input) as $letter) {
            if (ctype_alpha($letter)) {
                $letterOccurrences[$letter] = isset($letterOccurrences[$letter]) ? $letterOccurrences[$letter] + 1 : 1;
            }
        }

        return $letterOccurrences;
    }
}
