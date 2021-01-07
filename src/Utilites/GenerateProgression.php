<?php

namespace Brain\Games\Utilites\Progression;

function generateProgression($firstElem, $lengthOfProgression)
{
    $progression = [];
    $progression[] = $firstElem;

    for ($i = 0; $i < $lengthOfProgression; $i += 1) {
        $progression[] = $progression[$i] + $firstElem;
    }

    return $progression;
}
