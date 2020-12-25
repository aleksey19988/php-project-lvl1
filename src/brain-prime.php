<?php

namespace Brain\Games\BrainPrime;

use function Utilites\PrimeNum\isPredicat;

const rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function brainPrime()
{
    return [
        'rules' => rules,
        'round' => function() {
            $randomNum = random_int(2, 100);
            
            $result = (isPredicat($randomNum)) ? 'yes' : 'no';

            return [
                'question'=> $randomNum,
                'correctAnswer' => $result,
            ];
        },
    ];
};