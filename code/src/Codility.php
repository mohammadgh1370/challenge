<?php

// given an integer `n`, returns the `n`-th element of the sequence
function digits_sequence(int $n): int
{
    if ($n < 1) {
        return 0;
    }
    if ($n <= 2) {
        return 1;
    }

    $cache = [];
    $prev1 = 1;
    $prev2 = 1;
    $result = 0;

    for ($i = 2; $i < $n; $i++) {
        $result = sum_of_digits($prev1, $cache) + sum_of_digits($prev2, $cache);
        $prev1 = $prev2;
        $prev2 = $result;
    }

    return $result;
}

// sum digits of number
function sum_of_digits(int $n, array &$cache): int
{
    if (isset($cache[$n])) {
        return $cache[$n];
    }
    $num = $n;
    $sum = 0;
    while ($num != 0) {
        $sum += $num % 10;
        $num = (int) ($num / 10);
    }
    $cache[$n] = $sum;
    return $sum;
}
