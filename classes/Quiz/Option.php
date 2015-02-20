<?php

namespace Bootcamp\Demo\Quiz;

class Option
{
    /**
     *Crete an Question instance
     *@param string $name
     *@param boolean $isCorrect
     *@param int $id
     */
     protected $id;
     protected $name;
     protected $isCorrect;

    public function __construct($name, $isCorrect = 'false')
    {
        $this->name      = $name;
        $this->isCorrect = $isCorrect;
    }

    public function isCorrect()
    {
        return $this->isCorrect;
    }
}
