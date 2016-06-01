<?php namespace App\Repositories;

interface IEmployerRepo
{
    /**
     * Search employer by some params
     * - Employer name
     * - Company name
     * - Phone number
     * @param $params some params to search employer
     * @param int $pageSize number of record in page
     * @return mixed
     */
    public function search($params, $pageSize = 10);
}