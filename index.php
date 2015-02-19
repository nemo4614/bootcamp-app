<?php

require 'vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hello/{name}', function ($name) use ($app) {
  return 'Hello '.$app->escape($app);
});

$app->get('/rec', function () use ($app) {
  $rec = new \Bootcamp\Demo\Rectangle(1,2);
  return 'Rectangle area '.$rec->getArea();
});

$app->run();
