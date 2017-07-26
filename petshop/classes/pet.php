<?php
abstract class Pet
{
	abstract function isYourName($name);
	public function isYourColor($color)
	{
		if ($this->color == $color) {
			return true;
		} else {
			return false;
		}
	}

	public function isYourType($type)
	{
		if (strcasecmp(get_class($this), $type) == 0) {
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