<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        return (int)implode("", $digitsOfNumber1) + (int)implode("", $digitsOfNumber2);
    }

    public function isPalindrome(int $number): bool
    {
        $as_str = (string) $number;
        return strrev($as_str) == $as_str;
    }

    public function validate(string $input): string
    {
        if ($input === '') {
            return 'Required field';
        } else if (is_numeric((int)$input) && (int)$input > 0) {
            return '';
        } else {
            return 'Must be a whole number larger than 0';
        }
    }
}
