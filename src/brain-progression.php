<?php

namespace Brain\Games\BrainProgression;

use function Utilites\Brain\Progression\Functions\generateProgression;

const rules = 'What number is missing in the progression?';
const minLengthOfProgression = 4;

function brainProgression()
{
    return [
        'rules' => rules,
        'round' => function() {
            $lengthOfProgression = random_int(minLengthOfProgression, 14);
            $interval = random_int(1, 20);
            $progression = generateProgression($interval, $lengthOfProgression);

            $positionHiddenElem = random_int(minLengthOfProgression, $lengthOfProgression);
            $correctAnswer = $progression[$positionHiddenElem];
            $progression[$positionHiddenElem] = '..';

            return [
                'question' => implode(' ', $progression),
                'correctAnswer' => $correctAnswer,
            ];
        }
    ];
}