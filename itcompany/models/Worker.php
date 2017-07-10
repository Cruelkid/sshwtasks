<?php
require_once 'classes/ITcompany.php';
require_once 'classes/Person.php';

abstract class Worker extends Person
{
	public $salary;
	public $team;
	public $position;
}