<?php

class RectangleTest extends PHPUnit_Framework_TestCase
{
  public function testGetArea()
  {
    $rectangle = new \Bootcamp\Demo\Rectangle(4,2);
    $this->assertEquals(8, $rectangle->getArea());
  }
}
