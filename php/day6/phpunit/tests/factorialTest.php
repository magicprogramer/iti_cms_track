<?php
require (__DIR__.'/../src/factorial.php');

use PHPUnit\Framework\TestCase;

class factorialTest extends TestCase
{
    public function testFactorial()
    {
        // Test cases
        $factorial = new Factorial();
       // echo $factorial->fact(5);
        $testCases = [
            0 => 1,
            1 => 1,
            5 => 120,
            10 => 3628800,
            "abc" => null,
            -3 => null,
            false => null,
            "1.5" => null
        ];

        foreach ($testCases as $input => $expected) {
            if ($expected)
                $this->assertEquals($expected, $factorial->fact($input));
            else
                $this->assertNull($factorial->fact($input));
        }
    }
}
