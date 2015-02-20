<?php

namespace Bootcamp\Demo;

class Cilinder extends Circle
{

    public $height;

  /**
   *Creates an Cilinder instance
   *@param float $height Cilinder height
   *@param float $radius Cilinder radius
   *@return void
   */
    public function __construct($radius, $height)
    {
        $this->height = $height;
        parent::__construct($radius);
    }

  /**
   *Return an area of a Rectangle
   *@return float Rectangle area
   */
    public function getArea()
    {
        return 2*pi()*($this->radius)*(($this->radius)+($this->height));
    }
}
