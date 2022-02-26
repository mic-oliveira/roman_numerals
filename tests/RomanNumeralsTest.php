<?php

use Kata\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    /**
     * @return void
     * @dataProvider number
     */
    public function test_convert_roman_numeral($number, $romanNumber)
    {
        $romanNumeral = new RomanNumerals();
        $result = $romanNumeral->convert($number);
        $this->assertEquals($romanNumber, $result);
    }

    public function number()
    {
        return [
            [1, 'I'],
            [5, 'V'],
            [10, 'X'],
            [50, 'L'],
            [100, 'C']
        ];
    }
}
