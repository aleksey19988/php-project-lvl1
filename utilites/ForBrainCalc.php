<?php

namespace Utilites\Brain\Calc\Functions;

function getRandomOperator($operations)
{
    return $operations[array_rand($operations, 1)];
}

function getResultOfExpression($firstNum, $secondNum, $operation)
{
    switch($operation) {
        case '+':
            return ($firstNum + $secondNum);
            break;
        case '-':
            return ($firstNum - $secondNum);
            break;
        case '*':
            return ($firstNum * $secondNum);
            break;
    }
}