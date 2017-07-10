<?php
require_once 'classes/ITcompany.php';
require_once 'classes/Person.php';
require_once 'classes/Worker.php';
require_once 'classes/HardSpecialist.php';

class QC extends HardSpecialist
{
	function __construct($name, $team)
	{
		$this->name = $name;
		$this->team = $team;
		$this->salary = "600$";
		$this->position = "QC";
	}

	public function doWork()
	{
		return "I'm testing software!"
	}
}