<?php


function digits_sequence($n) {

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

function sum_of_digits($n, &$cache)
{
    if(isset($cache[$n])){
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
