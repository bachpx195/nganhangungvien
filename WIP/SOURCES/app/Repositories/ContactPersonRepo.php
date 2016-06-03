<?php namespace App\Repositories;

use App\Model\CandidateContactPerson;

class ContactPersonRepo implements IContactPersonRepo {

    /**
     * Get contact persons by candidate id
     *
     * @param int $candidateId
     */
    public function getContactPersonsByCandidateId($candidateId) {
        $contactPersons = CandidateContactPerson::select()
            ->where('candidate_id', '=', $candidateId)
            ->get();

        return $contactPersons;
    }
}