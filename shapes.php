<?php
  /**
   *Function finds class with are used in this file
   *@param string class name
   */
spl_autoload_register(function($className){
  require 'classes/'.$className.'.php';
});

$circle = new Circle(2);

$rectangle = new Rectangle(4,20);

var_dump($circle->getArea());

var_dump($rectangle->getArea());

var_dump($circle, $rectangle);
