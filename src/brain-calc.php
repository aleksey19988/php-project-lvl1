<?php

namespace Brain\Games\BrainCalc;

use function Utilites\Brain\Calc\Functions\getRandomOperator;
use function Utilites\Brain\Calc\Functions\getResultOfExpression;


const rules = 'What is the result of the expression?';
const operations = ['+', '-', '*'];

function brainCalc()
{
    return [
        'rules' => rules,
        'round' => function() {
            $firstNum = random_int(0, 100);
            $secondNum = random_int(0, 100);
            $operation = getRandomOperator(operations);

            $result = getResultOfExpression($firstNum, $secondNum, $operation);

            return [
                'question' => "{$firstNum} {$operation} {$secondNum}",
                'correctAnswer' => $result,
            ];
        }
    ];
};