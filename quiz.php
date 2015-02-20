<?php

require __DIR__ . '/vendor/autoload.php';

use Bootcamp\Demo\Quiz\Option;
use Bootcamp\Demo\Quiz\Quiz;
use Bootcamp\Demo\Quiz\Question;

$options = [];
$options[] = new Option('443');
$options[] = new Option('80', true);
$options[] = new Option('223');
$options[] = new Option('22');

$options2 = [];
$options2[] = new Option('dfdf');
$options2[] = new Option('fd', true);
$options2[] = new Option('sss', true);
$options2[] = new Option('ssss');

$questionsOne = new Question('What is your name?');

    foreach($options as $option)
    {
        $questionsOne->addOption($option);
    }

$questionsTwo = new Question('How are?');

    foreach($options2 as $option)
    {
        $questionsTwo->addOption($option);
        $questionsTwo->isMultiAnswer($option);
    }

$quiz = new Quiz('My first quiz');

$quiz->addQuestion($questionsOne);
$quiz->addQuestion($questionsTwo);

var_dump($quiz);
