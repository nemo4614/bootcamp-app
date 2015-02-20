<?php

require 'vendor/autoload.php';

use \Bootcamp\Demo\Circle;

$app = new Silex\Application();

$app->get('/hello/{name}', function ($name) use ($app) {
  return 'Hello '.$app->escape($app);
});

$app->get('/rec', function () use ($app) {
  $circle = new Circle(1);
  return 'Circle area '.$circle->getArea();
});

$app->run();
