<?php

namespace Objects;

class Square
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
}