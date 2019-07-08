<?php

class GeometricShape {

    public function LoadShape($name){
        return new $name();
    }
    
}
?>