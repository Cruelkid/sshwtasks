<?php

require_once 'itcompany/classes/Recruiter.php';

class QCRecruiter extends Recruiter
{
    public function getSpecialist($need, ItCompany $company)
    {
        $candidates = $company->candidates;
        foreach ($candidates as $key => $candidate) {
            if ($candidate->cv == 'QC') {
                    unset($candidates[$key]);
                    $tmpCandidates = array_values($candidates);
                    $company->candidates = $tmpCandidates;
                    return $candidate;
            }
        }
    }
}