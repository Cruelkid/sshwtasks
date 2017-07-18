<?php
require_once 'Factory.php';
require_once 'classes/MetalCar.php';
require_once 'classes/MetalDoll.php';

class MetalFactory extends Factory
{
	public function getCar()
	{
		return new MetalCar();
	}

	public function getDoll()
	{
		return new MetalDoll();
	}
}