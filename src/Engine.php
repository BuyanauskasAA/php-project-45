<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function makeGame(
    string $rules,
    callable $makeQuestion,
    int $gameRounds = 3
): void {
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($rules);

    for ($i = 0; $i < $gameRounds; $i++) {
        ['question' => $question, 'answer' => $correctAnswer] = $makeQuestion();
        line('Question: %s', $question);
        $answer = prompt('Your answer:');

        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
