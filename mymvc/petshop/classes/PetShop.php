<?php
require_once 'petshop/classes/pet.php';
require_once 'petshop/models/cat.php';
require_once 'petshop/models/dog.php';
require_once 'petshop/models/hamster.php';
require_once 'petshop/DbMysql.php';

class PetShop
{
	public $pets = [];
	public $db;

	public function __construct()
	{
		$this->db = new DbMysql('localhost', 'petshop', 'root', '');
	}

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
/*
*
UNCOMMENT THIS TO USE JSON

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
*
*/
		$result = $this->db->myPDO->query('SELECT * FROM Cats');
		foreach ($result as $cat) {
			$newCat = new Cat($cat["Name"], $cat["Color"], $cat["Fluff"], $cat["Price"]);
			$this->pets[] = $newCat;
		}
		$result = $this->db->myPDO->query('SELECT * FROM Dogs');
		foreach ($result as $dog) {
			$newDog = new Dog($dog["Name"], $dog["Color"], $dog["Price"]);
			$this->pets[] = $newDog;
		}
		$result = $this->db->myPDO->query('SELECT * FROM Hamsters');
		foreach ($result as $hamster) {
			$newHamster = new Hamster($hamster["Color"], $hamster["Price"]);
			$this->pets[] = $newHamster;
		}
	}
}