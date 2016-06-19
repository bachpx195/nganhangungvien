<?php namespace App\Repositories;

use App\Model\SaveCv;

class SaveCvRepo implements ISaveCvRepo
{
    /**
     * {@inheritdoc}
     */
    public function getSavedCvByEmployerId($employerId, $start, $limit)
    {
        $query = SaveCv::join('candidate', 'save_cv.candidate_id', '=', 'candidate.id')
            ->where('save_cv.employer_id', '=', $employerId)
            ->select('save_cv.*', 'candidate.id as candidateId', 'candidate.full_name as candidateName')
            ->orderBy('save_cv.created_at', 'desc')
            ->skip($start)
            ->take($limit)
            ->get();
        return $query;
    }

    /**
     * {@inheritdoc}
     */
    function getSavedCvByCandidateAndEmployer($employerId, $candidateId)
    {
        $query = SaveCv::join('candidate', 'save_cv.candidate_id', '=', 'candidate.id')
            ->where('save_cv.employer_id', '=', $employerId)
            ->where('save_cv.candidate_id', '='. $candidateId)
            ->select('save_cv.*')
            ->first();
        return $query;
    }
}