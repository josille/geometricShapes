<?php

/*
 * This file is part of the GeometricShapes package.
 *
 * (c) Rodrigo De La Garza <josille@gmail.com>
 *
 */

/**
 * Class that defines a Shape Factory.
 *
 * @package    GeometricShapes
 * @author     Rodrigo De La Garza <josille@gmail.com>
 */
class GeometricShape
{
    // LoadShape returns a new object of a shape.
    public static function LoadShape($shape)
    {
        return new $shape($shape);
    }
}
