<?php
require_once 'models/HRTeam.php';

class ITcompany
{
	public $candidates[];
	public $teams[];
	public $hrTeam;

	public function __construct($candidates[], $teams[])
	{
		$this->candidates = $candidates;
		$this->teams = $teams;
		$this->hrTeam = new HRTeam($this);
	}

	public function hire(Team $team)
	{
		if (!($team->isComplete())) {
			$needs = $team->getNeeds();
			foreach ($needs as $key => $need) {
				if ($this->hrTeam->canFindSpecialist($need)) {
					$teamMember = $this->hrTeam->getSpecialist($need, $this);
					$team->addTeamMember($teamMember);
					unset($needs[$key]);
					$team->needs = array_values($needs);
				}
			}
		}
	}

	public function gotFun()
	{
		foreach ($this->teams as $team) {
			foreach ($team->teamMembers as $teamMember) {
				$teamMember->doWork();
			}
		}
	}
}