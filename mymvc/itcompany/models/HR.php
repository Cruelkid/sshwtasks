<?php
require_once 'itcompany/classes/ITcompany.php';
require_once 'itcompany/classes/Person.php';
require_once 'itcompany/classes/Worker.php';

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