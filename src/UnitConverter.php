<?php

namespace Kata;

class UnitConverter
{

    public static function unitConverter(int $amount): string
    {
        $number = '';

        for ($i = 0; $i < $amount; $i++) {
            $number .= 'I';
        }

        return $number;
    }

}