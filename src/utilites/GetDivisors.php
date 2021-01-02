<?php

namespace Brain\Games\Utilites\GetDivisors;

function getDivisors($num) {
    $result = [];

    for($i = 1; $i < $num; $i += 1) {
        if ($num % $i === 0) {
            $result[] = $i;
        }
    };

    return $result;
}