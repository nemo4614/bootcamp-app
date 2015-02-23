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

    public function testGetAnswerCount()
    {
        $option = m::mock("\Bootcamp\Demo\Quiz\Option");
        $option->shouldReceive('isCorrect')->andReturn(true);

        $q = new Bootcamp\Demo\Quiz\Question('dummy');

        $this->assertEquals(0, $q->getAnswerCount());

        $q->addOption($option);

        $this->assertEquals(1, $q->getAnswerCount());

    }
}
