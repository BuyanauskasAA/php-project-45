<?php

namespace BrainGames\Games\BrainEven;

use function cli\line;
use function cli\prompt;

function brainEven()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $questionsCount = 3;
    for ($i = 0; $i < $questionsCount; $i++) {
        $randomNumber = rand(1, 100);
        $correctAnswer = $randomNumber % 2 === 0 ? 'yes' : 'no';

        line('Question: %d', $randomNumber);
        $answer = prompt('Your answer:');

        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            return line("Let's try again, %s!", $name);
        }
    }
    return line("Congratulations, %s!", $name);
}
