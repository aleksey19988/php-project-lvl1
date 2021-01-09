<?php

namespace Src\Brain\Games\Engine;

use function Brain\Games\Cli\greeting;
use function cli\line;
use function cli\prompt;

function runGame($rules, $round, int $attempts = 3)
{
    $name = greeting();
    line($rules);

    for ($i = 0; $i < $attempts; $i += 1) {
        ['question' => $question, 'correctAnswer' => $correctAnswer] = $round();

        line("Question: {$question}\n");
        $answer = prompt('Your answer');

        if ($answer === (string) $correctAnswer) {
            line("Correct!\n");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'\nLet's try again, {$name}!");
            return;
        }
    }
    line("Congratulations, {$name}!\n");
}
