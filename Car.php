<?php

include_once "Vehicle.php";

class Car extends Vehicle
{
   
    static $describe = "I have 4 wheels, but sometimes 3.";
    
    static function makeNoice(){
        echo "Beep,Beep!";
    }
 
}
