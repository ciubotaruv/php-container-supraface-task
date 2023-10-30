<?php

namespace Containers;

class Container
{
    private $width;
    private $length;

    public function __construct($width, $length)
    {
        $this->width = $width;
        $this->length = $length;
    }

    public function calculateArea()
    {
        return $this->width * $this->length;
    }

    public function getType()
    {
        return "Container";
    }

}