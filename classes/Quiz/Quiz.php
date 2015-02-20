<?php

namespace Bootcamp\Demo\Quiz;

class Quiz
{
    /**
     *Crete an Quiz instance
     *@param array $questions
     *@param string $name
     *@param int $id
     */
    protected $questions;
    protected $name;
    protected $id;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addQuestion(Question $option)
    {
        $this->questions[] = $option;
    }
}
