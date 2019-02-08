<?php

require("includes/Car.php");

// Array som kommer innehålla alla våra bilar av klassen Car
$cars = [];

$car = new Car("Nissan", "Qashqai");
$car->setRegistrationNumber("FUO102");
array_push($cars, $car);

$car = new Car("Toyota", "RAV4", 2014, 80000);
$car->setRegistrationNumber("SUV4LIFE");
array_push($cars, $car);

foreach ($cars as $car) {
	echo $car->getInfo();
}
