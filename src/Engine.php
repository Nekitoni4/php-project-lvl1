<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function startGame($questionAnswerCallback, $name)
{
    $correctCount = 0;

    while (true) {
        [$question, $correctAnswer] = $questionAnswerCallback();

        if ($correctCount === 3) {
            line("Congratulations, $name!");
            break;
        }

        line("Question: $question");
        $userAnswer = prompt("Your answer");

        if (!strcmp($userAnswer, $correctAnswer)) {
            $correctCount += 1;
            line('Correct!');
        } else {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, $name!");
            break;
        }
    }
}
