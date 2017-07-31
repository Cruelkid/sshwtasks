<?php
require_once 'itcompany/models/HRTeam.php';

class ITcompany
{
	public $candidates = [];
	public $teams = [];
	public $hrTeam;

	public function __construct($candidates, $teams)
	{
		$this->candidates = $candidates;
		$this->teams = $teams;
		$this->hrTeam = new HRTeam($this);
	}

	public function hire(Team $team)
	{
			$needs = $team->getNeeds();
			foreach ($needs as $key => $need) {
				if (!($team->isComplete())) {
					if ($this->hrTeam->canFindSpecialist($need)) {
						$teamMember = $this->hrTeam->getSpecialist($need, $this);
						$team->addTeamMember($teamMember);
					}	
				}
		}
	}

	public function gotFun()
	{
		foreach ($this->teams as $team) {
			foreach ($team->teamMembers as $teamMember) {
				echo $teamMember->doWork() . "<br/>";
			}
		}
	}
}