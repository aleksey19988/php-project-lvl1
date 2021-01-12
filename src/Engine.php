<?php

namespace Src\Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function runGame(string $rules, callable $round, int $attempts = 3): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($rules);

    for ($i = 0; $i < $attempts; $i += 1) {
        ['question' => $question, 'correctAnswer' => $correctAnswer] = $round();

        line("Question: {$question}\n");
        $answer = prompt('Your answer');

        if ($answer === (string) $correctAnswer) {
            line("Correct!\n");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }
    line("Congratulations, {$name}!\n");
}
