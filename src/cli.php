#!/usr/bin/php
<?php

/*
 * This file is part of the GeometricShapes package.
 *
 * (c) Rodrigo De La Garza <josille@gmail.com>
 *
 */

/**
 * CLI with the aim to perform as a lambda daemon, for fast representation of shapes.
 *
 * It expects a paramter(s) with the definition of the desired shape.
 * NOTE: each shape must be enclosed by single quotes.
 *
 * USAGE: php cli.php 'Square LENGHT WIDTH' 'Circle LENGHT WIDTH'
 *
 * Example: php cli.php 'Square 5 3' 'Circle 20 30'
 *
 * $shapes= [
 *  ['type'=>'circle', 'params'=> [...]]
 *  ['type'=>'circle', 'params'=> [...]]
 *  ['type'=>'rectangle', 'params'=> [...]]
 * ]
 * @package    GeometricShapes
 * @author     Rodrigo De La Garza <josille@gmail.com>
 */

require_once 'autoload.php';

try {
// simple check to verify that are parameters
    // todo: add more checks for single quotes
    if (count($argv) == 1) {
        // echo "Parameter needed. Ex: Rectangle, Circle ";
        throw new ShapeException("Parameter needed. Ex: Rectangle, Circle ");
        exit;
    }

// we loop in all the arguments
    for ($i = 1; $i < count($argv); $i++) {

        // try to parse the input
        $shapeParts = parseInput($argv[$i]);
 
        if (count($shapeParts) < 3) {
            // echo "Parameter needed. Ex: Rectangle, Circle ";
            throw new ShapeException("Shape parameters incomplete.");
            exit;
        }

        list($shapeType,$shapeLenght,$shapeWidth) = $shapeParts;

        $shape = GeometricShape::LoadShape($shapeType);
        $shape->length = $shapeLenght;
        $shape->width = $shapeWidth;

        echo "Shape " . $i . " '" . $shape->Name() . "'\n";
        echo "Perimeter: " . $shape->Perimeter() . "\n";
        echo "Area: " . $shape->Area() . "\n";
        echo $shape->Draw() . "\n";
    }
} catch (ShapeException $e) {
    echo $e->shapeCustomError();
}

// parseInput expect a argument string with single quotes,
// and will try to parse it.
function parseInput($argvShape)
{
    // todo: add validations for input, single quotes, etc
    return preg_split("/[\s,]+/", $argvShape);
}
?>