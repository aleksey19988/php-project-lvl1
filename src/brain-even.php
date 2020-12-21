<?php

namespace Src\BrainEven;

use function Utilites\RandomNum\isEven;

function brainEven()
{
    return [
        'rules' => 'Answer "yes" if the number is even, otherwise answer "no".',
        'round' => function() {
            $randomNum = random_int(0, 100);
            $correctAnswer = (isEven($randomNum)) ? 'yes' : 'no';

            return [
                'question' => $randomNum,
                'correctAnswer' => $correctAnswer,
            ];
        }
    ];
};