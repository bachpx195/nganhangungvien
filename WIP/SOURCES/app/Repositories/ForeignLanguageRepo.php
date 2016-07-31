<?php namespace App\Repositories;

use App\Model\CandidateForeignLanguage;
use App\Model\ForeignLanguage;

class ForeignLanguageRepo implements IForeignLanguageRepo {

    public function all() {

        return ForeignLanguage::orderBy('id', 'dec')->get();
    }

    public function getSortedList(){

        $results = ForeignLanguage::select('id', 'name')
            ->orderBy('sort_order', 'ASC')
            ->orderBy('name', 'ASC')
            ->get();

        return $results;
    }

    /**
     * {@inheritdoc}
     */
    public function getByForeignLanguage($candidateId)
    {
        $foreignLanguages = CandidateForeignLanguage::select()
            ->where('candidate_id', '=', $candidateId)
            ->get();
        return $foreignLanguages;
    }
}