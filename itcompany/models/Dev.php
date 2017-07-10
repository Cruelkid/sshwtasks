<?php
require_once 'classes/ITcompany.php';
require_once 'classes/Person.php';
require_once 'classes/Worker.php';
require_once 'classes/HardSpecialist.php';

class Dev extends HardSpecialist
{
	function __construct($name, $team)
	{
		$this->name = $name;
		$this->team = $team;
		$this->salary = "700$";
		$this->position = "Dev";
	}

	public function doWork()
	{
		return "I'm developing software!"
	}
}