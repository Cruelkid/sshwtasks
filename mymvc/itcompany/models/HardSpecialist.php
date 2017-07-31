<?php
require_once 'itcompany/classes/ITcompany.php';
require_once 'itcompany/classes/Person.php';
require_once 'itcompany/models/Worker.php';
require_once 'itcompany/interfaces/iITWorker.php';

abstract class HardSpecialist extends Worker implements iITWorker
{
	abstract function doWork();
}