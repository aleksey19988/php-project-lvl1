<?php

namespace Brain\Games\BrainProgression;

use function Brain\Games\Utilites\Progression\generateProgression;
use function Src\Brain\Games\Engine\runGame;

const RULES = 'What number is missing in the progression?';
const MINLENGTHOFPROGRESSION = 4;

function brainProgression()
{
    $round = function() {
        $lengthOfProgression = random_int(MINLENGTHOFPROGRESSION, 14);
        $interval = random_int(1, 20);
        $progression = generateProgression($interval, $lengthOfProgression);

        $positionHiddenElem = random_int(MINLENGTHOFPROGRESSION, $lengthOfProgression);
        $correctAnswer = $progression[$positionHiddenElem];
        $progression[$positionHiddenElem] = '..';

        return [
            'question' => implode(' ', $progression),
            'correctAnswer' => $correctAnswer,
        ];
    };

    return runGame(RULES, $round);
}