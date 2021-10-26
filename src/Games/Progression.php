<?php

namespace Brain\Games\Progression;

use function Brain\Games\Engine\startGame;
use function cli\line;

function generateProgression(): array
{
    $progressionStep = rand(1, 6);
    $progressionLength = rand(5, 10);
    $startNumber = rand(1, 50);
    $resultProgression = [];

    for ($i = 0; $i < $progressionLength; ++$i) {
        $resultProgression[] = $startNumber;
        $startNumber += $progressionStep;
    }

    return $resultProgression;
}


function progressionPlay(string $name): void
{
    line('What number is missing in the progression?');
    startGame(function (): array {
        $resultProgression = generateProgression();
        $targetIndex = rand(0, count($resultProgression) - 1);
        $answer = $resultProgression[$targetIndex];
        $resultProgression[$targetIndex] = '..';
        $question = implode(' ', $resultProgression);
        return [$question, $answer];
    }, $name);
}
