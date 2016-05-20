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
    public function search($params, $pageSize = 10);

    public function careerStatistic();

    public function experienceYearsStatistic();

    public function levelsStatistic();

    public function salariesStatistic();

    public function provinceStatistic();
}
