<?php
require_once 'classes/ITcompany.php';

abstract class Team extends ITcompany
{
	public $name;
	public $teamMembers[];
	public $project;
	public $needs = ['PM', 'QC', 'QC', 'QC', 'Dev', 'Dev', 'Dev', 'Dev', 'Dev'];

	abstract function doJob();

	public function getNeeds()
	{
		$var = count($this->needs);
		$var2 = count($this->teamMembers);
		for ($i = 0; $i < $var; $i++) { 
			for ($j = 0; $j < $var2; $j++) { 
				if (get_class($this->teamMembers[$j] == $this->needs[$i])) {
					unset($this->needs[$i]);
				}
			}
		}
		return $this->needs;
	}
	
	public function isComplete()
	{
		if (count($this->teamMembers) == 9) {
			return true;
		} else {
			return false;
		}
	}
}