<?php

require("includes/Car.php");

// Array som kommer innehålla alla våra bilar av klassen Car
$cars = [];

$car = new Car;
$car->setManufacturer("Nissan");
$car->setModel("Qashqai");
$car->setYear(2019);
$car->setRegistrationNumber("FUO102");
array_push($cars, $car);

$car = new Car;
$car->setManufacturer("Toyota");
$car->setModel("RAV4");
$car->setYear(2014);
$car->setRegistrationNumber("SUV4LIFE");
array_push($cars, $car);

foreach ($cars as $car) {
	echo $car->getInfo();
}
