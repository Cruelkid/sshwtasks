<?php
require_once 'classes/pet.php';
require_once 'models/cat.php';
require_once 'models/dog.php';
require_once 'models/hamster.php';
require_once 'db.json';

class PetShop
{
	public $pets =[];

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

	public function getDataFromFile()
	{
		$data = file_get_contents("db.json");
		$result = json_decode($data, true);
		$length = count($result);
		// d($length);

		foreach ($result as $pet) {
			$length = count($pet);
			for ($i = 0; $i < $length; $i++) { 
				if (count($pet[$i]) == 4) {
					$newCat = new Cat($pet->name, $pet->color, $pet->fluff, $pet->price);
					array_push($this->pets, $newCat);
				} elseif (count($pet[$i]) == 3) {
					$newDog = new Dog($pet->name, $pet->color, $pet->price);
					array_push($this->pets, $newDog);
				} elseif (count($pet[$i]) == 2) {
					$newHamster = new Hamster($pet->color, $pet->price);
					array_push($this->pets, $newHamster);
				}
				// _d(count($pet[$i]));
			}
		}

		// for ($i = 0; $i < $length; $i++) {
		// 	d(key($result));
			// if (key($result[$i]) == "Cats") {
			// 	foreach ($result as $cat) {
			// 		$newCat = new Cat($cat->name, $cat->color, $cat->fluff, $cat->price);
			// 		array_push($this->pets, $newCat);
			// 	}
			// } elseif (key($result[$i]) == "Dogs") {
			// 	foreach ($result as $dog) {
			// 		$newDog = new Dog($dog->name, $dog->color, $dog->price);
			// 		array_push($this->pets, $newDog);
			// 	}
			// } elseif (key($result[$i]) == "Hamsters") {
			// 	foreach ($result as $hamster) {
			// 		$newHamster = new Hamster($hamster->color, $hamster->price);
			// 		array_push($this->pets, $newHamster);
			// 	}
			// }
		// }
	}
}