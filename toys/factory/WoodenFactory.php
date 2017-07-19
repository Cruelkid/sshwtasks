<?php
require_once 'Factory.php';
require_once 'classes/WoodenCar.php';
require_once 'classes/WoodenDoll.php';

class WoodenFactory extends Factory
{
	public function getCar()
	{
		return new WoodenCar();
	}

	public function getDoll()
	{
		return new WoodenDoll();
	}
}