<?php

include("/var/www/html/src/Codility.php");

use PHPUnit\Framework\TestCase;

final class CodilityTest extends TestCase
{

    /**
    * @dataProvider sequenceDigitsProvider
    **/
    public function testSequenceDigits($n, $expected)
    {
        $result = digits_sequence($n);
        echo PHP_EOL;
        echo "Result Expected of $n-th: ".$expected;
        echo PHP_EOL;
        echo 'Result: '.$result;
        echo PHP_EOL;
        $this->assertEquals(
            $expected,
            $result
        );
    }

    public static function sequenceDigitsProvider() {
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
            [11, 8],
        ];
    }
}
