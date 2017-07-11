<?php
require_once 'classes/petshop.php';
require_once 'classes/pet.php';
require_once 'models/cat.php';
require_once 'models/dog.php';
require_once 'models/hamster.php';

function d($t){echo "<xmp>".print_r($t, 1)."</xmp>";}
function _d($t){d($t);die;}

session_start();

$ps = new PetShop();

$ps->getDataFromFile();

$_SESSION['pets'] = $ps->pets;

// foreach ($ps->pets as $pet) {
// 	d(get_class($pet));
// }
// _d($ps->pets);

// echo "Average price: " . $ps->getAvgPrice($ps->pets) . "<br/>";
// echo "<br/>";
// $petsByColor = $ps->getByColor("white", $ps->pets);
// foreach ($petsByColor as $pet) {
// 	echo implode(', ', $pet);
// 	echo "<br/>";
// }
// echo "<br/>";
// $petsByType = $ps->getByType("cat", $ps->pets);
// foreach ($petsByType as $pet) {
// 	echo implode(', ', $pet);
// 	echo "<br/>";
// }
// echo "<br/>";
