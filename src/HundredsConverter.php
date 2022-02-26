<?php

namespace Kata;

class HundredsConverter
{
    public static function hundredsConverter(int $amount): string
    {
        $amount /=100;
        if ($amount == 4) {
            return 'CD';
        }
        if ($amount == 9) {
            return 'CM';
        }

        if ($amount >= 5) {
            return sprintf('D%s',str_repeat('C', $amount-5));
        }
        return str_repeat('C', $amount);
    }
}