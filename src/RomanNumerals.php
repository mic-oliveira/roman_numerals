<?php

namespace Kata;

class RomanNumerals
{
    public function convert(int $amount)
    {
        if ($amount < 10) {
            $converter = new RomanNumberConverter();
            return $converter->converter($amount);
        }
        if (($amount % 10) === 0 && $amount < 100) {
            $converter = new RomanNumberConverter('X', 'L', 'C');
            return $converter->converter($amount/10);
        }

        if (($amount % 10) > 0 && $amount < 100 ) {
            $converter = new RomanNumberConverter('X', 'L', 'C');
            $number = $converter->converter($amount/10);

            $converter = new RomanNumberConverter();
            $number .= $converter->converter($amount%10);

            return $number;
        }
        switch ($amount) {
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
