<?php

class Train {

  public function __construct(
      public $brand,
      public $trackGauge,
      private $mileage
  ){}

  public function __destruct() {
    echo "$this->brand is dead at mileage $this->mileage";
  }

  function increaseMileage($amount)
  {
    $this->mileage = $this->mileage + $amount;
  }

  static function makeNoice(){
    echo "Choo, Choo!";
  }
}