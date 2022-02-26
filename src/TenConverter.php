<?php

namespace Kata;

class TenConverter
{
    public static function tenConverter(int $amount): string
    {
        $amount /=10;
        if ($amount == 4) {
            return 'XL';
        }
        if ($amount == 9) {
            return 'XC';
        }

        if ($amount >= 5) {
            return sprintf('L%s',str_repeat('X', $amount-5));
        }
        return str_repeat('X', $amount);
    }
}
