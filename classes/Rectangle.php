<?php

namespace Bootcamp\Demo;

class Rectangle extends Shape
{

  public $width;
  public $height;

  /**
   *Creates an Rectangle instance
   *@param float $width Rectangle width
   *@param float $height Rectangle height
   *@return void
   */
  public function __construct($width, $height)
  {
    $this->width = $width;
    $this->height = $height;
  }

  /**
   *Return an area of a Rectangle
   *@return float Rectangle area
   */
  public function getArea()
  {
    return ($this->width)*($this->height);
  }
}
