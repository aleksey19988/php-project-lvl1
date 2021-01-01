<?php

namespace Brain\Games\BrainEven;

use function Utilites\Brain\Even\IsEven\isEven;
use function Src\Brain\Games\Engine\runGame;

const RULES = 'Answer "yes" if the number is even, otherwise answer "no".';

function brainEven()
{
    $round = function() {
        $randomNum = random_int(0, 100);
        $result = (isEven($randomNum)) ? 'yes' : 'no';

        return [
            'question' => $randomNum,
            'correctAnswer' => $result,
        ];
    };

    return runGame(RULES, $round);
};