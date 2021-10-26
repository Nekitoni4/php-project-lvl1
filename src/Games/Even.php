<?php

namespace Brain\Games\Even;

use function Brain\Games\Engine\startGame;
use function cli\line;

function isEven(int $number): bool
{
    return $number % 2 == 0;
}

function evenPlay(string $name): void
{
    line('Answer "yes" if the number is even, otherwise answer "no".');

    startGame(function (): array {
        $question = rand(1, 50);
        return [$question, isEven($question) ? 'yes' : 'no'];
    }, $name);
}
