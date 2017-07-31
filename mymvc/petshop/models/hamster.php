<?php
require_once 'petshop/classes/pet.php';
require_once 'petshop/traits/FluffyPetTrait.php';

class Hamster extends Pet
{
	use FluffyPetTrait;
	
	public $name = "Hamster";
	public $color;
	public $price;
	public $fluff = 7;

	public function __construct($color, $price)
	{
		$this->color = $color;
		$this->price = $price;
	}

	public function isYourName($name)
	{
		return "Hamster";
	}
}