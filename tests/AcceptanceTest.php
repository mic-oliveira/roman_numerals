<?php

use Kata\RomanNumerals;
use PHPUnit\Framework\TestCase;

class AcceptanceTest extends TestCase
{

    /**
     * @return void
     * @dataProvider number
     */
    public function test_convert_number($number, $romanNumber)
    {
        $romanNumeral = new RomanNumerals();
        $result  = $romanNumeral->convert($number);
        $this->assertEquals($romanNumber, $result);
    }

    public function number(): array
    {
        return [
            [4, 'IV'],
            [9, 'IX'],
            [29, 'XXIX'],
            [80, 'LXXX'],
            [294, 'CCXCIV'],
            [2000, 'MM'],
            [2019, 'MMXIX'],
            [2999, 'MMCMXCIX']
        ];
    }
}
