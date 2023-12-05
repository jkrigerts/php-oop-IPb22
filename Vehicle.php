<?php

abstract class Vehicle {
  public $brand;
  protected $mileage;
  static $description = "I am large and Vivi";

    
  function __construct($brand = "", $mileage = 0)
  {
      $this->brand = $brand;
      $this->mileage = $mileage;
  }

  function __destruct()
  {
      echo $this->brand . " is dead at mileage " . $this->mileage . "Km" . "<br>";
  }
  
  function increaseMileage($amount)
  {
    $this->mileage = $this->mileage + $amount;
  }

  abstract static function makeNoice();
};