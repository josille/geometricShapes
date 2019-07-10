<?php

/*
 * This file is part of the GeometricShapes package.
 *
 * (c) Rodrigo De La Garza <josille@gmail.com>
 *
 */

/**
 * Class that defines a Square.
 *
 * @package    GeometricShapes
 * @author     Rodrigo De La Garza <josille@gmail.com>
 */
class Square extends ShapeAbstract implements ShapeInterface
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Draw will draw the figure, instead im returnign the equation for the figure.
    public function Draw(): string
    {
        return "Here is your " . $this->name . ":\n\n" . 'max(abs(x),abs(y)) = c';
    }
}
