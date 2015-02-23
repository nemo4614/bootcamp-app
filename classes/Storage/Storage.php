<?php

namespace Bootcamp\Demo\Storage;

interface Storage
{
    public function store($place, $date);

    public function get($place);
}
