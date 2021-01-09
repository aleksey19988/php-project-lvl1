<?php

namespace Brain\Games\BrainCalc;

use function Src\Brain\Games\Engine\runGame;

const RULES = 'What is the result of the expression?';
const OPERATIONS = ['+', '-', '*'];

function calculate(int $firstNum, int $secondNum, string $operation): int
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

function getRandomOperator(array $operations): string
{
    return $operations[array_rand($operations, 1)];
}

function brainCalc(): void
{
    $round = function (): array {
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
