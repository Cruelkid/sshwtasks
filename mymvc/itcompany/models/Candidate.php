<?php
require_once 'itcompany/classes/Person.php';
require_once 'itcompany/interfaces/iITWorker.php';

class Candidate extends Person implements iITWorker
{
	public $wantedSalary;
	public $cv;

	function __construct($name, $wantedSalary, $cv)
	{
		parent::__construct($name);
		$this->wantedSalary = $wantedSalary;
		$this->cv = $cv;
	}

	public function doITWork()
	{
		return true;
	}
}