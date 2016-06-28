<?php namespace App\Repositories;

interface ICandidateExpectAddressRepo
{
    public function getExpectAddressesByCandidateId($candidateId);

    public function getExpectAddress($candidateId, $provinceId);

}
