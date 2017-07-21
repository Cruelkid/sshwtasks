<?php
include_once 'controllers/SiteController.php';

function d($t){echo "<xmp>".print_r($t, 1)."</xmp>";}
function _d($t){d($t);die;}

$controller = new SiteController();
$controller->invoke();
?>
