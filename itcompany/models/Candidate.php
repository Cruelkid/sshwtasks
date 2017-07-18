<?php
require_once 'classes/Person.php';
require_once 'interfaces/iITWorker.php';

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