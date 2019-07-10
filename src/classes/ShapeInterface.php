<?php

/*
 * This file is part of the GeometricShapes package.
 *
 * (c) Rodrigo De La Garza <josille@gmail.com>
 *
 */

/**
 * Interface class to define functions needed to be implemented in all shapes.
 *
 * @package    GeometricShapes
 * @author     Rodrigo De La Garza <josille@gmail.com>
 */

interface ShapeInterface
{
    // Draw will draw the figure.
    public function Draw(): string;
}
