<?php namespace App\Repositories;

use App\Model\CandidateForeignLanguage;

class CandidateForeignLanguageRepo implements ICandidateForeignLanguageRepo {

    /**
     * Get foreign languages by candidate id
     *
     * @param int $candidateId
     */
    public function getForeignLanguagesByCandidateId($candidateId) {
        $foreignLanguages = CandidateForeignLanguage::select()
            ->where('candidate_id', '=', $candidateId)
            ->join('foreign_language','candidate_foreign_language.language_id','=','foreign_language.id')
            ->get();

        return $foreignLanguages;
    }
}