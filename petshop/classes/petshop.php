<?php
require_once 'classes/pet.php';
require_once 'models/cat.php';
require_once 'models/dog.php';
require_once 'models/hamster.php';

class PetShop
{
	public function getAvgPrice($arr)
	{
		$length = count($arr);
		$sum = 0;
		$avg = 0;

		for ($i = 0; $i < $length; $i++) { 
			$sum += $arr[$i]->price;
		}

		$avg = $sum / $length;

		return $avg;
	}

	public function getByColor($color, $arr)
	{
		$res = [];

		foreach ($arr as $pet) {
			if ($pet->color == $color) {
				array_push($res, $pet);
			}
		}

		return $res;
	}

	public function getByType($type, $arr)
	{
		$res = [];

		foreach ($arr as $pet) {
			if ($pet->isYourType($type) == $type) {
				array_push($res, $pet);
			}
		}

		return $res;
	}
}