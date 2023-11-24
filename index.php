<?php

include "Car.php";


$car1 = New Car("Bmw", 0);
$car2 = New Car("Opel", 1000000001);
$car1->increaseMileage(240);
echo Car::$describe;
echo "<br>";
echo Car::makeNoise() . "<br>";

// echo "<br>";
