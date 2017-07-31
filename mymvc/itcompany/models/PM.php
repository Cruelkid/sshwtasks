<?php
require_once 'itcompany/classes/ITcompany.php';
require_once 'itcompany/classes/Person.php';
require_once 'itcompany/models/Worker.php';
require_once 'itcompany/models/HardSpecialist.php';

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