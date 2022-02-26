<?php

use Kata\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    public function test_convert_1_roman_numeral()
    {
        $romanNumeral = new RomanNumerals();
        $result = $romanNumeral->convert(1);
        $this->assertEquals('I', $result);
    }
}
