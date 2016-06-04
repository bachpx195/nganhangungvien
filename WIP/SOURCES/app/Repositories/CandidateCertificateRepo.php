<?php namespace App\Repositories;

use App\Model\CandidateCertificate;

class CandidateCertificateRepo implements ICandidateCertificateRepo {

    /**
     * Get certificates by candidate id
     *
     * @param int $candidateId
     */
    public function getCertificatesByCandidateId($candidateId) {
        $certificate = CandidateCertificate::select()
            ->where('candidate_id', '=', $candidateId)
            ->get();

        return $certificate;
    }
}