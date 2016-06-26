<?php namespace App\Repositories;

use App\Model\CandidateExpectAddress;

class CandidateExpectAddressRepo implements ICandidateExpectAddressRepo {

    /**
     * Get expect addresses by candidate id
     *
     * @param int $candidateId
     */
    public function getExpectAddressesByCandidateId($candidateId)
    {
        $expectAddresses = CandidateExpectAddress::select()
            ->where('candidate_id', '=', $candidateId)
            ->leftJoin('province','candidate_expect_address.province_id','=','province.id')
            ->get();

        return $expectAddresses;
    }

    /**
     * Get expect address by candidate id and province id
     *
     * @param int $candidateId
     * @param int $provinceId
     */
    public function getExpectAddress($candidateId, $provinceId)
    {
        $expectAddress = CandidateExpectAddress::select()
            ->where('candidate_id', '=', $candidateId)
            ->where('province_id', '=', $provinceId)
            ->first();

        return $expectAddress;
    }
}