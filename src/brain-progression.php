<?php

namespace Src\BrainProgression;

function brainProgression()
{
    return [
        'rules' => 'What number is missing in the progression?',
        'round' => function() {
            $progression = [];
            $lengthOfProgression = random_int(4, 14);
            $interval = random_int(1, 20);
            $progression[] = $interval;
            
            for ($i = 0; $i < $lengthOfProgression; $i += 1) {
                $progression[] = $progression[$i] + $interval;
            }

            $positionHiddenElem = random_int(4, $lengthOfProgression);
            $correctAnswer = $progression[$positionHiddenElem];
            $progression[$positionHiddenElem] = '..';

            return [
                'question' => implode(' ', $progression),
                'correctAnswer' => $correctAnswer,
            ];
        }
    ];
}