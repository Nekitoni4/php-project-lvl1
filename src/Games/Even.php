<?php

namespace Brain\Games\Even;

use function Brain\Games\Engine\startGame;
use function cli\line;

function isEven($number)
{
    return $number % 2 == 0;
}

function evenPlay($name)
{
    line('Answer "yes" if the number is even, otherwise answer "no".');

    startGame(function () {
        $question = rand(1, 50);
        return [$question, isEven($question) ? 'yes' : 'no'];
    }, $name);
}
