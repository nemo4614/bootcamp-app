<?php

use Bootcamp\Demo\Rectangle;

class RectangleTest extends PHPUnit_Framework_TestCase
{
  public function testGetArea()
  {
    $rectangle = new Rectangle(4,2);
    $this->assertEquals(8, $rectangle->getArea());
  }
}
