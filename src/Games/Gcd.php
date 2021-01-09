<?php

namespace Brain\Games\BrainGcd;

use function Brain\Games\Utilites\GetDivisors\getDivisors;
use function Src\Brain\Games\Engine\runGame;

const RULES = 'Find the greatest common divisor of given numbers.';

function gcd(int $a, int $b): int
{
    if ($b) {
        return gcd($b, $a % $b);
    } else {
        return $a;
    }
}

function brainGcd(): void
{
    $round = function (): array {
        $firstNum = random_int(2, 100);
        $secondNum = random_int(2, 100);
        $result = gcd($firstNum, $secondNum);

        return [
            'question' => "{$firstNum} {$secondNum}",
            'correctAnswer' => $result,
        ];
    };

    runGame(RULES, $round);
}
