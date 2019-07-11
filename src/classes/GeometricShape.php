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
    private static function NormalizeName(string $shape): string
    {
        return ucfirst(strtolower($shape));
    }

    // LoadShape returns a new object of a shape.
    public static function LoadShape($shape): ShapeAbstract
    {
        $obj = self::NormalizeName($shape);
        return new $obj($shape);
    }
}
