<?php namespace App\Repositories;

use App\Model\Candidate;

class CandidateRepo implements ICandidateRepo {

    /**
     * Search candidates by list of attributes
     * - Title of CV
     * - Occupation
     * - Province
     * - Salary Grade
     * - Degree
     * - Year of experience
     * - Sex
     * - Foreign language
     * - Upate time
     *
     * @param $params
     * @param $offset
     * @param $limit
     */
    public function search($params) {
        $query = Candidate::select();

        if(isset($params['title']) && $params['title']){
            $query = $query->where('cv_title', '=', $params['title']);
        }

        if(isset($params['occupation']) && $params['occupation']){
            $query = $query->where('job', '=', $params['occupation']);
        }

        if(isset($params['province']) && $params['province']){
            $query = $query->where('province_id', '=', $params['province']);
        }

        if(isset($params['salaryGrade']) && $params['salaryGrade']){
            $query = $query->where('salary', '=', $params['salaryGrade']);
        }

        if(isset($params['degree']) && $params['degree']){
            $query = $query->where('level', '=', $params['degree']);
        }

        if(isset($params['yearOfExp']) && $params['yearOfExp']){
            $query = $query->where('experience_years', '=', $params['yearOfExp']);
        }

        if(isset($params['sex']) && $params['sex']){
            $query = $query->where('sex', '=', $params['sex']);
        }

        return $query->paginate();

    }
}