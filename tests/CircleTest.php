<?php

use Bootcamp\Demo\Circle;

class CircleTest extends PHPUnit_Framework_TestCase
{
  public function testGetArea()
  {
    $circle = new Circle(2);
    $this->assertEquals(12.566370614359172, $circle->getArea());
  }
}
