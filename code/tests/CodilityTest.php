<?php

include("/var/www/html/src/Codility.php");

use PHPUnit\Framework\TestCase;

final class CodilityTest extends TestCase
{

    /**
    * 001. BinaryGap
    * @dataProvider binaryGapProvider
    **/
    public function testBinaryGap($N, $expected)
    {
        $result = digits_sequence($N);
        echo PHP_EOL;
        echo "{$N}-th: ";
        echo PHP_EOL;
        echo 'Result Expected: '.$expected;
        echo PHP_EOL;
        echo 'Result: '.$result;
        echo PHP_EOL;
        $this->assertEquals(
            $expected,
            $result
        );
    }
    public static function binaryGapProvider() {
        return [
            [0, 0],
            [1, 1],
            [2, 1],
            [3, 2],
            [4, 3],
            [5, 5],
            [6, 8],
            [7, 13],
            [8, 12],
            [9, 7],
            [10, 10],
        ];
    }



}
