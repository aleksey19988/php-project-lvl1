<?php

namespace Brain\Games\Engine;

use function Brain\Games\Cli\greeting;
use function cli\line;
use function cli\prompt;


$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

$attempts = 3;

function runGame($game, int $attempts = 3)
{
    $name = greeting();
    ['rules' => $rules] = $game;
    line($rules);

    for($i = 0; $i < $attempts; $i += 1) {
        ['round' => $round] = $game;
        ['question' => $question, 'correctAnswer' => $correctAnswer] = $round();

        print_r("{$question}\n");
        $answer = prompt('Your answer');

        if ($answer === (string) $correctAnswer) {
            print_r("Correct!\n");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'\nLet's try again, {$name}");
            return;
        }
        if ($i === 2) {
            print_r("Congratulations, {$name}!\n");
            return;
        }
    }
};