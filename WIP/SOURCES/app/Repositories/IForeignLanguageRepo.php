<?php namespace App\Repositories;

interface IForeignLanguageRepo
{
    public function all();

    public function getSortedList();

    /**
     * Get by foreign language
     * @param $candidateId candidate id
     * @return mixed
     */
    public function getByForeignLanguage($candidateId);

}
