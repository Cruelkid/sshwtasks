<?php
require_once 'classes/ITcompany.php';
require_once 'classes/Person.php';

abstract class Worker extends Person
{
	public $salary;
	public $team;
	public $position;

	public function __construct($name, $salary, $position, $team)
    {
        parent::__construct($name);
        $this->salary = $salary;
        $this->position = $position;
        $this->team = $team;
    }
    
}