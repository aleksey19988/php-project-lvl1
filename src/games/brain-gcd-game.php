<?php

namespace Brain\Games\BrainGcd;

use function Brain\Games\Utilites\GetDivisors\getDivisors;
use function Src\Brain\Games\Engine\runGame;

const RULES = 'Find the greatest common divisor of given numbers.';

function brainGcd() 
{
    $round = function() {
        $firstNum = random_int(2, 100);
        $secondNum = random_int(2, 100);
        $firstNumDivisors = getDivisors($firstNum);
        $secondNumDivisors = getDivisors($secondNum);

        $commonDivisors = array_intersect($firstNumDivisors, $secondNumDivisors);
        $result = max($commonDivisors);

        return [
            'question' => "{$firstNum} {$secondNum}",
            'correctAnswer' => $result,
        ];
    };

    return runGame(RULES, $round);
};