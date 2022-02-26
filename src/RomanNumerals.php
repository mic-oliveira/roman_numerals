<?php

namespace Kata;

class RomanNumerals
{
    public function convert(int $amount)
    {
        switch ($amount) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
                return UnitConverter::unitConverter($amount);
            case 10:
                return 'X';
            case 50:
                return 'L';
            case 100:
                return 'C';
            case 500:
                return 'D';
            case 1000:
                return 'M';
        }
    }
}
