<?php

require 'vendor/autoload.php';

use \Bootcamp\Demo\Circle;

use \Bootcamp\Demo\Storage\FileStorage;

use \Bootcamp\Demo\Storage\Controller;

$app = new Silex\Application();

$app->get('/hello/{name}', function ($name) use ($app) {
  return 'Hello '.$app->escape($app);
});

$app->get('/rec', function () use ($app) {
  $circle = new Circle(1);
  return 'Circle area '.$circle->getArea();
});

$app->get('/', function () use ($app) {
    $s = new FileStorage();

    $c = new Controller($s);


    $c->doSomething();

    return true;
});

$app->run();
