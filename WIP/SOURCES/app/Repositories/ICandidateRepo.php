<?php namespace App\Repositories;

interface ICandidateRepo
{
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
    public function search($params);
}
