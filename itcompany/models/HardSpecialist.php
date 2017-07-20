<?php
require_once 'classes/ITcompany.php';
require_once 'classes/Person.php';
require_once 'models/Worker.php';
require_once 'interfaces/iITWorker.php';

abstract class HardSpecialist extends Worker implements iITWorker
{
	abstract function doWork();
}