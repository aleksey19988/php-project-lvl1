<?php

namespace Src\BrainCalc;

function brainCalc()
{
    return [
        'rules' => 'What is the result of the expression?',
        'round' => function() {
            $operations = ['+', '-', '*'];
            $firstNum = random_int(0, 100);
            $secondNum = random_int(0, 100);
            $operation = $operations[array_rand($operations, 1)];

            switch($operation) {
                case '+':
                    $correctAnswer = $firstNum + $secondNum;
                    break;
                case '-':
                    $correctAnswer = $firstNum - $secondNum;
                    break;
                case '*':
                    $correctAnswer = $firstNum * $secondNum;
                    break;
            }
                return [
                    'question' => "{$firstNum} {$operation} {$secondNum}",
                    'correctAnswer' => $correctAnswer,
                ];
        }
    ];
};