<?php

include "Tire.php";
include "Car.php";
include "Train.php";


// $car1 = New Car("Bmw", 0);
// $car2 = New Car("Opel", 1000000001);
// $car1->increaseMileage(240);
// echo Car::$describe;
// echo "<br>";
// echo Car::makeNoise() . "<br>";

///////////////////////////////////////


$tire = New Tire("R12", "Vissezonas", "Good");
echo $tire->size;
echo "<br>";
echo $tire->type;
echo "<br>";
echo Car::$describe;
echo "<br>";
Car::makeNoice();
echo "<br>";
$tire = new Train("Škoda", 1435, 2343223);
echo "<br>";
Train::makeNoice();