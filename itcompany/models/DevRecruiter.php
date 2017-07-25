<?php

require_once 'classes/Recruiter.php';

class DevRecruiter extends Recruiter
{
    public function getSpecialist($need, ItCompany $company)
    {
        $candidates = $company->candidates;
        foreach ($candidates as $key => $candidate) {
            if ($candidate->cv == 'Dev') {
                    unset($candidates[$key]);
                    $tmpCandidates = array_values($candidates);
                    $company->candidates = $tmpCandidates;
                    return $candidate;
            }
        }
    }
}