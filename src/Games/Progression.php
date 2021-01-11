<?php

namespace Brain\Games\BrainProgression;

use function Src\Brain\Games\Engine\runGame;

const TASK = 'What number is missing in the progression?';
const MIN_LENGTH_OF_PROGRESSION = 5;

function generateProgression(int $firstElem, int $lengthOfProgression): array
{
    $progression = [];
    $progression[] = $firstElem;

    for ($i = 0; $i < $lengthOfProgression; $i += 1) {
        $progression[] = $progression[$i] + $firstElem;
    }

    return $progression;
}

function brainProgression(): void
{
    $generateRound = function (): array {
        $lengthOfProgression = random_int(MIN_LENGTH_OF_PROGRESSION, 14);
        $interval = random_int(1, 20);
        $progression = generateProgression($interval, $lengthOfProgression);

        $hiddenElementPosition = random_int(MIN_LENGTH_OF_PROGRESSION, $lengthOfProgression);
        $correctAnswer = $progression[$hiddenElementPosition];
        $progression[$hiddenElementPosition] = '..';

        return [
            'question' => implode(' ', $progression),
            'correctAnswer' => $correctAnswer,
        ];
    };

    runGame(TASK, $generateRound);
}
