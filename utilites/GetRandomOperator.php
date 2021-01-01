<?php

namespace Utilites\Brain\Calc\GetRandomOperator;

function getRandomOperator($operations)
{
    return $operations[array_rand($operations, 1)];
}