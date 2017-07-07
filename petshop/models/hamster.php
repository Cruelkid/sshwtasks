<?php
require_once '../classes/pet.php';
class Hamster extends Pet
{
	public $name;
	public $color;
	public $fluff;
	public $price;

	public function __construct($color, $fluff, $price)
	{
		$this->color = $color;
		$this->fluff = $fluff;
		$this->price = $price;
	}

	function isFluffy()
	{
		return true;
	}

	public function isYourName($name)
	{
		return false;
	}
}