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
    public function search($params, $offset, $limit) {
        $query = Candidate::query();

        if($params['title']){
            $query = $query->where('cv_title', '=', $params['title']);
        }

        if($params['occupation']){
            $query = $query->where('expect_job', '=', $params['occupation']);
        }

        if($params['province']){
            $query = $query->where('province_id', '=', $params['province']);
        }

        if($params['salaryGrade']){
            $query = $query->where('salary', '=', $params['salaryGrade']);
        }

        if($params['degree']){
            $query = $query->where('level', '=', $params['degree']);
        }

        if($params['yearOfExp']){
            $query = $query->where('experience_years', '=', $params['yearOfExp']);
        }

        if($params['sex']){
            $query = $query->where('sex', '=', $params['sex']);
        }

        /*if($params['sex']){
            $query = $query->where('sex', '=', $params['sex']);
        }*/

        //$query = $query->take
        return $query->get();

    }
}