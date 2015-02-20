<?php

use \Mockery as m;


class QuestionTest extends PHPUnit_Framework_TestCase
{
    public function testQuestion()
    {
        $option = m::mock("\Bootcamp\Demo\Quiz\Option");
        $option->shouldReceive('isCorrect')->andReturn(true);

        $q = new Bootcamp\Demo\Quiz\Question('dummy');
        $this->assertFalse($q->isMultiAnswer());

        $q->addOption($option);
        $this->assertFalse($q->isMultiAnswer());

        $q->addOption($option);
        $this->assertTrue($q->isMultiAnswer());

    }
}
