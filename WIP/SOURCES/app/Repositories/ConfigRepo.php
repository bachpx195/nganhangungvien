<?php namespace App\Repositories;

use App\Model\Config;

class ConfigRepo implements IConfigRepo {

    public function all() {

        return Config::orderBy('id', 'dec')->get();
    }

    public function findByCode($code){
        return Config::where('code', '=', $code)->first();
    }
}