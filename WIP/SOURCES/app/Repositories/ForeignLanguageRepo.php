<?php namespace App\Repositories;

use App\Model\ForeignLanguage;

class ForeignLanguageRepo implements IForeignLanguageRepo {

    public function all() {

        return ForeignLanguage::orderBy('id', 'dec')->get();
    }
}