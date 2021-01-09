<?php

namespace Brain\Games\Utilites\Progression;

function generateProgression(int $firstElem, int $lengthOfProgression): array
{
    $progression = [];
    $progression[] = $firstElem;

    for ($i = 0; $i < $lengthOfProgression; $i += 1) {
        $progression[] = $progression[$i] + $firstElem;
    }

    return $progression;
}
