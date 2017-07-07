<?php
require_once 'classes/pet.php';
class Dog extends Pet
{
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