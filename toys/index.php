<?php
require_once 'factory/WoodenFactory.php';
require_once 'factory/MetalFactory.php';

$wf = new WoodenFactory();
$mf = new MetalFactory();
$woodDoll = $wf->getDoll();
$metalDoll = $mf->getDoll();
$woodCar = $wf->getCar();
$metalCar = $mf->getCar();

echo $woodDoll->getClassName() . "<br/>";
echo $metalDoll->getClassName() . "<br/>";
echo $woodCar->getClassName() . "<br/>";
echo $metalCar->getClassName() . "<br/>";