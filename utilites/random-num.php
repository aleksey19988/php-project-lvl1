<?php

namespace Utilites\RandomNum;

function randomNum()
{
    return random_int(0, 100);
}

function isEven($num) {
    return $num % 2 === 0;
}
