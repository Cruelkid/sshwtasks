<?php
require_once 'classes/ITcompany.php';
require_once 'classes/Person.php';
require_once 'classes/Worker.php';
require_once 'classes/HardSpecialist.php';

class PM extends HardSpecialist
{
	function __construct($name, $team)
	{
		$this->name = $name;
		$this->team = $team;
		$this->salary = "900$";
		$this->position = "PM";
	}

	public function doWork()
	{
		return "I'm guiding my team!"
	}
}