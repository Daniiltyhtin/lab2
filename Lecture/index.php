<?php

require 'classes/Car.php';

$carWhite = new Car("White", 4, 250, "Asus");
$carBlack = new Car("Black", 4, 230, "Lenovo");
$carBlue = new Car("Blue", 4, 240, "Nvidia");
$carGreen = new Car("", 4, 0, "Radeon");

echo Car::$countCar;
echo Car::getCount();