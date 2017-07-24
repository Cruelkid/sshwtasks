<?php
require_once 'classes/ITcompany.php';
require_once 'models/QC.php';
require_once 'models/PM.php';
require_once 'models/Dev.php';

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
	// while ($counter >= 1) {
	// d($counter);
			// d($counter);
			foreach ($needs as $key => $value) {
				// _d($value);
				if ($counter > 0 && $member->position == $value) {
				// d($member->position);
					unset($needs[$key]);
					$counter = count($needs);
					break;
				}
			}
	// }
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
    	// _d($candidate);
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
        // array_push($this->teamMembers, $newTeamMember);
        // if (count($this->needs) != 0) {
        	self::equalNeedsWithMembers($this->needs, $this->teamMembers);
        // }
        // switch ($position) {
        //     case 'Dev':
        //         $newTeamMember = new Dev($name, $salary, $position, $this->name);
        //         array_push($this->teamMembers, $newTeamMember);
        //         break;
        //     case 'PM':
        //         $newTeamMember = new PM($name, $salary, $position, $this->name);
        //         array_push($this->teamMembers, $newTeamMember);
        //         break;
        //     case 'QC':
        //         $newTeamMember = new QC($name, $salary, $position, $this->name);
        //         array_push($this->teamMembers, $newTeamMember);
        //         break;
        // }
    }
}