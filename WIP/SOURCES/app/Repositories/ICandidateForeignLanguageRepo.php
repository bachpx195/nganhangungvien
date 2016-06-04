<?php namespace App\Repositories;

interface ICandidateForeignLanguageRepo
{
    public function getForeignLanguagesByCandidateId($candidateId);

}
