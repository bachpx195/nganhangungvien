<?php namespace App\Repositories;

use App\Model\CandidateItLevel;

class ITLevelRepo implements IITLevelRepo {

    /**
     * Get IT levels by candidate id
     *
     * @param int $candidateId
     */
    public function getITLevelsByCandidateId($candidateId) {
        $itLevels = CandidateItLevel::select()
            ->where('candidate_id', '=', $candidateId)
            ->get();

        return $itLevels;
    }
}