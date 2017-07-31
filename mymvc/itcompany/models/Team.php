<?php
require_once 'itcompany/classes/ITcompany.php';
require_once 'itcompany/models/QC.php';
require_once 'itcompany/models/PM.php';
require_once 'itcompany/models/Dev.php';

class Team extends ITcompany
{
	public $name;
	public $project;
	public $teamMembers = [];
	private $needs = ['PM', 'QC', 'QC', 'QC', 'Dev', 'Dev', 'Dev', 'Dev', 'Dev'];

	public function __construct($name, $project, $teamMembers)
	{
		$this->name = $name;
		$this->project = $project;
		$this->teamMembers = $teamMembers;
		self::equalNeedsWithMembers($this->needs, $teamMembers);
	}

	private function equalNeedsWithMembers($needs, $members)
	{
		$counter = count($needs);
		foreach ($members as $member) {
			foreach ($needs as $key => $value) {
				if ($counter > 0 && $member->position == $value) {
					unset($needs[$key]);
					$counter = count($needs);
					break;
				}
			}
		}
		$this->needs = $needs;
	}

	public function doJob()
	{
		$result = "";
		foreach ($this->teamMembers as $teamMember) {
			$result .= $teamMember->doWork() . "<br/>";
		}
		return $result;
	}

	public function getNeeds()
	{
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

	public function addTeamMember(Candidate $candidate)
    {
        $salary = $candidate->wantedSalary;
        $position = $candidate->cv;
        $name = $candidate->name;

        if ($position == 'QC') {
        	$newTeamMember = new QC($name, $salary, $position, $this->name);
		} elseif ($position == 'PM') {
        	$newTeamMember = new PM($name, $salary, $position, $this->name);
		} elseif ($position == 'Dev') {
        	$newTeamMember = new Dev($name, $salary, $position, $this->name);
		}

        $this->teamMembers[] = $newTeamMember;
        self::equalNeedsWithMembers($this->needs, $this->teamMembers);
    }
}