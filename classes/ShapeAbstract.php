<?php

/*
Abstract class defining variables and methods implemented by all shapes.
*/ 
abstract class ShapeAbstract{

    public $name = "";
    public $color = "";
    public $borderSize = "";
    public $length = 0;
    public $width = 0;

    // Name returns the name of the shape.
    public function Name(){
        return "I am a ".$this->name;        
    }
    
    // Perimeter return the permiter of the shape.
    public function Perimeter(){
        return (2 * ($this->length + $this->width));
    }
    
    // Perimeter return the area of the shape.
    public function Area(){
        return ($this->length * $this->width);
    }
}
?>