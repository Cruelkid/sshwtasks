<?php
require_once 'Car.php';

class MetalCar extends Car
{
	public function getClassName()
	{
		return get_class($this);
	}
}