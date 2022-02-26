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
            case 20:
            case 30:
            case 40:
            case 50:
            case 60:
            case 70:
            case 80:
            case 90:
                return TenConverter::tenConverter($amount);
            case 100:
            case 200:
            case 300:
            case 400:
            case 500:
            case 600:
            case 700:
            case 800:
            case 900:
                return HundredsConverter::hundredsConverter($amount);
            case 1000:
                return 'M';
        }
    }
}
