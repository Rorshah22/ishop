<?php

namespace Khali;

trait TSingleton
{
    private static null|self $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): static
    {
        return static::$instance ?? static::$instance = new static();
    }
}
