<?php

namespace Kata;

class RomanNumerals
{
    public function convert(int $amount)
    {
        $romanNumber = '';
        if (($amount / 1000) > 1) {
            $converter = new RomanNumberConverter('M', 'D', 'M');
            $romanNumber .= $converter->converter($amount /1000);
            $amount %=1000;
        }
        if (($amount / 100) > 1) {
            $converter = new RomanNumberConverter('C', 'D', 'M');
            $romanNumber .= $converter->converter($amount /100);
            $amount %=100;
        }
        if (($amount / 10) > 1) {
            $converter = new RomanNumberConverter('X', 'L', 'C');
            $romanNumber .= $converter->converter($amount / 10);
            $amount %=10;
        }
        $converter = new RomanNumberConverter();
        $romanNumber .= $converter->converter($amount);

        return $romanNumber;
    }
}
