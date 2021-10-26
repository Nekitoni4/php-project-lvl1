<?php

namespace Brain\Games\Calc;

use function Brain\Games\Engine\startGame;
use function cli\line;

function calcPlay($name)
{
    line('What is the result of the expression?');

    startGame(function () {
        $firstNumber = rand(1, 50);
        $secondNumber = rand(1, 50);
        $operations = [
            ['+', $firstNumber + $secondNumber],
            ['-', $firstNumber - $secondNumber],
            ['*', $firstNumber * $secondNumber]
        ];
        [$operator, $correctAnswer] = $operations[rand(0, count($operations) - 1)];
        $question = "$firstNumber $operator $secondNumber";
        return [$question, $correctAnswer];
    }, $name);
}
