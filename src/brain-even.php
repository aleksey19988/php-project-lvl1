<?php

namespace Brain\Games\BrainEven;

use function Utilites\IsEven\isEven;

const rules = 'Answer "yes" if the number is even, otherwise answer "no".';

function brainEven()
{
    return [
        'rules' => rules,
        'round' => function() {
            $randomNum = random_int(0, 100);
            $result = (isEven($randomNum)) ? 'yes' : 'no';

            return [
                'question' => $randomNum,
                'correctAnswer' => $result,
            ];
        }
    ];
};