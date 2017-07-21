<?php
require_once 'classes/pet.php';
require_once 'models/cat.php';
require_once 'models/dog.php';
require_once 'models/hamster.php';

class PetShop
{
	public $pets = [];

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
				array_push($res, get_object_vars($pet));
			}
		}

		return $res;
	}

	public function getWhiteOrFluffy($type, $arr)
	{
		$res = [];

		if ($type == strcasecmp('White', $type)) {
			foreach ($arr as $pet) {
				if ($pet->color == "white") {
					$res[] = get_object_vars($pet);
				}
			}
		} elseif ($type == strcasecmp('Fluffy', $type)) {
			foreach ($arr as $pet) {
				if ($pet->isFluffy()) {
					$res[] = get_object_vars($pet);
				}
			}
		}

		return $res;
	}

	public function getByType($type, $arr)
	{
		$res = [];

		foreach ($arr as $pet) {
			if ($pet->isYourType($type)) {
				array_push($res, get_object_vars($pet));
			}
		}

		return $res;
	}

	public function getDataFromFile()
	{
		$data = file_get_contents("db.json");
		$result = json_decode($data, true);
		$length = count($result);

		foreach ($result as $key => $value) {
			if ($key == 'Cats') {
				foreach ($value as $cat) {
					$newCat = new Cat($cat["name"], $cat["color"], $cat["fluff"], $cat["price"]);
					array_push($this->pets, $newCat);
				}
			} elseif ($key == 'Dogs') {
				foreach ($value as $dog) {
					$newDog = new Dog($dog["name"], $dog["color"], $dog["price"]);
					array_push($this->pets, $newDog);
				}
			} elseif ($key == 'Hamsters') {
				foreach ($value as $hamster) {
					$newHamster = new Hamster($hamster["color"], $hamster["price"]);
					array_push($this->pets, $newHamster);
				}
			}
		}
	}
}