<?php

include "Car.php";


$car1 = New Car("Bmw", 0, "Bundza pilnigaka");
$car2 = New Car("Opel", 1000000001, "Ir 4 riteni, 4+1 durvis un motors >.<");
$car1->increaseMileage(240);
echo $car1::$describe;
echo "<br>";
echo $car2->describe;

echo "<br>";
