<?php

require_once 'classes/Recruiter.php';

class PMRecruiter extends Recruiter
{
    public function getSpecialist(/*Candidate*/ $need, ItCompany $company)
    {
        $candidates = $company->candidates;
        foreach ($candidates as $key => $candidate) {
            if ($candidate->cv == 'PM') {
                    unset($candidates[$key]);
                    $tmpCandidates = array_values($candidates);
                    $company->candidates = $tmpCandidates;
                    return $candidate;
            }
        }
    }
}