<?php

// Klasser skrivs alltid med UpperCamelCase
class Car {

	public $manufacturer;
	public $model;
	public $year;
	public $registrationNumber;
	public $milage;

	public function __construct($manufacturer, $model, $year = 2019, $milage = 0) {
		$this->setManufacturer($manufacturer);
		$this->setModel($model);
		$this->setYear($year);
		$this->setMilage($milage);
	}

	public function getInfo() {
		return "<p>Jag är en {$this->getManufacturer()} {$this->getModel()} av årsmodell {$this->getYear()} med registreringsnummer {$this->getRegistrationNumber()} och har mätarställningen {$this->getMilage()}.</p>";
	}

	public function getManufacturer() {
		return $this->manufacturer;
	}
	public function setManufacturer($manufacturer) {
		$this->manufacturer = $manufacturer;
	}

	public function getModel() {
		return $this->model;
	}
	public function setModel($model) {
		$this->model = $model;
	}

	public function getYear() {
		return $this->year;
	}
	public function setYear($year) {
		$this->year = $year;
	}

	public function getRegistrationNumber() {
		return $this->registrationNumber;
	}
	public function setRegistrationNumber($registrationNumber) {
		$this->registrationNumber = $registrationNumber;
	}

	public function getMilage() {
		return number_format($this->milage, 0, ",", " ") . " km";
	}
	public function setMilage($milage) {
		$this->milage = $milage;
	}

}
