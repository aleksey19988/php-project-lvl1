<?php

namespace Brain\Games\BrainPrime;

use function Brain\Games\Utilites\Prime\Num\isPredicat;
use function Src\Brain\Games\Engine\runGame;

const RULES = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function brainPrime()
{
    $round = function () {
        $randomNum = random_int(2, 100);
        $result = (isPredicat($randomNum)) ? 'yes' : 'no';

        return [
            'question' => $randomNum,
            'correctAnswer' => $result,
        ];
    };

    runGame(RULES, $round);
}
