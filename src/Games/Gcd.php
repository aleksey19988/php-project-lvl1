<?php

namespace Brain\Games\BrainGcd;

use function Src\Brain\Games\Engine\runGame;

const TASK = 'Find the greatest common divisor of given numbers.';

function gcd(int $a, int $b): int
{
    if ($b !== 0) {
        return gcd($b, $a % $b);
    }
    return $a;
}

function brainGcd(): void
{
    $generateRound = function (): array {
        $firstNum = random_int(2, 100);
        $secondNum = random_int(2, 100);
        $result = gcd($firstNum, $secondNum);

        return [
            'question' => "{$firstNum} {$secondNum}",
            'correctAnswer' => $result,
        ];
    };

    runGame(TASK, $generateRound);
}
