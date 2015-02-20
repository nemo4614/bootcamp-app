<?php

namespace Bootcamp\Demo;

class Circle extends Shape
{
  public $radius;

  /**
   *Creates an Circle instance
   *@param float $radius Rectangle radius
   *@return void
   */
  public function __construct($radius)
  {
    $this->radius = $radius;
  }

  /**
   *Return an area of a Circle
   *@return float Circle area
   */
  public function getArea()
  {
    return pi() * ($this->radius)**4;
  }
}
