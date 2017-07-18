<?php
require_once 'Car.php';

class WoodenCar extends Car
{
	public function getClassName()
	{
		return get_class($this);
	}
}