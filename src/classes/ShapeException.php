<?php
/*
 * This file is part of the GeometricShapes package.
 *
 * (c) Rodrigo De La Garza <josille@gmail.com>
 *
 */


/**
 * ShapeException class extending normal Exception for custom messages.
 *
 * @package    GeometricShapes
 * @author     Rodrigo De La Garza <josille@gmail.com>
 */
class ShapeException extends Exception
{
    // Returns a detail error mesage.
    public function shapeCustomError()
    {
        //Custom error message
        $errorMsg = "Package GemotricShape found an Error: \n"
        . " * Line: " . $this->getLine() . " \n"
        . " * File: " . $this->getFile() . " \n"
        . " * Details: " . $this->getMessage() . " \n";
        return $errorMsg;
    }
}
