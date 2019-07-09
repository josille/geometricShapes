#!/usr/bin/php
<?php
/*
CLI with the aim to perform as a lambda daemon, for fast representation of shapes.

It expects a paramter(s) with the definition of the desired shape.
NOTE: each shape must be enclosed by single quotes.

USAGE: php cli.php 'Square LENGHT WIDTH' 'Circle LENGHT WIDTH'

Example: php cli.php 'Square 5 3' 'Circle 20 30'

$shapes= [
['type'=>'circle', 'params'=> [...]]
['type'=>'circle', 'params'=> [...]]
['type'=>'rectangle', 'params'=> [...]]
]
 */

require_once 'autoload.php';

// simple check to verify that are parameters
// todo: add more checks for single quotes
if (count($argv) == 1) {
    echo "Parameter needed. Ex: Rectangle, Circle ";
    exit;
}

// we loop in all the arguments
for ($i = 1; $i < count($argv); $i++) {

    // try to parse the input
    $shapeParts = parseInput($argv[$i]);

    try {
        $shape = new GeometricShape($shapeParts[0]);
        $shape = $shape->LoadShape();
        $shape->length = $shapeParts[1];
        $shape->width = $shapeParts[2];

        echo "Shape ".$i." '".$shapeParts[0]."'\n";
        echo "Perimeter: ".$shape->Perimeter()."\n";
        echo "Area: ".$shape->Area()."\n";
        echo $shape->Draw()."\n";

        echo "\n\n";
    } catch (Throwable $t) {
        echo 'Error:  ', $t->getMessage(), "\n";

    } catch (Exception $e) {
        echo 'Exception: ', $e->getMessage(), "\n";
    }
}

// parseInput expect a argument string with singel quotes,
// and will try to parse it.
function parseInput($argvShape){
    // todo: add validations for input, single quotes, etc
    return preg_split("/[\s,]+/", $argvShape);
}
?>