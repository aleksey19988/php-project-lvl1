<?php

namespace Brain\Games\BrainEven;

use function Src\Brain\Games\Engine\runGame;

const TASK = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $num): bool
{
    return $num % 2 === 0;
}

function brainEven(): void
{
    $generateRound = function (): array {
        $randomNum = random_int(0, 100);
        $result = (isEven($randomNum)) ? 'yes' : 'no';

        return [
            'question' => $randomNum,
            'correctAnswer' => $result,
        ];
    };

    runGame(TASK, $generateRound);
}
