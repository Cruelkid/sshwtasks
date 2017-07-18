<?php

class Team
{
	public $name;
	public $teamMembers[];
	public $project;
	public $needs = ['PM', 'QC', 'QC', 'QC', 'Dev', 'Dev', 'Dev', 'Dev', 'Dev'];

	public function __construct($name, $project, $teamMembers[])
	{
		$this->team = $team;
		$this->project = $project;
		$this->teamMembers = $teamMembers;
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

	public function addTeamMember(Candidate $candidate)
    {
        $salary = $candidate->getWantedSalary();
        $position = $candidate->getProfile();
        $name = $candidate->getName();
        switch ($position) {
            case 'Dev':
                $newTeamMember = new Dev($name, $salary, $position, $this->name);
                array_push($this->teamMembers, $newTeamMember);
                break;
            case 'PM':
                $newTeamMember = new PM($name, $salary, $position, $this->name);
                array_push($this->teamMembers, $newTeamMember);
                break;
            case 'QC':
                $newTeamMember = new QC($name, $salary, $position, $this->name);
                array_push($this->teamMembers, $newTeamMember);
                break;
        }
    }
}