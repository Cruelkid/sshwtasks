<?php
require_once 'factory/WoodenFactory.php';
// require_once 'factory/MetalFactory.php';

function d($t){echo "<xmp>".print_r($t, 1)."</xmp>";}
function _d($t){d($t);die;}

$wf = new WoodenFactory();
// _d($wf);
// $mf = new MetalFactory();

echo "test";

echo $wf->getDoll->getClassName() . "<br/>";
echo $wf->getCar->getClassName() . "<br/>";
// echo $mf->getDoll->getClassName() . "<br/>";
// echo $mf->getCar->getClassName() . "<br/>";