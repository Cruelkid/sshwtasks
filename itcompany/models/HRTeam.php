<?php
require_once 'classes/ITcompany.php';
require_once 'models/Candidate.php';
require_once 'models/PMRecruiter.php';
require_once 'models/QCRecruiter.php';
require_once 'models/DevRecruiter.php';

class HRTeam
{
	public $itCompany = null;
	public $recruiters = [];

	public function __construct(ITcompany $itCompany)
	{
		$this->itCompany = $itCompany;
		$this->recruiters = [
			"PM" => new PMRecruiter(),
			"Dev" => new DevRecruiter(),
			"QC" => new QCRecruiter()
		];
	}

	public function canFindSpecialist($need)
	{
		$candidates = $this->itCompany->candidates;
		foreach ($candidates as $key => $candidate) {
			return $candidate->cv == $need;
		}
	}

	public function getSpecialist($need, ITcompany $company)
    {
        $cv = $need;
        return $this->recruiters[$cv]->getSpecialist($need, $company);
    }
    
}