<?php
require_once 'classes/pet.php';
class Hamster extends Pet
{
	public $color;
	public $price;

	public function __construct($color, $price)
	{
		$this->color = $color;
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