<?php

// Include class definition
//require "Rectangle.php";
 //include "autoload.php"
//require "autoload.php"
 
spl_autoload_register(function($className) {
	$file = $className . '.php';
	
	if (file_exists($file)) {
		include $file;
	}
});

// Create a new object from Rectangle class
// $obj = new Rectangle();
$obj1 = new GeometricShape();
$obj=$obj1->LoadShape("Rectangle");
 
echo $obj->length; 
echo $obj->width; 
 
$obj->length = 30;
$obj->width = 20;
 
echo $obj->Perimeter(); 
echo $obj->Area(); 
?>