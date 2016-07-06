<?php namespace App\Repositories;

interface ICandidateCertificateRepo
{
    public function getCertificatesByCandidateId($candidateId);

}
