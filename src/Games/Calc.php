<?php

namespace Brain\Games\BrainCalc;

use function Src\Brain\Games\Engine\runGame;

const TASK = 'What is the result of the expression?';
const OPERATIONS = ['+', '-', '*'];

function calculate(int $firstNum, int $secondNum, string $operation): int
{
    $result = 0;

    switch ($operation) {
        case '+':
            $result = $firstNum + $secondNum;
            break;
        case '-':
            $result = $firstNum - $secondNum;
            break;
        case '*':
            $result = $firstNum * $secondNum;
    }

    return $result;
}

function brainCalc(): void
{
    $generateRound = function (): array {
        $firstNum = random_int(0, 100);
        $secondNum = random_int(0, 100);
        $operation = OPERATIONS[(int)array_rand(OPERATIONS, 1)];

        $result = calculate($firstNum, $secondNum, $operation);

        return [
            'question' => "{$firstNum} {$operation} {$secondNum}",
            'correctAnswer' => $result,
        ];
    };

    runGame(TASK, $generateRound);
}
