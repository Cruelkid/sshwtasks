<?php
include_once 'controllers/PetShopController.php';

//functions for debugging
function d($t){echo "<xmp>".print_r($t, 1)."</xmp>";}
function _d($t){d($t);die;}
//

$controller = new PetShopController();
$controller->invoke();
?>
