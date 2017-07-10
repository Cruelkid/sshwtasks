<?php
require_once 'classes/ITcompany.php';
require_once 'classes/Person.php';
require_once 'classes/Worker.php';

class HR extends Worker
{	
	function __construct($name, $team)
	{
		$this->name = $name;
		$this->team = $team;
		$this->position = "HR";
		$this->salary = "600$";
	}
}