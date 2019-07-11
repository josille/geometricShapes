<?php

/*
 * This file is part of the GeometricShapes package.
 *
 * (c) Rodrigo De La Garza <josille@gmail.com>
 *
 */

/**
 * Class that defines a Circle.
 *
 * @package    GeometricShapes
 * @author     Rodrigo De La Garza <josille@gmail.com>
 */
class Circle extends ShapeAbstract implements ShapeInterface
{
    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // Draw will draw the figure, instead im returnign the equation for the figure.
    public function Draw(): string
    {
        return "Here is your " . $this->name . ":\n\n" . '(x – a)^2 + (y – b)^2 = r^2';
    }
}
