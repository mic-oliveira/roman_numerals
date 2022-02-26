<?php

namespace Kata;

class RomanNumberConverter
{
    public function __construct(private string $unitSymbol = 'I', private string $middleSymbol = 'V', private string $postSymbol = 'X')
    {
    }

    public function converter(int $amount): string
    {
        if ($amount == 4) {
            return sprintf('%s%s', $this->unitSymbol, $this->middleSymbol);
        }
        if ($amount == 9) {
            return sprintf('%s%s', $this->unitSymbol, $this->postSymbol);
        }

        if ($amount >= 5) {
            return sprintf('%s%s', $this->middleSymbol,str_repeat($this->unitSymbol, $amount-5));
        }
        return str_repeat($this->unitSymbol, $amount);
    }
}
