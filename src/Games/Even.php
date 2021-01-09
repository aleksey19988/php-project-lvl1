<?php

namespace Brain\Games\BrainEven;

use function Brain\Games\Utilites\IsEven\isEven;
use function Src\Brain\Games\Engine\runGame;

const RULES = 'Answer "yes" if the number is even, otherwise answer "no".';

function brainEven(): void
{
    $round = function (): array {
        $randomNum = random_int(0, 100);
        $result = (isEven($randomNum)) ? 'yes' : 'no';

        return [
            'question' => $randomNum,
            'correctAnswer' => $result,
        ];
    };

    runGame(RULES, $round);
}
