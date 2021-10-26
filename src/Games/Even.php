<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function isEven($number)
{
    return $number % 2;
}

function evenPlay($name)
{
    $countCorrectAnswers = 0;

    line('Answer "yes" if the number is even, otherwise answer "no".');

    while (true) {
        if ($countCorrectAnswers == 3) {
            line("Congratulations, $name");
            break;
        }

        $randNumber = rand(0, 50);
        line("Question: $randNumber");
        $userAnswer = prompt("Your answer");
        $questionAnswer = isEven($randNumber) ? 'yes' : 'no';

        if ($questionAnswer == $userAnswer) {
            $countCorrectAnswers += 1;
            line('Correct!');
        } else {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$questionAnswer'.");
            return false;
        }
    }
}
