<?php
require_once 'classes/ITcompany.php';
require_once 'classes/Person.php';
require_once 'classes/Worker.php';

abstract class HardSpecialist extends Worker
{
	abstract function doWork();
}