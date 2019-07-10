<?php

/*
 * This file is part of the GeometricShapes package.
 *
 * (c) Rodrigo De La Garza <josille@gmail.com>
 *
 */

/**
 * USAGE:
 * curl --request POST --url http://localhost/geometricShapes/api.php --header 'content-type: application/json' --data '{"shapes": [ { "params": [5,6],"type": "Rectangle"}, {"params": [20,30],"type": "Rectangle"}]}'
 *
 * EXAMPLE POST JSON:
 * {
 *  "shapes": [
 *   {
 *     "params": [ 5, 6 ],
 *     "type": "Rectangle"
 *   },
 *   {
 *     "params": [20,30],
 *     "type": "Rectangle"
 *   }
 *  ]
 * }
 * @package    GeometricShapes
 * @author     Rodrigo De La Garza <josille@gmail.com>
 */

require_once 'autoload.php';

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

$postJson = json_decode(file_get_contents("php://input"));

if ($postJson->shapes == null) {
    echo "Error";
    exit;
}

foreach ($postJson->shapes as $key => $value) {
    $class = new JsonShape($value);
    try {
        $shape = GeometricShape::LoadShape($class->getType());
        $shape->length = 1;
        $shape->width = 2;

        echo "Shape " . $key . " '" . $class->getType() . "'\n";
        echo "Perimeter: " . $shape->Perimeter() . "\n";
        echo "Area: " . $shape->Area() . "\n";
        echo $shape->Draw() . "\n";

    } catch (Throwable $t) {
        echo 'Error:  ', $t->getMessage(), "\n";

    } catch (Exception $e) {
        echo 'Exception: ', $e->getMessage(), "\n";
    }
}
