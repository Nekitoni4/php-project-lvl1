<?php

namespace Brain\Games\Prime;

use function Brain\Games\Engine\startGame;
use function cli\line;

function isPrime(int $number): bool
{
    for ($i = 2; $i < $number; ++$i) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function primePlay(string $name): void
{
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    startGame(function (): array {
        $question = rand(2, 100);
        $answer = isPrime($question) ? 'yes' : 'no';
        return [$question, $answer];
    }, $name);
}
