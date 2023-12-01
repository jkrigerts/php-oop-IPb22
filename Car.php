<?php

include_once "Vehicle.php";

class Car extends Vehicle
{
   
    static $describe = "I have 4 wheels, but sometimes 3.";
    
    function __construct($brand = "", $mileage = 0)
    {
        $this->brand = $brand;
        $this->mileage = $mileage;
    }
    
    static function makeNoice(){
        echo "Beep,Beep!";
    }
 
}
