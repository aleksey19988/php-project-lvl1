<?php

namespace Brain\Games\BrainPrime;

use function Src\Brain\Games\Engine\runGame;

const TASK = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrimeNum(int $num): bool
{
    if ($num < 1) {
        return false;
    }
    for ($i = 2; $i < $num / 2; $i += 1) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function brainPrime(): void
{
    $generateRound = function (): array {
        $randomNum = random_int(2, 100);
        $result = (isPrimeNum($randomNum)) ? 'yes' : 'no';

        return [
            'question' => $randomNum,
            'correctAnswer' => $result,
        ];
    };

    runGame(TASK, $generateRound);
}
