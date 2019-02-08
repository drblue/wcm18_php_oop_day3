<?php

// Klasser skrivs alltid med UpperCamelCase
class Car {

	public $manufacturer;
	public $model;
	public $year;

	public function __construct($manufacturer, $model, $year) {
		$this->setManufacturer($manufacturer);
		$this->setModel($model);
		$this->setYear($year);
	}

	public function getInfo() {
		return "<p>Jag är en {$this->getManufacturer()} {$this->getModel()} av årsmodell {$this->getYear()} med registreringsnummer {$this->getRegistrationNumber()}.</p>";
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

}
