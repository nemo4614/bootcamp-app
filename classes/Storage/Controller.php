<?php

namespace Bootcamp\Demo\Storage;

class Controller
{
    public $s;

    public function __construct(Storage $store)
    {
        $this->s = $store;
    }

    public function doSomething()
    {
        $data = $_REQUEST;
        $this->s->store("tmp", $data);
    }
}
