<?php

require 'vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hello/{name}', function ($name) use ($app) {
  return 'Hello '.$app->escape($app);
});

$app->get('/rec', function () use ($app) {
  $circle = new \Bootcamp\Demo\Circle(2);
  return 'Rectangle area '.$circle->getArea();
});

$app->run();
