<?php
require_once 'classes/petshop.php';
require_once 'classes/pet.php';
require_once 'models/cat.php';
require_once 'models/dog.php';
require_once 'models/hamster.php';
require_once 'db.json';

function d($t){echo "<xmp>".print_r($t, 1)."</xmp>";}
function _d($t){d($t);die;}

$result = file_get_contents("db.json");
$decoded = json_decode($result);
d($decoded);
_d($decoded->Cats[0]);

// $cat1 = new Cat("Abbath", "black", 2, 666);
// $cat2 = new Cat("Horgh", "white", 4, 500);
// $dog1 = new Dog("Hoest", "grey", 700);
// $dog2 = new Dog("Gaahl", "white", 600);
// $hmstr1 = new Hamster("orange", 13);
// $hmstr2 = new Hamster("grey", 11);

// $pets = [];
// array_push($pets, $cat1);
// array_push($pets, $cat2);
// array_push($pets, $dog1);
// array_push($pets, $dog2);
// array_push($pets, $hmstr1);
// array_push($pets, $hmstr2);
$ps = new PetShop();

_d($ps->getDataFromFile());

echo "Average price: " . $ps->getAvgPrice($pets) . "<br/>";
echo "<br/>";
$petsByColor = $ps->getByColor("white", $pets);
foreach ($petsByColor as $pet) {
	print_r($pet);
	echo "<br/>";
}
echo "<br/>";
$petsByType = $ps->getByType("cat", $pets);
foreach ($petsByType as $pet) {
	print_r($pet);
	echo "<br/>";
}
echo "<br/>";
