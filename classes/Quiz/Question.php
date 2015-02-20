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

    public function __construct($title)
    {
        $this->title = $title;
        $this->options = [];
    }

    public function addOption(Option $option)
    {
        $this->options[] = $option;
    }

    public function isMultiAnswer()
    {
        $count = 0;
        foreach ($this->options as $option) {
            if ($option->isCorrect() === true) {
                $count++;
            }
            if ($count>1) {
                return true;
            }
        }
        return false;
    }
}
