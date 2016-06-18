<?php
/**
 * Created by PhpStorm.
 * User: daibx
 * Date: 6/18/2016
 * Time: 8:45 PM
 */

namespace app\Repositories;


use App\Model\SaveScv;

class SaveCvRepo implements ISaveCvRepo
{
    /**
     * {@inheritdoc}
     */
    function getSavedCvByEmployerId($employerId, $start, $limit)
    {
        $query = SaveScv::join('candidate', 'save_cv.candidate_id', '=', 'candidate.id')
            ->where('save_cv.employer_id', '=', $employerId)
            ->select('save_cv.*', 'candidate.id as candidateId', 'candidate.full_name as candidateName')
            ->orderBy('save_cv.created_at', 'desc')
            ->skip($start)
            ->take($limit)
            ->get();
        return $query;
    }
}