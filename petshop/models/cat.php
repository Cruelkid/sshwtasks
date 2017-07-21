<?php
require_once 'classes/pet.php';
require_once 'traits/FluffyPet.php';

class Cat extends Pet
{
	use FluffyPet;
	
	public $name;
	public $color;
	public $fluff;
	public $price;
	public $voice = "Meow!";

	public function __construct($name, $color, $fluff, $price)
	{
		$this->name = $name;
		$this->color = $color;
		$this->fluff = $fluff;
		$this->price = $price;

		if ($this->fluff < 0) throw new Exception("Fluffiness cannot be lower than zero", 1);
	}

	public function isYourName($name)
	{
		if ($this->name == $name) {
			return $this->voice;
		} else {
			return false;
		}
	}
}