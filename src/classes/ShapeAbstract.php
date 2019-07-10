<?php

/*
 * This file is part of the GeometricShapes package.
 *
 * (c) Rodrigo De La Garza <josille@gmail.com>
 *
 */

/**
 * Abstract class defining variables and methods implemented by all shapes.
 *
 * @package    GeometricShapes
 * @author     Rodrigo De La Garza <josille@gmail.com>
 */
abstract class ShapeAbstract
{
    public $name = "";
    public $color = "";
    public $borderSize = "";
    public $length = 0;
    public $width = 0;

    // Name returns the name of the shape.
    public function Name(): string
    {
        return "I am a " . $this->name;
    }

    // Perimeter return the permiter of the shape.
    public function Perimeter(): int
    {
        return (2 * ($this->length + $this->width));
    }

    // Perimeter return the area of the shape.
    public function Area(): int
    {
        return ($this->length * $this->width);
    }
}
