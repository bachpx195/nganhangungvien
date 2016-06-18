<?php namespace app\Repositories;

interface ISaveCvRepo
{
    /**
     * Get saved cv by employer id
     * @param $employerId employer id
     * @param $start start position to get in database
     * @param $limit number of record get in one time
     * @return mixed
     */
    function getSavedCvByEmployerId($employerId, $start, $limit);
}