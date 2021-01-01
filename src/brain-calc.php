<?php

namespace Brain\Games\BrainCalc;

use function Utilites\Brain\Calc\GetRandomOperator\getRandomOperator;
use function Utilites\Brain\Calc\Calculate\calculate;
use function Src\Brain\Games\Engine\runGame;


const RULES = 'What is the result of the expression?';
const OPERATIONS = ['+', '-', '*'];

function brainCalc()
{
    $round = function() {
        $firstNum = random_int(0, 100);
        $secondNum = random_int(0, 100);
        $operation = getRandomOperator(OPERATIONS);

        $result = calculate($firstNum, $secondNum, $operation);

        return [
            'question' => "{$firstNum} {$operation} {$secondNum}",
            'correctAnswer' => $result,
        ];
    };

    return runGame(RULES, $round);
};