<?php
require_once 'classes/ITcompany.php';
require_once 'models/Candidate.php';

class HRTeam
{
	public $itCompany = null;
	public $recruiters = [];

	public function __construct(ITcompany $itCompany)
	{
		$this->itCompany = $itCompany;
		$this->recruiters = [
			"PM" = new PMRecruiter(),
			"Dev" = new DevRecruiter(),
			"QC" = new QCRecruiter()
		];
	}

	public function canFindSpecialist(Candidate $need)
	{
		$candidates = $this->itCompany->candidates;
		foreach ($candidates as $key => $candidate) {
			return $candidate->cv == $need->cv;
		}
	}

	public function getSpecialist(Candidate $need, ITcompany $company)
    {
        $cv = $need->cv;
        return $this->recruiters[$cv]->getSpecialist($need, $company);
    }
    
}