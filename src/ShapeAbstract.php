<?php

abstract class ShapeAbstract{

    public $length = 0;
    public $width = 0;

    public function Perimeter(){
        return (2 * ($this->length + $this->width));
    }
    
    public function Area(){
        return ($this->length * $this->width);
    }
}
?>