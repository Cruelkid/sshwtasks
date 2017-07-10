<?php
require_once 'classes/ITcompany.php';

class HRTeam extends ITcompany
{
	public $devs[];
	public $qcs[];
	public $pm[];

	public function getDev()
	{
		$counter = count($this->teams);
		for ($i = 0; $i < $counter; $i++) { 
			for ($j = 0; $j < count($this->teams[$i]); $j++) { 
				if (get_class($this->teams[$i][$j]) == "Dev") {
					array_push($this->devs, $this->teams[$i][$j]);
				}
			}
		}
		return $this->devs;
	}

	public function getQC()
	{
		$counter = count($this->teams);
		for ($i = 0; $i < $counter; $i++) { 
			for ($j = 0; $j < count($this->teams[$i]); $j++) { 
				if (get_class($this->teams[$i][$j]) == "QC") {
					array_push($this->devs, $this->teams[$i][$j]);
				}
			}
		}
		return $this->qcs;
	}

	public function getPM()
	{
		$counter = count($this->teams);
		for ($i = 0; $i < $counter; $i++) { 
			for ($j = 0; $j < count($this->teams[$i]); $j++) { 
				if (get_class($this->teams[$i][$j]) == "PM") {
					array_push($this->devs, $this->teams[$i][$j]);
				}
			}
		}
		return $this->pm;
	}

	public function addTeamMember()
	{
		$counter = count($this->teams);
		for ($i = 0; $i < $counter; $i++) { 
			if (!($this->teams[$i]->isComplete())) {
				$needs = $this->teams[$i]->getNeeds();
				$needsLength = count($needs);
				for ($j = 0; $j < $needsLength; $j++) { 
					if ($needs[$j] == "PM") {
						$this->getPM();
						array_push($this->teams[$i], $this->pm[$j]);
						unset($this->pm[$j]);
					} elseif ($needs[$j] == "Dev") {
						$this->getDev();
						array_push($this->teams[$i], $this->devs[$j]);
						unset($this->devs[$j]);
					} elseif ($needs[$j] == "QC") {
						$this->getQC();
						array_push($this->teams[$i], $this->qcs[$j]);
						unset($this->qcs[$j]);
					}
				}
			}
		}
	}
}