<?php

require_once 'IPrinter.php';

class Printer extends Product implements IPrinter {

	public $cartridge;

	public function __construct($name, $price, $cartridge) {
		parent::__construct($name, $price);
		$this->cartridge = $cartridge;
	}
	
	public function getCartidge() {
		// TODO: Implement getCase() method.
		echo "<hr><h3>Информация о картридже для принтера {$this->name}</h3>
			  	<p>Картридж для модели {$this->cartridge}</p>";
	}

	public function addProduct($name, $price, $cartridge = 0) {
		// TODO: Implement addProduct() method.
		var_dump($name);
		var_dump($price);
		var_dump($cartridge);
	}
}