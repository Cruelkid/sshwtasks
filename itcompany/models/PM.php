<?php
require_once 'classes/ITcompany.php';
require_once 'classes/Person.php';
require_once 'models/Worker.php';
require_once 'models/HardSpecialist.php';

class PM extends HardSpecialist
{
	public function doWork()
	{
		return "I'm guiding my team!";
	}

	public function doITWork()
    {
        return true;
    }
}