<?php

/*
Define the Factory class for shapes.
*/ 
class GeometricShape
{

    private $newShape;
    public function __construct($shape)
    {
        $this->newShape = new $shape($shape);
    }

    // LoadShape returns a new instance of a shape object.
    public function LoadShape()
    {
        return $this->newShape;
    }

}
