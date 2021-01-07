<?php

namespace Brain\Games\BrainGcd;

use function Brain\Games\Utilites\GetDivisors\getDivisors;
use function Src\Brain\Games\Engine\runGame;

const RULES = 'Find the greatest common divisor of given numbers.';

function gcd ($a, $b) {
    return $b ? gcd($b, $a % $b) : $a;
}

function brainGcd()
{
    $round = function () {
        $firstNum = random_int(2, 100);
        $secondNum = random_int(2, 100);
        // $firstNumDivisors = getDivisors($firstNum);
        // $secondNumDivisors = getDivisors($secondNum);

        // $commonDivisors = array_intersect($firstNumDivisors, $secondNumDivisors);
        // $result = max($commonDivisors);
        $result = array_reduce(array($firstNum, $secondNum), 'gcd');

        return [
            'question' => "{$firstNum} {$secondNum}",
            'correctAnswer' => $result,
        ];
    };

    runGame(RULES, $round);
}
