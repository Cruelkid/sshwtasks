<?php
require_once 'models/HRTeam.php';

class ITcompany
{
	public $candidates[];
	public $teams[];

	public function hire()
	{
		HRTeam::addTeamMember();
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