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
     */
    public function search($params, $pageSize = 10);

    public function careerStatistic();

    public function experienceYearsStatistic();

    public function levelsStatistic();

    public function salariesStatistic();

    public function provinceStatistic();

    public function candidateStatistic();

    public function bestViewStatistic();

    public function countAllStatistic();

    public function countNewStatistic();

    public function countRecentStatistic();

    public function sameExpStatistic($id);

    public function sameLvlStatistic($id);

    public function updateStatus($id, $status);
}
