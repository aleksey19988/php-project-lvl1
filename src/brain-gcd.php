<?php

namespace Brain\Games\BrainGcd;

use function Utilites\Brain\Gcd\Functions\getDivisors;

const rules = 'Find the greatest common divisor of given numbers.';

function brainGcd() {
    return [
        'rules' => rules,
        'round' => function() {
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
        },
    ];
};