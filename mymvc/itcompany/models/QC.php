<?php
require_once 'itcompany/classes/ITcompany.php';
require_once 'itcompany/classes/Person.php';
require_once 'itcompany/models/Worker.php';
require_once 'itcompany/models/HardSpecialist.php';

class QC extends HardSpecialist
{
	public function doWork()
	{
		return "I'm testing software!";
	}

	public function doITWork()
    {
        return true;
    }
}