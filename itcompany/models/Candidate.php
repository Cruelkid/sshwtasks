<?php
require_once 'classes/ITcompany.php';
require_once 'classes/Person.php';

class Candidate extends Person
{
	public $wantedSalary;
	public $cv;

	function __construct($wantedSalary, $cv)
	{
		$this->wantedSalary = $wantedSalary;
		$this->cv = $cv;
	}
}