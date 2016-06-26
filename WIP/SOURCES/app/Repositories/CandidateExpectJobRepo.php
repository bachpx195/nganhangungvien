<?php namespace App\Repositories;

use App\Model\CandidateExpectJob;

class CandidateExpectJobRepo implements ICandidateExpectJobRepo {

    /**
     * Get expect jobs by candidate id
     *
     * @param int $candidateId
     */
    public function getExpectJobsByCandidateId($candidateId)
    {
        $expectJobs = CandidateExpectJob::select()
            ->where('candidate_id', '=', $candidateId)
            ->leftJoin('job','candidate_expect_job.job_id','=','job.id')
            ->get();

        return $expectJobs;
    }

    /**
     * Get expect job by candidate id and job id
     *
     * @param int $candidateId
     * @param int $jobId
     */
    public function getExpectJob($candidateId, $jobId)
    {
        $expectJob = CandidateExpectJob::select()
            ->where('candidate_id', '=', $candidateId)
            ->where('job_id', '=', $jobId)
            ->first();

        return $expectJob;
    }
}