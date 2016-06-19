<?php namespace App\Repositories;

interface ISaveCvRepo
{
    /**
     * Get saved cv by employer id
     * @param $employerId employer id
     * @param $start start position to get in database
     * @param $limit number of record get in one time
     * @return mixed
     */
    function getSavedCvByEmployerId($employerId, $start, $limit);

    /**
     * Get save cv by employer id and candidate id
     * @param $employerId employer id
     * @param $candidateId candidate id
     * @return mixed
     */
    function getSavedCvByCandidateAndEmployer($employerId, $candidateId);

    /**
     * Count saved cv
     * @param $employerId
     * @param $candidateId
     * @return mixed
     */
    public function countSavedCv($employerId, $candidateId);
}