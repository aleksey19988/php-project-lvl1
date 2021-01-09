<?php

namespace Brain\Games\BrainCalc;

use function Src\Brain\Games\Engine\runGame;

const RULES = 'What is the result of the expression?';
const OPERATIONS = ['+', '-', '*'];

function calculate(int $firstNum, int $secondNum, string $operation)
{
    switch ($operation) {
        case '+':
            return ($firstNum + $secondNum);
        case '-':
            return ($firstNum - $secondNum);
        case '*':
            return ($firstNum * $secondNum);
    }
}

function getRandomOperator($operations)
{
    return $operations[array_rand($operations, 1)];
}

function brainCalc()
{
    $round = function () {
        $firstNum = random_int(0, 100);
        $secondNum = random_int(0, 100);
        $operation = getRandomOperator(OPERATIONS);

        $result = calculate($firstNum, $secondNum, $operation);

        return [
            'question' => "{$firstNum} {$operation} {$secondNum}",
            'correctAnswer' => $result,
        ];
    };

    runGame(RULES, $round);
}
