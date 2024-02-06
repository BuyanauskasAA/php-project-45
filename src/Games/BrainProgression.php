<?php

namespace BrainGames\Games\BrainProgression;

use function BrainGames\Engine\makeGame;
use function BrainGames\Utils\getProgression;

function playBrainProgression(): void
{
    $rules = 'Find the greatest common divisor of given numbers.';
    $makeQuestion = function (): array {
        $start = rand(1, 50);
        $step = rand(1, 10);
        $progression = getProgression($start, $step);
        $hiddenItemIndex = array_rand($progression);
        $hiddenItem = $progression[$hiddenItemIndex];
        $progression[$hiddenItemIndex] = '..';

        $question = implode(' ', $progression);
        $answer = (string) $hiddenItem;

        return [
            'question' => $question,
            'answer' => $answer
        ];
    };

    makeGame($rules, $makeQuestion);
}
