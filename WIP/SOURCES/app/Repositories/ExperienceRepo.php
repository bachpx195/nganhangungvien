<?php namespace App\Repositories;

use App\Model\Experience;

class ExperienceRepo implements IExperienceRepo {

    /**
     * Get experiences by candidate id
     *
     * @param int $candidateId
     */
    public function getExperiencesByCandidateId($candidateId) {
        $experiences = Experience::select()
                            ->where('candidate_id', '=', $candidateId)
                            ->get();

        return $experiences;
    }
}