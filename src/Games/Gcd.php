<?php

namespace Brain\Games\Gcd;

use function Brain\Games\Engine\startGame;
use function cli\line;

function calculateGcd(int $firstNumber, int $secondNumber): ?int
{
    $result = null;
    $min = min($firstNumber, $secondNumber);

    for ($i = 1; $i <= $min; $i++) {
        if ($firstNumber % $i == 0 && $secondNumber % $i == 0) {
            $result = $i;
        }
    }

    return $result;
}


function gcdPlay(string $name): void
{
    line('Find the greatest common divisor of given numbers.');

    startGame(function (): array {
        $firstNumber = rand(1, 50);
        $secondNumber = rand(1, 50);
        $question = "$firstNumber $secondNumber";
        return [$question, calculateGcd($firstNumber, $secondNumber)];
    }, $name);
}
