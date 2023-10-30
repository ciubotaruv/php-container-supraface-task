<?php

namespace Objects;

class Circle
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return $this->radius * 2;
    }
}