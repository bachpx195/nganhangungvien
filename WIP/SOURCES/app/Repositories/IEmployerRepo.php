<?php namespace App\Repositories;

interface IEmployerRepo
{
    /**
     * Search employer by some params
     * - Employer name
     * - Company name
     * - Phone number
     * @param $keyword some params to search employer
     * @param int $pageSize number of record in page
     * @return mixed
     */
    public function search($keyword, $pageSize = 10);

    /**
     * Find employer by id
     * @param $id employer id
     * @return mixed
     */
    public function findById($id);

    /**
     * Change employer status
     * @param $id employer id
     * @param $status status want to set
     * @return mixed
     */
    public function updateStatus($id, $status);
}