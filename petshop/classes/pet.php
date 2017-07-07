<?php
abstract class Pet
{
	abstract function isFluffy();
	abstract function isYourName($name);
	public boolean function isYourColor($color)
	{
		if ($this->color == $color) {
			return true;
		} else {
			return false;
		}
	}

	public boolean function isYourType($type)
	{
		if (get_class($this) == $type) {
			return true;
		} else {
			return false;
		}
	}
	public function getPrice()
	{
		return $this->price;
	}
}