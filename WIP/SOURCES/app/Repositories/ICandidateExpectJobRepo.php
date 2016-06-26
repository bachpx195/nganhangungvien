<?php namespace App\Repositories;

interface ICandidateExpectJobRepo
{
    public function getExpectJobsByCandidateId($candidateId);

    public function getExpectJob($candidateId, $jobId);

}
