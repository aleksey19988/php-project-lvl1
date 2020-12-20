#!/usr/bin/env php

<?php

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

function brainGcd() {
    $game = [
        'rules' => 'Find the greatest common divisor of given numbers.',
        'round' => function() {
            $firstNum = random_int(2, 100);
            $secondNum = random_int(2, 100);
            $firstNumDivisors = [];
            $secondNumDivisors = [];

            for($i = 1; $i < $firstNum; $i += 1) {
                if ($firstNum % $i === 0) {
                    $firstNumDivisors[] = $i;
                }
            };
            for($i = 1; $i < $secondNum; $i += 1) {
                if ($secondNum % $i === 0) {
                    $secondNumDivisors[] = $i;
                }
            };

            $commonDivisors = array_intersect($firstNumDivisors, $secondNumDivisors);
            $correctAnswer = max($commonDivisors);

            return [
                'question' => "{$firstNum} {$secondNum}",
                'correctAnswer' => $correctAnswer,
            ];
        },
    ];
};