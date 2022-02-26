<?php

namespace Kata;

class UnitConverter
{
    public static function unitConverter(int $amount): string
    {
        if ($amount >= 5) {
            return sprintf('V%s',str_repeat('I', $amount-5));
        }
        return str_repeat('I', $amount);
    }

}
