<?php

include_once "Vehicle.php";

class Train extends Vehicle {
  public $trackGauge;


  public function __construct($brand, $trackGauge, $mileage){
    $this->brand = $brand;
    $this->trackGauge = $trackGauge;
    $this->$mileage = $mileage;
  } 

  static function makeNoice(){
    echo "Choo, Choo!";
  }
}