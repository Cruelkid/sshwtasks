<?php
require_once 'classes/ITcompany.php';
require_once 'classes/Person.php';
require_once 'models/Worker.php';
require_once 'models/HardSpecialist.php';

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