<?php

class Circle extends ShapeAbstract implements ShapeInterface
{
    public function __construct($name) {
        $this->name = $name;
    }

    // Draw will draw the figure, instead im returnign the equation for the figure.
    public function Draw(){
        return "Here is your ".$this->name. ":\n\n".'(x – a)^2 + (y – b)^2 = r^2';
    }
}
?>