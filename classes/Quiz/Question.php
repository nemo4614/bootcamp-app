<?php

namespace Bootcamp\Demo\Quiz;

use Bootcamp\Demo\Quiz\Option;

class Question
{
    /**
     *Crete an Question instance
     *@param array $options
     *@param string $title question title
     *@param int $type
     *@param int $id
     */
    protected $options;
    protected $id;
    protected $title;
    protected $type;
    protected $correctAnswerCount;

    public function __construct($title)
    {
        $this->title = $title;
        $this->options = [];
    }

    public function addOption(Option $option)
    {
        $this->options[] = $option;
        if (true===$option->isCorrect()) {
            $this->correctAnswerCount ++;
        }
    }

    public function isMultiAnswer()
    {
        if ($this->correctAnswerCount > 1) {
            return true;
        }
        return false;
    }

    public function getAnswerCount()
    {
        return count($this->options);
    }
}
