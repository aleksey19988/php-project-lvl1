<?php

namespace Utilites\Brain\Progression\Functions;

function generateProgression($firstElem, $lengthOfProgression)
{
    $progression = [];
    $progression[] = $firstElem;

    for ($i = 0; $i < $lengthOfProgression; $i += 1) {
        $progression[] = $progression[$i] + $firstElem;
    }

    return $progression;
}