<?php

class Square extends ShapeAbstract implements ShapeInterface
{
    public function __construct($name) {
        $this->name = $name;
    }

    // Draw will draw the figure, instead im returnign the equation for the figure.
    public function Draw(){
        return "Here is your ".$this->name. ":\n\n".'max(abs(x),abs(y)) = c';
    }
}
?>