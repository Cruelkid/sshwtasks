<?php
require_once 'classes/pet.php';
require_once 'traits/FluffyPet.php';

class Dog extends Pet
{
	use FluffyPet;
	public $name;
	public $color;
	public $price;
	public $voice = "Woof!";

	public function __construct($name, $color, $price)
	{
		$this->name = $name;
		$this->color = $color;
		$this->price = $price;
	}

	function isFluffy()
	{
		return false;
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