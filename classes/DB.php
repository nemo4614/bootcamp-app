<?php

class DB
{
    private static $instance = false;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (self::$instance === false) {
            self::$instance = new self;
            self::$instance->x=rand();
        }
        return self::$instance;
    }
}
