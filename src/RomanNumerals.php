<?php

namespace Kata;

class RomanNumerals
{
    public function convert(int $amount)
    {
        switch ($amount) {
            case 1:
                return 'I';
            case 5:
                return 'V';
        }
    }
}
