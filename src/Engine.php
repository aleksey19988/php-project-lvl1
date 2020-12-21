<?php

namespace Src\Engine;

use function Src\Cli\greeting;
use function cli\line;
use function cli\prompt;
use function Utilites\RandomNum\isEven;


$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

$attempts = 3;

function runGame($game, $attempts = 3)
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
            return "'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'\nLet's try again, {$name}\n";
        }
        if ($i === 2) {
            return "Congratulations, {$name}!\n";
        }
    }
};
