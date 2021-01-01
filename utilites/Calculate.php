<?php

namespace Utilites\Brain\Calc\Calculate;

function calculate($firstNum, $secondNum, $operation)
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