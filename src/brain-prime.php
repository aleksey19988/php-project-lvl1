<?php

namespace Src\BrainPrime;

use function Utilites\PrimeNum\isPredicat;

function brainPrime()
{
    return [
        'rules' => 'Answer "yes" if given number is prime. Otherwise answer "no".',
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